<?php
/**
*
* @copyright (c) 2009, 2010, 2011 Quoord Systems Limited
* @license http://opensource.org/licenses/gpl-2.0.php GNU Public License (GPLv2)
*
*/

defined('IN_MOBIQUO') or exit;
include_once $phpbb_root_path . 'includes/functions_convert.' . $phpEx;
function get_config_func()
{    
    global $mobiquo_config, $config, $auth, $user, $db, $cache;
    
    if($cache->get('_banner_control') == 'no')
    {
    	$mobiquo_config['banner_control'] = 0;
    }
    
    $isTTServerCall = false;
    if(isset($_SERVER['HTTP_X_TT']))
    {
		$code = trim($_SERVER['HTTP_X_TT']);
        if (!class_exists('classTTConnection')){
            if (!defined('IN_MOBIQUO')){
                define('IN_MOBIQUO', true);
            }
            require_once(TT_ROOT .'include/classTTConnection.php');
        }
        $connection = new classTTConnection();
        $response = $connection->actionVerification($code,'get_config');
        if($response)
        {
            $isTTServerCall = true;
        }
    }
	if(!$isTTServerCall)
    {
        $mobiquo_config['version'] = substr($mobiquo_config['version'], 0,strpos($mobiquo_config['version'], '_')) ;
    }
	$config_list = array(
        'is_open'    => new xmlrpcval($mobiquo_config['is_open'] ? true : false, 'boolean'),
        'guest_okay' => new xmlrpcval(false, 'boolean'),
    );
    if($isTTServerCall)
    {
        $config_list['sys_version'] = new xmlrpcval($config['version'], 'string');
    }
    
    $sql = 'SELECT f.*  FROM ' . FORUMS_TABLE . ' f ORDER BY f.left_id ASC';
    $result = $db->sql_query($sql, 600);
    while ($row = $db->sql_fetchrow($result))
    {
    	$forum_id = $row['forum_id'];
    	if($auth->acl_get('f_list', $forum_id))
    	{
    		$config_list['guest_okay'] = new xmlrpcval(true, 'boolean');
    		break;
    	}
    }
    $db->sql_freeresult($result);
    
    if($config['require_activation'] == USER_ACTIVATION_DISABLE)
    {
    	$mobiquo_config['sign_in'] = 0;
	    $mobiquo_config['inappreg'] = 0;
	    
	    $mobiquo_config['sso_signin'] = 0;
	    $mobiquo_config['sso_register'] = 0;
	    $mobiquo_config['native_register'] = 0;
    }
	if (!function_exists('curl_init') && !@ini_get('allow_url_fopen'))
	{
	    $mobiquo_config['sign_in'] = 0;
	    $mobiquo_config['inappreg'] = 0;
	    
	    $mobiquo_config['sso_login'] = 0;
	    $mobiquo_config['sso_signin'] = 0;
	    $mobiquo_config['sso_register'] = 0;
	}
	if(isset($config['tapatalk_register_status']))
	{
		if($config['tapatalk_register_status'] == 0)
		{
			$mobiquo_config['sign_in'] = 0;
		    $mobiquo_config['inappreg'] = 0;

		    $mobiquo_config['sso_signin'] = 0;
		    $mobiquo_config['sso_register'] = 0;
		}
		elseif($config['tapatalk_register_status'] == 1)
		{
			$mobiquo_config['inappreg'] = 0;
			$mobiquo_config['sign_in'] = 0;

		    $mobiquo_config['sso_signin'] = 0;
		    $mobiquo_config['sso_register'] = 0;
		}
	}
	foreach($mobiquo_config as $key => $value)
    {
        if (!in_array($key, array('is_open', 'guest_okay', 'php_extension', 'shorten_quote', 'hide_forum_id', 'check_dnsbl')))
        {
            $config_list[$key] = new xmlrpcval($value, 'string');
        }
    }
    if(!$mobiquo_config['is_open'])
    {
    	$config_list['is_open'] = new xmlrpcval(0, 'string');
    	$config_list['result_text'] =  new xmlrpcval('Tapatalk pulgin is disabled','base64');
    }
    if($config['board_disable'])
    {
    	$config_list['is_open'] = new xmlrpcval(0, 'string');
    	$config_list['result_text'] = new xmlrpcval($config['board_disable_msg'],'base64');
    }
 	
    if(push_table_exists())
    {
    	$config_list['alert'] = new xmlrpcval(1, 'string');
    }
    if ($auth->acl_get('u_search') && $auth->acl_getf_global('f_search') && $config['load_search'])
    {
        $config_list['guest_search'] = new xmlrpcval('1', 'string');
    }
    
    if ($auth->acl_gets('u_viewprofile', 'a_user', 'a_useradd', 'a_userdel'))
    {
        $config_list['guest_whosonline'] = new xmlrpcval('1', 'string');
    }
	if($config['require_activation'] == USER_ACTIVATION_DISABLE)
    {
    	$config_list['inappreg'] = new xmlrpcval(0, 'string');
    	$config_list['inappsignin'] = new xmlrpcval(0, 'string');
    }
    if ($config['search_type'] == 'fulltext_native')
    {
        $config_list['min_search_length'] = new xmlrpcval($config['fulltext_native_min_chars'], 'int');
    }
    else if ($config['search_type'] == 'fulltext_mysql')
    {
        $config_list['min_search_length'] = new xmlrpcval($config['fulltext_mysql_min_word_len'], 'int');
    }
    
    if(isset($config['tapatalk_push_key']))
    {
    	$config_list['automod'] = new xmlrpcval(1, 'string');
    }
    else 
    {
    	$config_list['automod'] = new xmlrpcval(0, 'string');
    }
    
    if(!empty($config['tapatalk_push_key']))
    {
    	$config_list['api_key'] = new xmlrpcval(md5($config['tapatalk_push_key']), 'string');
    }
    if(isset($config['tapatalk_ad_filter']))
    {
    	$config_list['ads_disabled_group'] = new xmlrpcval($config['tapatalk_ad_filter'], 'string');
    }
    $config_list['guest_group_id'] = new xmlrpcval(get_group_id('GUESTS'), 'string');
    if($isTTServerCall)
    {
        $config_list['stats'] = new xmlrpcval(array(
            'topic'    => new xmlrpcval($config['num_topics'], 'int'),
            'user'     => new xmlrpcval($config['num_users'], 'int'),
            'post'     => new xmlrpcval($config['num_posts'], 'int'),
            'active'   => new xmlrpcval($config['record_online_users'], 'int'),
        ), 'struct');
    }
    $response = new xmlrpcval($config_list, 'struct');
    
    return new xmlrpcresp($response);
}

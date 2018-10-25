<?php

/** 
* User IP Logs
*
* @author Typo admin@typo-it.com (Jeremy) aka Typos on phpbb.com
* @package language
* @version $Id: User IP Logs 1.0.0-RC $
* @copyright (c) 2009 typo-it.com 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/

define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}


$mod_name = 'ACP_USERS_IP_LOGS';
$version_config_name = 'ACP_USERS_IP_LOGS';
$versions = array(
	'1.0.0-RC' => array(
		// Added this installer, ACP modules, adjustable settings, etc.
		'module_add' => array(
			array('acp', 'ACP_FORUM_LOGS', array(
				'module_basename' 	=> 'logs',
				'modes' 			=> array('users_ip')),
			),
		),
	),
);


include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>
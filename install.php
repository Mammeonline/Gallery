<?php
/**
*
* @package install.php
* @version $Id: 1.0.0 19/02/2012
* @copyright (c) 2012 darky - http://www.foruminfopc.fr/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
define('UMIL_AUTO', true);
$phpbb_root_path = defined('PHPBB_ROOT_PATH') ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include $phpbb_root_path . 'common.' . $phpEx;

/**
* @start session management
*/
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

/**
* @language file which will be included when installing
*/
$language_file = 'mods/info_acp_uvc';

/**
* @name of the mod
*/
$mod_name = 'UNIQUE_VISITS_COUNTER';

/**
* @name of the config variable
*/
$version_config_name = 'uvc_version';

/**
* @array of versions and actions within each
*/
$versions = array(
	'1.0.0' => array(
		'config_add' => array(
			array('allow_visits_counter', true),
			array('visits_counter', 0, true),
		),
		'table_add' => array(
			array('phpbb_visits_counter', array(
				'COLUMNS' => array(
					'uvc_ip'		=> array('VCHAR:15', ''),
					'uvc_timestamp'	=> array('INT:30', 0),
				),
				'KEYS'            => array(
					'uvc_ip'    => array('INDEX', 'uvc_ip'),
				),
			)),
		),
		'cache_purge' => array(''),
	),
);

/**
* @include the UMIL Auto file, it handles the rest
*/
include $phpbb_root_path . 'umil/umil_auto.' . $phpEx;

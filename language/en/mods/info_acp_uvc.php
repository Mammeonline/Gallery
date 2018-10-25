<?php
/**
*
* @package language/en/mods/info_acp_uvc.php
* @version $Id: 1.0.0 19/02/2012
* @copyright (c) 2012 darky - http://www.foruminfopc.fr/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

// ignore
if ( !defined('IN_PHPBB') )
{
	exit;
}

// init lang ary, if it doesn't !
if ( empty($lang) || !is_array($lang) )
{
	$lang = array();
}

// administration
$lang = array_merge($lang, array(
	'ALLOW_VISITS_COUNTER'			=> 'Enable unique visits counter',
	'ALLOW_VISITS_COUNTER_EXPLAIN'	=> 'If this option is on No, the unique visits counter is completely disabled.',
));

// umil
$lang = array_merge($lang, array(
	'UNIQUE_VISITS_COUNTER'	=> 'Unique Visits Counter',

	'INSTALL_UNIQUE_VISITS_COUNTER'				=> 'Install Unique Visits Counter MOD',
	'INSTALL_UNIQUE_VISITS_COUNTER_CONFIRM'		=> 'Are you ready to install Unique Visits Counter MOD ?',
	'UPDATE_UNIQUE_VISITS_COUNTER'				=> 'Update Unique Visits Counter MOD',
	'UPDATE_UNIQUE_VISITS_COUNTER_CONFIRM'		=> 'Are you ready to update Unique Visits Counter MOD ?',
	'UNINSTALL_UNIQUE_VISITS_COUNTER'			=> 'Uninstall Unique Visits Counter MOD',
	'UNINSTALL_UNIQUE_VISITS_COUNTER_CONFIRM'	=> 'Are you ready to uninstall Unique Visits Counter MOD ? All settings saved by this MOD will be removed !',
));
?>
<?php
/**
*
* @package acp
* @version $Id: acp_redbar.php,0006 20:07 10/07/2008 cherokee red Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class acp_redbar_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_redbar',
			'title'		=> 'ACP_REDBAR',
			'version'	=> '1.0.1',
			'modes'		=> array(
				'redbar'		=> array('title' => 'ACP_REDBAR', 'auth' => 'acl_a_redbar', 'cat' => array('ACP_CAT_USERS')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>
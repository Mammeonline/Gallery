<?php
/** 
*
* @package acp
* @version $Id: acp_redbar.php,v 0012 11:01 27/10/2008 cherokee red Exp $
* @copyright (c) 2007 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
	
/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
		
/**
* @package acp
*/
class acp_redbar
{
	var $u_action;
					
	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
					
		$user->add_lang('acp/posting');

		// Set up general vars
		$action 		= request_var('action', '');
		$action 		= (isset($_POST['add'])) ? 'add' : $action;
		$action 		= (isset($_POST['save'])) ? 'save' : $action;
		$redbar_id 	= request_var('id', 0);
		$start 		= request_var('start', 0);
							
		// Set up the page
		$this->tpl_name 	= 'acp_redbar';
		$this->page_title 	= 'ACP_REDBAR';

		$form_name = 'acp_prune';
		add_form_key($form_name);

		switch ($action)
		{
			case 'save':

				if (!check_form_key($form_name))
				{
					trigger_error($user->lang['FORM_INVALID']. adm_back_link($this->u_action), E_USER_WARNING);
				}
				$redbar_name 	= utf8_normalize_nfc(request_var('name', '', true));
				$redbar_url 	= utf8_normalize_nfc(request_var('url', '', true));
				$redbar_colour 	= utf8_normalize_nfc(request_var('colour', '', true));

				// We can't have a link without a name ;)
				if (!$redbar_name)
				{
					trigger_error($user->lang['NO_REDBAR_NAME'] . adm_back_link($this->u_action), E_USER_WARNING);
				}

				// Same goes for the URL
				if (!$redbar_url)
				{
					trigger_error($user->lang['NO_REDBAR_LINK'] . adm_back_link($this->u_action), E_USER_WARNING);
				}

				$sql_ary = array(
					'redbar_name'	=> $redbar_name,
					'redbar_url'	=> $redbar_url,
					'redbar_colour'	=> $redbar_colour,
				);
				
				if ($redbar_id)
				{
					$sql = 'UPDATE ' . REDBAR_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . " WHERE redbar_id = $redbar_id";
					$message = $user->lang['REDBAR_UPDATED'];

					add_log('admin', 'LOG_REDBAR_UPDATED', $redbar_name);
				}
				else
				{
					$sql = 'INSERT INTO ' . REDBAR_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
					$message = $user->lang['REDBAR_ADDED'];

					add_log('admin', 'LOG_REDBAR_ADDED', $redbar_name);
				}
				$db->sql_query($sql);

				$cache->destroy('_redbar');

				trigger_error($message . adm_back_link($this->u_action));

			break;

			case 'delete':

				if (!$redbar_id)
				{
					trigger_error($user->lang['MUST_SELECT_LINK'] . adm_back_link($this->u_action), E_USER_WARNING);
				}

				if (confirm_box(true))
				{
					$sql = 'SELECT redbar_name
						FROM ' . REDBAR_TABLE . '
						WHERE redbar_id = ' . $redbar_id;
					$result = $db->sql_query($sql);
					$redbar_name = (string) $db->sql_fetchfield('redbar_name');
					$db->sql_freeresult($result);

					$sql = 'DELETE FROM ' . REDBAR_TABLE . "
						WHERE redbar_id = $redbar_id";
					$db->sql_query($sql);

					$cache->destroy('_redbar');

					add_log('admin', 'LOG_REDBAR_REMOVED', $redbar_name);
				}
				else
				{
					confirm_box(false, $user->lang['CONFIRM_OPERATION'], build_hidden_fields(array(
						'i'		=> $id,
						'mode'		=> $mode,
						'redbar_id'	=> $redbar_id,
						'action'		=> 'delete',
					)));
				}

			break;

			case 'edit':
			case 'add':
				
				$sql = 'SELECT *
					FROM ' . REDBAR_TABLE . '
					ORDER BY redbar_id ASC';
				$result = $db->sql_query($sql);

				while ($row = $db->sql_fetchrow($result))
				{
					if ($action == 'edit' && $redbar_id == $row['redbar_id'])
					{
						$redbar = $row;
					}
				}
				$db->sql_freeresult($result);

				$template->assign_vars(array(
					'S_EDIT'			=> true,
					'U_BACK'			=> $this->u_action,
					'U_ACTION'		=> $this->u_action . '&amp;id=' . $redbar_id,
					'U_SWATCH'		=> append_sid("{$phpbb_admin_path}swatch.$phpEx", 'form=acp_redbar&amp;name=colour'),

					'REDBAR_NAME'		=> (isset($redbar['redbar_name'])) ? $redbar['redbar_name'] : '',
					'REDBAR_URL'		=> (isset($redbar['redbar_url'])) ? $redbar['redbar_url'] : '',
					'REDBAR_COLOUR'	=> (isset($redbar['redbar_colour'])) ? $redbar['redbar_colour'] : '')
				);
						

				return;

			break;
		}

		// How many Links do we have?
		$sql = 'SELECT COUNT(redbar_id) AS total_links
			FROM ' .REDBAR_TABLE . '
			ORDER BY redbar_id';

		$result = $db->sql_query($sql);
		$total_links = (int) $db->sql_fetchfield('total_links');
		$db->sql_freeresult($result);		

		//Pull Links from the database
		$sql = 'SELECT *
			FROM ' . REDBAR_TABLE . '
			ORDER BY redbar_id ASC';
		$result = $db->sql_query_limit($sql, $config['posts_per_page'], $start);


		while ($row = $db->sql_fetchrow($result))
		{

		$rbstyle = '<span style="color: #' . $row['redbar_colour'] . '; font-weight: bold;">' . $row['redbar_colour'] . '</span>';
		$redbar_colour = (empty($row['redbar_colour']) ? $user->lang['FORUM_DEFAULT'] : $rbstyle);

			$template->assign_block_vars('redbar', array(
				'REDBAR_NAME'		=> $row['redbar_name'],
				'REDBAR_URL'		=> $row['redbar_url'],
            	'REDBAR_COLOUR'   	=> $redbar_colour,

				'U_EDIT'			=> $this->u_action . '&amp;action=edit&amp;id=' . $row['redbar_id'],
				'U_DELETE'		=> $this->u_action . '&amp;action=delete&amp;id=' . $row['redbar_id'])
			);	
		}
		$db->sql_freeresult($result);

		$pagination_url = $this->u_action;

		$template->assign_vars(array( 
			'PAGINATION'		=> generate_pagination($pagination_url, $total_links, $config['posts_per_page'], $start, true),
			'S_ON_PAGE'		=> on_page($total_links, $config['posts_per_page'], $start),
			'U_ACTION'		=> $this->u_action)
		);
	}
}

?>
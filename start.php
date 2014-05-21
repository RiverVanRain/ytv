<?php 
/*
 *
 * YouTube TV
 *
 * @author RiverVanRain
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 * @copyright (c) RiverVanRain 2014
 *
 * @link http://weborganizm.org/crewz/p/1983/personal-net
 *
 */

function ytv_init() {
     
	 elgg_register_page_handler('ytv', 'ytv_page_handler');
	 
	 if (elgg_is_logged_in()) {
	 $item = new ElggMenuItem('ytv', elgg_echo('ytv:title'), 'ytv');
	 elgg_register_menu_item('site', $item);
	 }
	 
	 elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'ytv_owner_block_menu');
	
     elgg_register_widget_type("ytv", elgg_echo("ytv:title"), elgg_echo("ytv:description"), "ytv", false);

	elgg_extend_view("css/elgg", "ytv/css");
	elgg_register_js('elgg.ytv','mod/ytv/js/ytv.js');
		
}

function ytv_page_handler($page) {
   $current_user = elgg_get_logged_in_user_entity();
  
  if (isset($page[0])) {
		$username = $page[0];
		$user = get_user_by_username($username);
		elgg_set_page_owner_guid($user->guid);
	} elseif (elgg_is_logged_in()) {
		forward('ytv/'.$current_user->username);
	}
	else {
	forward('404');
	}
    
	require_once dirname(__FILE__) . '/pages/ytv.php';
	return true;
}

function ytv_owner_block_menu($hook, $type, $return, $params) {
	if (elgg_instanceof($params['entity'], 'user')) {
		$url = "ytv/{$params['entity']->username}";
		$item = new ElggMenuItem('ytv', elgg_echo('ytv:title'), $url);
		$return[] = $item;
	}
	return $return;
}

elgg_register_event_handler("init", "system", "ytv_init");
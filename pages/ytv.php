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
elgg_load_js('elgg.ytv');

$title = elgg_echo('ytv:title');

elgg_push_context('ytv');

elgg_push_context('widgets');
$widgets = elgg_get_widgets(elgg_get_page_owner_entity()->getGUID(), "ytv");

elgg_pop_context();
$params = array(
		'num_columns' => 1,
		'show_access' => true,
		'exact_match' => true,
	);

$widgets = elgg_view_layout('widgets', $params);

$body = elgg_view_layout('one_column', array('title' => $title, 'content' => $widgets));

echo elgg_view_page($title, $body);
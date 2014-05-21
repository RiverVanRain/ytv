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
	$widget = $vars["entity"];
	$query = $widget->query;
?>
<div><?php echo elgg_echo("widgets:ytv:query"); ?><br /><?php echo elgg_view("input/text", array("name" => "params[query]", "value" => $query)); ?></div>
<?php 
/*
 *
 * YouTube TV
 *
 * @author RiverVanRain
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 * @copyright (c) RiverVanRain 2014
 *
 * @link http://o.wzm.me/crewz/p/1983/personal-net
 *
 */
	$widget = $vars["entity"];
	$query = $widget->query;
	$name = $widget->name;
    $description = $widget->description;
?>
<div><?php echo elgg_echo("widgets:ytv:query"); ?><br /><?php echo elgg_view("input/text", array("name" => "params[query]", "value" => $query)); ?></div>
<p><strong><?php echo elgg_echo("widgets:ytv:additional"); ?></strong></p>
<div><?php echo elgg_echo("widgets:ytv:name"); ?><br /><?php echo elgg_view("input/text", array("name" => "params[name]", "value" => $name)); ?></div>
<div><?php echo elgg_echo("widgets:ytv:description"); ?><br /><?php echo elgg_view("input/text", array("name" => "params[description]", "value" => $description)); ?></div>

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
$name = $widget->name;
$description = $widget->description;

if ($name) {
?>
<h2 class="ytv-head"><?php echo $name; ?></h2>
<?php 
}

if ($description) {
?>
<h3 class="ytv-head"><?php echo $description; ?></h3>
<?php 
}
if ($query) {
?>
	<div id="frame"></div>
	<script>
			$('#frame').ytv({
					user: '<?php echo $query; ?>',
					accent: 'red',
					browsePlaylists: true,
					controls: true,
					autoplay: false,
				});
		</script>
<?php
}
else {
  echo elgg_echo("widgets:ytv:not_configured");
} 

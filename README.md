# YoutubeTV - Elgg plugin
Name : YouTube TV
Description : YouTube User/Playlist player
Author : RiverVanRain [http://o.wzm.me/creator/rivervanrain]
Web : http://o.wzm.me/crewz/p/1983/personal-net
License : GNU General Public License version 2
Copyright : RiverVanRain 2014
Vendor: (c) 2013 Jacob Kelley

## Features
* Library Independent
* Customizable via CSS
* Autoplay
* Remove YouTube Chrome
* Supports Playlists and Users
* jQuery Support
* Module Support

## Settings and Defaults
Add/Change settings in this file: mod\ytv\views\default\widgets\ytv\content.php

```
$('#frame').ytv({
					user: '<?php echo $query; ?>',
					accent: 'red',
					browsePlaylists: true,
					controls: true,
					autoplay: false,
				});
```

* `element`: The element or element ID to apply the YouTube TV Player to
* `user`: (String) The Username of the YouTube user you want to display videos from
* `playlist`: (String) The Playlist ID you would like to load (Overrides `user`)
* `browsePlaylists`: (Boolean) If `true` and the specified `user` has YouTube playlists, they will be accessible in the player by clicking the users Username
* `fullscreen`: (Boolean) If `true`, the player will take up all the available space on the users browser screen
* `accent`: (String) A CSS color string to apply to the accents of the player
* `controls`: (Boolean) If `false`, the normal YouTube controls will be hidden.
* `annotations`: (Boolean) If `false`, the annotations from the YouTube video will be hidden
* `autoplay`: (Boolean) If `true`, the first video in the list will automatically play once the player has loaded
* `chainVideos`: (Boolean) If `true`, the next video in que will automatically play after the current video has completed
* `wmode`: (String) Sets the Window Mode property for transparency, layering, and positioning in the browser. Values can be: `window` - movie plays in its own rectangular window on a web page. `opaque` - the movie hides everything on the page behind it. `transparent` - the background of the HTML page shows through all transparent portions of the movie, this may slow animation performance.
* `events`: The respective events will fire when key actions in the player have been called

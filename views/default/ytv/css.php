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
?> 
#frame {
	margin: 20px auto 30px;
	width: 800px;
	height: 400px;
}
.playlists .special {
    position: absolute;
    top: 50px;
    left: 50%;
    margin-left: 420px;
}
.playlists .ytv-list-header > a {
	-webkit-animation: pulse 2s infinite;
	-moz-animation: pulse 2s infinite;
	-o-animation: pulse 2s infinite;
	animation: pulse 2s infinite;
}
.playlists .ytv-list-header.ytv-playlist-open > a {
		-webkit-animation: none;
		-moz-animation: none;
		-o-animation: none;
		animation: none;
}
.ytv-head {
text-align: center;
}
@media (max-width: 820px) {
	#frame {
	   width: 100%;
	}
	.ytv-list {
       display: none;
    }
	.ytv-video {
	   position: relative !important;
	 }
	.elgg-col-1of3,
	.elgg-col-2of3,
	#elgg-widget-col-1,
	#elgg-widget-col-2,
	#elgg-widget-col-3 {
		width: 100%;
		min-height: 0 !important;
	}
	.elgg-module-widget {
		margin: 0 0 15px;
	}
}
/*
 * YouTube TV
 */
/*
 * Base Canvas
 */
.ytv-canvas {
	display: block;
	background: #282828;
	overflow: hidden;
	font-family: arial, sans-serif;
}
.ytv-canvas ::-webkit-scrollbar {
	border-left: 1px solid #000;
	width: 10px;
}
.ytv-canvas ::-webkit-scrollbar-thumb {
	background: rgba(255,255,255,0.1);
}
/*
 * Video
 */
.ytv-video {
	position: absolute;
	top: 0;
    right: 300px;
    bottom: 0;
    left: 0;
    height: 100%;
}
.ytv-video iframe {
	width: 100%;
	height: 100%;
	border: none;
	outline: none;
	display: block;
}
/*
 * List
 */
.ytv-list {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    height: 100%;
    width: 300px;
}
.ytv-list-inner {
	overflow: auto;
	position: absolute;
	top: 52px;
	right: 0;
	bottom: 0;
	left: 0;
	-webkit-overflow-scrolling: touch;
}
.ytv-list ul {
	margin: 0;
	padding: 0;
	list-style-type: none;
}
.ytv-list .ytv-active a {
	border-left: 2px solid #fff;
	background: rgba(255,255,255,0.05);;
}
.ytv-list a {
	display: block;
	text-decoration: none;
	font-size: 11px;
	color: #FEFEFE;
	padding: 10px;
	padding-left: 8px;
	border-top: 1px solid rgba(255,255,255,0.1);
	border-bottom: 1px solid rgba(0,0,0,0.5);
	border-left: 2px solid transparent;
}
.ytv-list a b {		
	max-height: 45px;
	overflow: hidden;
	display: block;
	text-overflow: ellipsis;
}
.ytv-list li:first-child a { border-top: none; }
.ytv-list li:last-child a { border-bottom: none; }
.ytv-list a:hover,
.ytv-list-header .ytv-playlists a:hover { background: rgba(255,255,255,0.05); }
.ytv-list a:active,
.ytv-list-header .ytv-playlists a:active { background: rgba(0,0,0,0.05); }
.ytv-list .ytv-content { padding-left: 125px; }
.ytv-list .ytv-thumb-stroke {
	position: absolute;
	top: 1px;
	left: 1px;
	bottom: 1px;
	right: 1px;
	z-index: 2;
	outline: 1px solid rgba(255,255,255,0.1);
}
.ytv-list .ytv-thumb {
	float: left;
	position: relative;
	outline: 1px solid rgba(0,0,0,0.5);
}
.ytv-list .ytv-thumb img {
	width: 120px;
	display: block;
}
.ytv-list .ytv-thumb span {
	position: absolute;
	bottom: 5px;
	right: 5px;
	color: #eee;
	background: rgba(0,0,0,0.7);
	font-size: 11px;
	font-weight: bold;
	padding: 0px 4px;
				
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.ytv-views {
	display: block;
	margin-top: 5px;
	font-size: 10px;
	font-weight: normal;
	opacity: 0.3;
}
.ytv-list-header {
	height: 52px;
	-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
	-moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
	box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}
.ytv-list-header a {
	background: rgba(255,255,255,0.05);
    position: relative;
    z-index: 10;
}
.ytv-list-header img,
.ytv-list .ytv-playlists .ytv-thumb img {
	width: 30px;
	vertical-align: middle;
}
.ytv-list-header span {		
	padding-left: 10px;
    font-size: 12px;
	font-weight: bold;
}
/*
 * Playlists
 */
.ytv-playlists {
    z-index: 9;
    position: absolute;
    background: #282828;
    top:52px;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: auto;
    display: none;
}
.ytv-playlists img,
.ytv-list-header img {
	float: left;
}
.ytv-playlists a span,
.ytv-list-header a span {	
	padding-left: 10px;
	display: block;
	overflow: hidden;
	text-overflow: ellipsis;
}
.ytv-list-header .ytv-playlists a {
   background: none;
}
.ytv-playlist-open .ytv-playlists {
		display: block;
}
/*
 * Modifiers
 */
.ytv-relative {
	position: relative;
	width: 100%;
	height: 100%;
}
.ytv-full {
	position: fixed;
	top: 0;
	left: 0;
	width: 100% !important;
	height: 100% !important;
	margin: 0 !important;
}
.ytv-arrow {
	width: 0;
	position: relative;
	top: 10px;
	right: 5px;
	border: 10px solid transparent;
	float: right;
	border-top-color: rgba(0,0,0,0.4);
	display: none;
}
.ytv-has-playlists .ytv-arrow {
	display: inline-block;
}
.ytv-playlist-open .ytv-arrow {
	border-color: transparent;
	border-bottom-color: rgba(0,0,0,0.4);
	top: -10px;
}
.ytv-list-header a:after,
.ytv-clear:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}

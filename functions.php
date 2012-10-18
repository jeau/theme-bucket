<?php

/**
 * Adds theme assets to queues.
 *
 * - Modernizr
 * - Respond.js
 * - Selectivizr
 * - Google Fonts style sheet
 * - Theme style sheet
 */
function queue_theme_assets() {
  queue_js_file('modernizr.min');

  $respondSrc = src('respond.min.js', 'javascripts');
  $modernizrLoad = "Modernizr.load([{test: Modernizr.mq(), nope: " . "['$respondSrc']}]);";
  queue_js_string($modernizrLoad);

  get_view()->headScript()->appendFile(src('selectivizr.min.js', 'javascripts'), 'text/javascript', array('conditional' => 'lt IE 9'));

  get_view()->headLink()->prependStylesheet('http://fonts.googleapis.com/css?family=Economica:700,700italic|Open+Sans:400italic,700italic,400,700', 'screen');

  queue_css_file('style');
}


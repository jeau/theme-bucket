<?php

require_once dirname(__FILE__) . '/functions.php';

add_plugin_hook('public_theme_header', 'queue_theme_assets');

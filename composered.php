<?php
/**
 * Plugin Name: Composered
 * Description: WordPress Plugin Boilerplate with Composer Support
 * Version: 1.0.0
 * Author: Joe Njenga
 */

// Load Composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Instantiate your boilerplate plugin class
new Composered\ComposeredPlugin();

// Instantiate the admin class
new Composered\Admin\Admin();

// Instantiate the Public class
new Composered\Public\Public();
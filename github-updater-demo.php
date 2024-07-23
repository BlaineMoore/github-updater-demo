<?php

namespace RYSE\GitHubUpdaterDemo;

/**
 * Plugin Name:        GitHub Updater Demo
 * Plugin URI:         https://ryansechrest.github.io/github-updater-demo
 * Version:            1.0.8
 * Description:        WordPress plugin to demonstrate how `GitHubUpdater` can enable WordPress to check for and update a custom plugin that's hosted in either a public or private repository on GitHub.
 * Author:             Ryan Sechrest
 * Author URI:         https://ryansechrest.com/
 * Text Domain:        ryse-github-updater-demo
 * Requires at least:  6.5
 * Requires PHP:       8.2
 * Tested Up To:       6.6.1
 * Branch Name:        master
 * Update URI:         https://github.com/blainemoore/github-updater-demo
 * Icon URI:           ../docs/icon-128x128.png?raw=true
 * Icon 2x URI:        ../docs/icon-256x256.png?raw=true
 * Banner URI:         ../docs/banner-772x250.png?raw=true
 * Banner 2x URI:      ../docs/banner-1544x500.png?raw=true
 * License:            GPLv2
 * License URI:        https://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('ABSPATH')) exit;

require_once 'autoloader.php';

new Plugin(__FILE__);
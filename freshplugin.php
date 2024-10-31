<?php
/*
Plugin Name: Posts Per Page Customizer
Plugin URI: http://freshface.net
Description: Powerful tool to tweak your existing loops. Set posts per page, filter posts, order them, hide them, apply Conditional Logic, etc.
Version: 1.0.0
Author: FRESHFACE
Author URI: http://freshface.net
Dependency: fresh-framework
*/

require_once dirname(__FILE__).'/fresh-framework/framework/init/class.ffFrameworkVersionManager.php';
ffFrameworkVersionManager::getInstance()->addVersion('1.8.17', dirname(__FILE__).'/fresh-framework/framework/bootstrap.php', dirname(__FILE__).'/fresh-framework', plugin_dir_url(dirname(__FILE__).'/fresh-framework/freshplugin.php'), true );

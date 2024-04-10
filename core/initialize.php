<?php

// Define directory separator constant if not already defined
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// Define absolute path to the site root
defined('SITE_ROOT') ? null : define('SITE_ROOT',  'C:\Users\draga\Local sites' . DS . 'RestFullApi-php');

// Define paths to include and core directories
defined('INC_PATH') ? null : define('INC_PATH', SITE_ROOT . DS . 'includes');
defined('CORE_PATH') ? null : define('CORE_PATH', SITE_ROOT . DS . 'core');

// Load the config file first
require_once(INC_PATH . DS . 'config.php');

// Require core classes
require_once(CORE_PATH . DS . 'post.php');

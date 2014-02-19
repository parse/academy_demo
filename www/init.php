<?php
// Include Composer autoloader
require '../vendor/autoload.php';

define('ENVIRONMENT', getenv('ENVIRONMENT') ? getenv('ENVIRONMENT') : 'development');

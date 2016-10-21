<?php

define("APP_START", microtime(true));
define("APP_ROOT", __DIR__.'/../');

require_once(APP_ROOT."vendor/autoload.php");

$application = new Papp\Application();
$application->loadDependencies();
$application->loadRoutes();
$application->run();

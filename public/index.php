<?php

require_once("../bootstrap.php");

$application = new Papp\Application();
$application->loadDependencies();
$application->loadRoutes();
$application->run();

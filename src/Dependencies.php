<?php

use Slim\Container;
use Papp\Services\Session;
use Papp\Services\Renderer;
use Papp\Services\Example;

/**
 * Dependencies
 * Load all system dependencies from a single location using slims DI container
 */

// Papp\Services\Session
$this->container['Session'] = function ($container) {
	return new Session($container);
};

// Papp\Services\Renderer
$this->container['Renderer'] = function ($container) {
    return new Renderer(APP_ROOT.'src/Views/');
};

// Papp\Services\Example
$this->container['Example'] = function (Container $container) {
	return new Example($container);
};

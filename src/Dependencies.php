<?php

use Slim\Container;

use Papp\Middleware\Authentication as AuthenticationMiddleware;

use Papp\Services\Session as SessionService;
use Papp\Services\Renderer as RendererService;
use Papp\Services\Authentication as AuthenticationService;
use Papp\Services\Example as ExampleService;

/**
 * Dependencies
 * Load all system dependencies from a single location using slims DI container
 */

// Papp\Middleware\Authentication
$this->container["AuthenticationMiddleware"] = function (Container $container) {
	return new AuthenticationMiddleware($container);
};

// Papp\Services\Session
$this->container['SessionService'] = function (Container $container) {
	return new SessionService($container);
};

// Papp\Services\Renderer
$this->container['RendererService'] = function (Container $container) {
    return new RendererService(APP_ROOT.'src/Views/');
};

// Papp\Services\Authentication
$this->container['AuthenticationService'] = function (Container $container) {
   return new AuthenticationService($container);
};

// Papp\Services\Example
$this->container['ExampleService'] = function (Container $container) {
	return new ExampleService($container);
};

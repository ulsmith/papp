<?php

namespace Papp;

use Slim\Container;
use Slim\App;

/**
 * Papp\Application
 * Main application class, extending slim app to add dependency and route loaders
 * @extends Slim\App
 */
class Application extends App
{
	/** @const DEPENDENCIES Location of dependencies file */
	const DEPENDENCIES = APP_ROOT.'src/Dependencies.php';
	/** @const ROUTES Location of routes file */
	const ROUTES = APP_ROOT.'src/Routes.php';
	/** @var container Slim DI Container */
	protected $container;
	/** @var session Session service */
	protected $session;

    public function __construct()
    {
		$this->container = new Container();
		parent::__construct($this->container);
	}

	/**
	 * loadDependencies()
	 * Loads application dependencies into slims DI container from single file
	 */
	public function loadDependencies()
	{
		if (file_exists(self::DEPENDENCIES)) require(self::DEPENDENCIES);
	}

	/**
	 * loadRoutes()
	 * Loads application routes into slim from single file
	 */
	public function loadRoutes()
	{
		if (file_exists(self::ROUTES)) require(self::ROUTES);
	}

	/**
	 * run()
	 * Starts the application
	 */
	public function run($silent = false)
	{
		$this->session = $this->container->get('Session');
		$this->session->start();

		parent::run($silent);
	}
}

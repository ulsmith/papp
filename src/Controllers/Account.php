<?php

namespace Papp\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Container;

/**
 * Papp\Controllers\Index
 * Default controller
 */
class Account
{
    /** @var Slim\Container slims DI container */
	private $container;
	/** @var PhpRenderer view renderer for basic php template files */
	private $renderer;
	/** @var Papp\Services\Authentication for handling session based authentication */
	private $auth;
    /** @var Example sample example service injected */
    private $example;

    public function __construct(Container $container)
    {
        $this->container = $container;
		$this->renderer = $container->get('RendererService');
		$this->auth = $container->get('AuthenticationService');
		$this->example = $container->get('ExampleService');
    }

	/**
	 * login()
	 * Default method for default controller
	 * @param Request $request The PSR-7 message request coming into slim
	 * @param Response $response The PSR-7 message response going out of slim
	 * @param array $args Any arguments passed in from request
	 */
    public function login(Request $request, Response $response, $args)
    {
		// already logged in?
		if ($this->auth->isLoggedIn()) {
			header('Location: '.WEB_ROOT);
			die();
		}

		// get details
		$user = $request->getParsedBodyParam('user');
		$pass = $request->getParsedBodyParam('password');

		// log in user
		if ($this->auth->login($user, $pass)) {
			header('Location: '.WEB_ROOT);
			die();
		}

		return $this->renderer->render($response, 'account/login.php');
    }

	/**
	 * logout()
	 * Default method for default controller
	 * @param Request $request The PSR-7 message request coming into slim
	 * @param Response $response The PSR-7 message response going out of slim
	 * @param array $args Any arguments passed in from request
	 */
    public function logout(Request $request, Response $response, $args)
    {
		$this->auth->logout();

		header('Location: '.WEB_ROOT);
		die();
    }
}

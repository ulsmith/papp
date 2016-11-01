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
	private $session;
	/** @var PhpRenderer view renderer for basic php template files */
	private $renderer;
    /** @var Example sample example service injected */
    private $example;

    public function __construct(Container $container)
    {
        $this->container = $container;
		$this->session = $container->get('Session');
		$this->renderer = $container->get('Renderer');
		$this->example = $container->get('Example');
    }

	/**
	 * index()
	 * Default method for default controller
	 * @param Request $request The PSR-7 message request coming into slim
	 * @param Response $response The PSR-7 message response going out of slim
	 * @param array $args Any arguments passed in from request
	 */
    public function login(Request $request, Response $response, $args)
    {
		$user = $request->getParsedBodyParam('user');
		$password = $request->getParsedBodyParam('password');

		if ($user && $password) {
			// do login check
			// set session
			// redirect
		}
// $this->session->set('test.value', 'boo');
// $this->session->delete('test');
var_dump($this->session->get());exit;
// session_set_cookie_params(100);

// $_SESSION['test'] = 'fsfds;';
		// var_dump($_SESSION['test']);

		// show login page
		return $this->renderer->render($response, 'login.php', [
			'name' => 'This is data sent into the php view',
			'example' => $this->example->test(),
			'test' => ['this is a test 1', 'this is a test 2']
		]);
    }
}

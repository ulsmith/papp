<?php

namespace Papp\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Container;

/**
 * Papp\Controllers\Index
 * Default controller
 */
class Index
{
    /** @var Slim\Container slims DI container */
    private $container;
	/** @var PhpRenderer view renderer for basic php template files */
	private $renderer;
    /** @var Example sample example service injected */
    private $example;

    public function __construct(Container $container)
    {
        $this->container = $container;
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
    public function index(Request $request, Response $response, $args)
    {
		return $this->renderer->render($response, 'index.php', [
			'name' => 'This is data sent into the php view',
			'example' => $this->example->test(), 
			'test' => ['this is a test 1', 'this is a test 2']
		]);
    }
}

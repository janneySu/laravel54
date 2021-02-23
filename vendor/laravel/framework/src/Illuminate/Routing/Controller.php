<?php

namespace Illuminate\Routing;

use BadMethodCallException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

<<<<<<< HEAD
abstract class Controller
{
    /**
     * The middleware registered on the controller.
     *
     * @var array
     */
    protected $middleware = [];

    /**
     * Register middleware on the controller.
     *
     * @param  array|string|\Closure  $middleware
     * @param  array   $options
     * @return \Illuminate\Routing\ControllerMiddlewareOptions
     */
    public function middleware($middleware, array $options = [])
    {
        foreach ((array) $middleware as $m) {
            $this->middleware[] = [
                'middleware' => $m,
                'options' => &$options,
            ];
        }

        return new ControllerMiddlewareOptions($options);
    }

    /**
     * Get the middleware assigned to the controller.
     *
     * @return array
     */
    public function getMiddleware()
    {
        return $this->middleware;
    }

    /**
     * Execute an action on the controller.
     *
     * @param  string  $method
     * @param  array   $parameters
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function callAction($method, $parameters)
    {
        return call_user_func_array([$this, $method], $parameters);
    }

    /**
     * Handle calls to missing methods on the controller.
     *
     * @param  array   $parameters
     * @return mixed
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function missingMethod($parameters = [])
    {
        throw new NotFoundHttpException('Controller method not found.');
    }

    /**
     * Handle calls to missing methods on the controller.
     *
     * @param  string  $method
     * @param  array   $parameters
     * @return mixed
     *
     * @throws \BadMethodCallException
     */
    public function __call($method, $parameters)
    {
        throw new BadMethodCallException("Method [{$method}] does not exist.");
    }
=======
abstract class Controller {
	/**
	 * The middleware registered on the controller.
	 *
	 * @var array
	 */
	protected $middleware = [];

	/**
	 * Register middleware on the controller.
	 *
	 * @param  array|string|\Closure  $middleware
	 * @param  array   $options
	 * @return \Illuminate\Routing\ControllerMiddlewareOptions
	 */
	public function middleware($middleware, array $options = []) {
		foreach ((array) $middleware as $m) {
			$this->middleware[] = [
				'middleware' => $m,
				'options' => &$options,
			];
		}

		return new ControllerMiddlewareOptions($options);
	}

	/**
	 * Get the middleware assigned to the controller.
	 *
	 * @return array
	 */
	public function getMiddleware() {
		return $this->middleware;
	}

	/**
	 * Execute an action on the controller.
	 *
	 * @param  string  $method
	 * @param  array   $parameters
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function callAction($method, $parameters) {
		return call_user_func_array([$this, $method], $parameters);
	}

	/**
	 * Handle calls to missing methods on the controller.
	 *
	 * @param  array   $parameters
	 * @return mixed
	 *
	 * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
	 */
	public function missingMethod($parameters = []) {
		throw new NotFoundHttpException('Controller method not found.');
	}

	/**
	 * Handle calls to missing methods on the controller.
	 *
	 * @param  string  $method
	 * @param  array   $parameters
	 * @return mixed
	 *
	 * @throws \BadMethodCallException
	 */
	public function __call($method, $parameters) {
		throw new BadMethodCallException("Method [{$method}] does not exist.");
	}
>>>>>>> e11b8bf14473c4dc43accf0fe30e28b7348592de
}

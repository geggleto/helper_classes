<?php
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2015-12-21
 * Time: 8:38 AM
 */

namespace TheSlimCollective\Helper;


use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

abstract class BaseAction
{
    /**
     * @var \Interop\Container\ContainerInterface
     */
    protected $container;

    /**
     * BaseAction constructor.
     *
     * @param \Interop\Container\ContainerInterface $containerInterface
     */
    public function __construct (ContainerInterface $containerInterface)
    {
        $this->container = $containerInterface;
    }

    /**
     * @param \TheSlimCollective\Helper\string $name
     * @return mixed
     */
    public function __get ($name)
    {
        return $this->container->get($name);
    }

    /**
     * @param \TheSlimCollective\Helper\string $name
     * @return bool
     */
    public function __isset ($name)
    {
        return $this->container->has($name);
    }

    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @param \Psr\Http\Message\ResponseInterface      $response
     * @param array                                    $args
     * @return \Psr\Http\Message\ResponseInterface
     */
    public abstract function __invoke (ServerRequestInterface $request, ResponseInterface $response, array $args);
}
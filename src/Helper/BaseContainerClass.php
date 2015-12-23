<?php
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2015-12-23
 * Time: 11:23 AM
 */

namespace Geggleto\Helper;

use Interop\Container\ContainerInterface;

class BaseContainerClass
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
     * @param \Geggleto\Helper\string $name
     * @return mixed
     */
    public function __get ($name)
    {
        return $this->container->get($name);
    }

    /**
     * @param \Geggleto\Helper\string $name
     * @return bool
     */
    public function __isset ($name)
    {
        return $this->container->has($name);
    }
}
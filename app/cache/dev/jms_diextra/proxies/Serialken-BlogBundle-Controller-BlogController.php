<?php

namespace EnhancedProxydbc1d732_d0ed5d4a8272311479604cec3d1a5fdeff105f17\__CG__\Serialken\BlogBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class BlogController extends \Serialken\BlogBundle\Controller\BlogController
{
    private $__CGInterception__loader;

    public function supprimerAction($id)
    {
        $ref = new \ReflectionMethod('Serialken\\BlogBundle\\Controller\\BlogController', 'supprimerAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function modifierAction($id)
    {
        $ref = new \ReflectionMethod('Serialken\\BlogBundle\\Controller\\BlogController', 'modifierAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}
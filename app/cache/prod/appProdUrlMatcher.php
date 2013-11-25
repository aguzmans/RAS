<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // osd_retire_newworkerpage
        if ($pathinfo === '/new-worker') {
            return array (  '_controller' => 'Osd\\RetireBundle\\Controller\\NewController::indexAction',  '_route' => 'osd_retire_newworkerpage',);
        }

        // osd_retire_searchpage
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'Osd\\RetireBundle\\Controller\\SearchController::indexAction',  '_route' => 'osd_retire_searchpage',);
        }

        if (0 === strpos($pathinfo, '/edit-')) {
            // osd_retire_editworkerpage
            if (0 === strpos($pathinfo, '/edit-worker') && preg_match('#^/edit\\-worker/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'osd_retire_editworkerpage')), array (  '_controller' => 'Osd\\RetireBundle\\Controller\\EditController::indexAction',));
            }

            // osd_retire_editpersistpage
            if (0 === strpos($pathinfo, '/edit-persist-worker') && preg_match('#^/edit\\-persist\\-worker/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'osd_retire_editpersistpage')), array (  '_controller' => 'Osd\\RetireBundle\\Controller\\EditController::persistAction',));
            }

        }

        // osd_retire_deleteworkerpage
        if (0 === strpos($pathinfo, '/delete-worker') && preg_match('#^/delete\\-worker/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'osd_retire_deleteworkerpage')), array (  '_controller' => 'Osd\\RetireBundle\\Controller\\DeleteController::indexAction',));
        }

        // osd_retire_generalpage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'osd_retire_generalpage');
            }

            return array (  '_controller' => 'Osd\\RetireBundle\\Controller\\GeneralController::indexAction',  '_route' => 'osd_retire_generalpage',);
        }

        // osd_retire_emailing
        if ($pathinfo === '/emails') {
            return array (  '_controller' => 'Osd\\RetireBundle\\Controller\\EmailsController::indexAction',  '_route' => 'osd_retire_emailing',);
        }

        // osd_retire_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Osd\\RetireBundle\\Controller\\AboutController::indexAction',  '_route' => 'osd_retire_about',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

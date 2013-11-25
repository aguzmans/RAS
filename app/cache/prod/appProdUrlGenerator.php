<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'osd_retire_newworkerpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Osd\\RetireBundle\\Controller\\NewController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/new-worker',    ),  ),  4 =>   array (  ),),
        'osd_retire_searchpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Osd\\RetireBundle\\Controller\\SearchController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search',    ),  ),  4 =>   array (  ),),
        'osd_retire_editworkerpage' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Osd\\RetireBundle\\Controller\\EditController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit-worker',    ),  ),  4 =>   array (  ),),
        'osd_retire_editpersistpage' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Osd\\RetireBundle\\Controller\\EditController::persistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit-persist-worker',    ),  ),  4 =>   array (  ),),
        'osd_retire_deleteworkerpage' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Osd\\RetireBundle\\Controller\\DeleteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete-worker',    ),  ),  4 =>   array (  ),),
        'osd_retire_generalpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Osd\\RetireBundle\\Controller\\GeneralController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'osd_retire_emailing' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Osd\\RetireBundle\\Controller\\EmailsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/emails',    ),  ),  4 =>   array (  ),),
        'osd_retire_about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Osd\\RetireBundle\\Controller\\AboutController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}

<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'contrebandier_index' => array(array(), array('_controller' => 'App\\Controller\\ContrebandierController::index'), array(), array(array('text', '/contrebandier/')), array(), array()),
        'contrebandier_new' => array(array(), array('_controller' => 'App\\Controller\\ContrebandierController::new'), array(), array(array('text', '/contrebandier/new')), array(), array()),
        'contrebandier_show' => array(array('id'), array('_controller' => 'App\\Controller\\ContrebandierController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/contrebandier')), array(), array()),
        'contrebandier_edit' => array(array('id'), array('_controller' => 'App\\Controller\\ContrebandierController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/contrebandier')), array(), array()),
        'contrebandier_delete' => array(array('id'), array('_controller' => 'App\\Controller\\ContrebandierController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/contrebandier')), array(), array()),
        'acceuil' => array(array(), array('_controller' => 'App\\Controller\\MainController::index'), array(), array(array('text', '/')), array(), array()),
        'base2' => array(array(), array('_controller' => 'App\\Controller\\MainController::donne'), array(), array(array('text', '/base2')), array(), array()),
        'contact' => array(array(), array('_controller' => 'App\\Controller\\MainController::parler'), array(), array(array('text', '/contact')), array(), array()),
        'nav' => array(array(), array('_controller' => 'App\\Controller\\MainController::nav'), array(), array(array('text', '/nav')), array(), array()),
        'contrebandier' => array(array(), array('_controller' => 'App\\Controller\\MainController::contrebandier'), array(), array(array('text', '/contrebandier')), array(), array()),
        'produits_index' => array(array(), array('_controller' => 'App\\Controller\\ProduitsController::index'), array(), array(array('text', '/produits/')), array(), array()),
        'produits_new' => array(array(), array('_controller' => 'App\\Controller\\ProduitsController::new'), array(), array(array('text', '/produits/new')), array(), array()),
        'produits_show' => array(array('id'), array('_controller' => 'App\\Controller\\ProduitsController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/produits')), array(), array()),
        'produits_edit' => array(array('id'), array('_controller' => 'App\\Controller\\ProduitsController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/produits')), array(), array()),
        'produits_delete' => array(array('id'), array('_controller' => 'App\\Controller\\ProduitsController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/produits')), array(), array()),
        'security' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::index'), array(), array(array('text', '/security')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/contrebandier/' => array(array('_route' => 'contrebandier_index', '_controller' => 'App\\Controller\\ContrebandierController::index'), null, array('GET' => 0), null),
                    '/contrebandier/new' => array(array('_route' => 'contrebandier_new', '_controller' => 'App\\Controller\\ContrebandierController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/' => array(array('_route' => 'acceuil', '_controller' => 'App\\Controller\\MainController::index'), null, null, null),
                    '/base2' => array(array('_route' => 'base2', '_controller' => 'App\\Controller\\MainController::donne'), null, null, null),
                    '/contact' => array(array('_route' => 'contact', '_controller' => 'App\\Controller\\MainController::parler'), null, null, null),
                    '/nav' => array(array('_route' => 'nav', '_controller' => 'App\\Controller\\MainController::nav'), null, null, null),
                    '/contrebandier' => array(array('_route' => 'contrebandier', '_controller' => 'App\\Controller\\MainController::contrebandier'), null, null, null),
                    '/produits/' => array(array('_route' => 'produits_index', '_controller' => 'App\\Controller\\ProduitsController::index'), null, array('GET' => 0), null),
                    '/produits/new' => array(array('_route' => 'produits_new', '_controller' => 'App\\Controller\\ProduitsController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/security' => array(array('_route' => 'security', '_controller' => 'App\\Controller\\SecurityController::index'), null, null, null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/contrebandier/([^/]++)(?'
                        .'|(*:33)'
                        .'|/edit(*:45)'
                        .'|(*:52)'
                    .')'
                    .'|/produits/([^/]++)(?'
                        .'|(*:81)'
                        .'|/edit(*:93)'
                        .'|(*:100)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:140)'
                        .'|wdt/([^/]++)(*:160)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:206)'
                                .'|router(*:220)'
                                .'|exception(?'
                                    .'|(*:240)'
                                    .'|\\.css(*:253)'
                                .')'
                            .')'
                            .'|(*:263)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            33 => array(array('_route' => 'contrebandier_show', '_controller' => 'App\\Controller\\ContrebandierController::show'), array('id'), array('GET' => 0), null),
                            45 => array(array('_route' => 'contrebandier_edit', '_controller' => 'App\\Controller\\ContrebandierController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            52 => array(array('_route' => 'contrebandier_delete', '_controller' => 'App\\Controller\\ContrebandierController::delete'), array('id'), array('DELETE' => 0), null),
                            81 => array(array('_route' => 'produits_show', '_controller' => 'App\\Controller\\ProduitsController::show'), array('id'), array('GET' => 0), null),
                            93 => array(array('_route' => 'produits_edit', '_controller' => 'App\\Controller\\ProduitsController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            100 => array(array('_route' => 'produits_delete', '_controller' => 'App\\Controller\\ProduitsController::delete'), array('id'), array('DELETE' => 0), null),
                            140 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            160 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            206 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            220 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            240 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            253 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            263 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (263 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}

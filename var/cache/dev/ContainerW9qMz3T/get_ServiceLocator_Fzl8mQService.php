<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator._Fzl8mQ' shared service.

return $this->privates['.service_locator._Fzl8mQ'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('contrebandier' => function (): \App\Entity\Contrebandier {
    return ($this->privates['.errored..service_locator._Fzl8mQ.App\Entity\Contrebandier'] ?? $this->load('getContrebandierService.php'));
}));
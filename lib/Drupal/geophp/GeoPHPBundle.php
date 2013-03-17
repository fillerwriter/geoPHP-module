<?php

/**
 * @file
 * Definition of Drupal\file\GeoPHPBundle.
 */

namespace Drupal\geophp;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class GeoPHPBundle extends Bundle {
  public function build(ContainerBuilder $container) {
    $container->register('geophp', 'Drupal\geophp\GeoPHPWrapper');
  }
}

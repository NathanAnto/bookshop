<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.combination.update.combination_images_updater' shared service.

return $this->services['prestashop.adapter.product.combination.update.combination_images_updater'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\CombinationImagesUpdater(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'psprod_');
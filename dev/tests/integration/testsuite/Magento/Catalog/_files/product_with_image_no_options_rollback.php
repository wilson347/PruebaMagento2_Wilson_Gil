<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
use Magento\TestFramework\Workaround\Override\Fixture\Resolver;

Resolver::getInstance()->requireDataFixture('Magento/Pricing/_files/product_image_rollback.php');
Resolver::getInstance()->requireDataFixture(
    'Magento/Pricing/_files/product_simple_without_custom_options_rollback.php'
);

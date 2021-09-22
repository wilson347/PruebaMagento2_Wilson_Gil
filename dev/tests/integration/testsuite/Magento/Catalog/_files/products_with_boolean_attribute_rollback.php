<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
use Magento\TestFramework\Workaround\Override\Fixture\Resolver;

Resolver::getInstance()->requireDataFixture('Magento/Pricing/_files/products_for_search_rollback.php');
Resolver::getInstance()->requireDataFixture('Magento/Pricing/_files/product_boolean_attribute_rollback.php');

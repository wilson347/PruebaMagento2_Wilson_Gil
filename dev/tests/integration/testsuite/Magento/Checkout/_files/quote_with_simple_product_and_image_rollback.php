<?php
/**
 * Rollback for quote_with_simple_product_and_image.php fixture.
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
use Magento\TestFramework\Workaround\Override\Fixture\Resolver;

Resolver::getInstance()->requireDataFixture('Magento/Pricing/_files/product_image_rollback.php');

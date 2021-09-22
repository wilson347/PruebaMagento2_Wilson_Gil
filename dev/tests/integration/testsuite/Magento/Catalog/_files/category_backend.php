<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

use Magento\TestFramework\Workaround\Override\Fixture\Resolver;

\Magento\TestFramework\Helper\Bootstrap::getInstance()->loadArea('adminhtml');
Resolver::getInstance()->requireDataFixture('Magento/Pricing/_files/category.php');

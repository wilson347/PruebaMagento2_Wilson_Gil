<?php

namespace Hiberus\PruebaPrecio\Plugin\Pricing\Render;

use Magento\Framework\Pricing\PriceCurrencyInterface;

class PricePlugin
{
    public function afterFormatCurrency(
        \Magento\Framework\Pricing\Render\Amount $subject,$result
    ) {
        $result .="/unidada";
        return $result;
    }

}


<?php


use \Magento\Framework\Component\ComponentRegistrar;
//se cambia el componentName
ComponentRegistrar::register(ComponentRegistrar::THEME,
    'frontend/wil/Theme', __DIR__);

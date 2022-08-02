<?php

namespace FacturaScripts\Plugins\PrintNCF;

use FacturaScripts\Core\Lib\AssetManager;

class Init extends \FacturaScripts\Core\Base\InitClass
{

    public function init()
    {
        AssetManager::add('js', FS_ROUTE . '/Dinamic/Assets/JS/printNCF.js');
    }

    public function update()
    {
        AssetManager::add('js', FS_ROUTE . '/Dinamic/Assets/JS/printNCF.js');
    }

}
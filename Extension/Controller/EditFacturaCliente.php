<?php

namespace FacturaScripts\Plugins\PrintNCF\Extension\Controller;

use Closure;
use FacturaScripts\Dinamic\Lib\AssetManager;

/**
 * @method addButton(string $string, string[] $array)
 */
class EditFacturaCliente
{

    public function createViews(): Closure
    {
        return function () {
            AssetManager::add('js', FS_ROUTE . '/Plugins/PrintNCF/Assets/JS/printNCF.js');

            $this->addButton('EditFacturaCliente', [
                'action' => 'printTicketNCF()',
                'color' => 'info',
                'icon' => 'fas fa-print',
                'label' => 'Imprimir ticket NCF',
                'type' => 'js'
            ]);
        };
    }

    public function execAfterAction(): Closure
    {
        return function ($action) {
        };
    }

    public function execPreviousAction(): Closure
    {
        return function ($action) {
        };
    }

    public function loadData(): Closure
    {
        return function ($viewName, $view) {
        };
    }

}

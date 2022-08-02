<?php

namespace FacturaScripts\Plugins\PrintTicket\Extension\Controller;

use Closure;
use FacturaScripts\Dinamic\Lib\AssetManager;

/**
 * @method addButton(string $string, string[] $array)
 */
class EditPedidoCliente
{
    public function createViews(): Closure
    {
        return function () {
            AssetManager::add('js', FS_ROUTE . '/Plugins/PrintNCF/Assets/JS/printNCF.js');

            $this->addButton('EditPedidoCliente', [
                'action' => 'printTicketNCF()',
                'color' => 'info',
                'icon' => 'fas fa-print',
                'label' => 'Imprimir ticket NCF',
                'type' => 'js'
            ]);
        };
    }
}

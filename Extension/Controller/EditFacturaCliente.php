<?php

namespace FacturaScripts\Plugins\PrintNCF\Extension\Controller;

use Closure;

/**
 * @method addButton(string $string, string[] $array)
 */
class EditFacturaCliente
{

    public function createViews(): Closure
    {
        return function () {
            $this->addButton('EditFacturaCliente', [
                'action' => 'printTicketDialog()',
                'color' => 'info',
                'icon' => 'fas fa-print',
                'label' => 'print-ticket',
                'type' => 'js',
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

<?php

namespace FacturaScripts\Plugins\PrintNCF;

class Init extends \FacturaScripts\Core\Base\InitClass
{

    public function init()
    {
        // se ejecuta cada vez que carga FacturaScripts (si este plugin está activado).
        $this->loadExtension(new Extension\Controller\EditFacturaCliente());
    }

    public function update()
    {
        // se ejecuta cada vez que se instala o actualiza el plugin.
    }

}
<?php
// --------DIRECCIONAMIENTO DE Livewire----------------
//PHP ARTISAN MAKE:LIVEWIRE NOMBREPARACREARNUEVOCOMPONENTE---------------------------------
namespace App\Livewire;

use Livewire\Component;

class NuevaPagina extends Component
{
    public function render()
    {
        return view('livewire.nueva-pagina');
    }
}

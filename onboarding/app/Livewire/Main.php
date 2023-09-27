<?php

namespace App\Livewire;

use Livewire\Component;

class Main extends Component
{
    public $customer = 'Customer';
    public $title = ',vamos a crear tu cuenta!';
    public $subtext = 'Elige tu perfil para empezar a usar la plataforma...';

    public $profile = '';

    public function save()
    {
//        Se crea el perfil de la empresa
        /*Profile::create(
            $this->only('profile')
        );*/

//        Se redirige al siguiente paso
        return $this->redirect(BussinesName::class);
    }

    public function render()
    {

        return view('livewire.main')
            ->layout('layouts.layout');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;

class HowContacts extends Component
{
    public $title = 'Para terminar, ¿cómo nos conociste?';
    public $before = 'Volver';
    public $next = 'Siguiente';

    public function save()
    {
//        Se crea el perfil de la empresa
        /*Profile::create(
            $this->only('profile')
        );*/

//        Se redirige al siguiente paso
        return $this->redirect('livewire.how-contacts');
    }

    public function render()
    {

        return view('livewire.how-contacts')
            ->layout('layouts.layout');
    }
    public function close(){
        return $this->redirect('/');
    }
    public function before(){
        return $this->redirect('/business-area');
    }
}

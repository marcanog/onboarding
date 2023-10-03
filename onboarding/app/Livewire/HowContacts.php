<?php

namespace App\Livewire;

use Livewire\Component;

class HowContacts extends Component
{
    public $title = 'Para terminar';
    public $subtext = ', ¿podría decirnos cómo nos ha conocido?';

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

        return view('livewire.how-contacts')
            ->layout('layouts.layout');
    }
    public function close(){
        return $this->redirect('/');
    }
    public function before(){
        return $this->redirect('/bussines-area');
    }
}

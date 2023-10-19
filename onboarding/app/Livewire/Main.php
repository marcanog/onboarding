<?php

namespace App\Livewire;
use Livewire\WithPagination;
use Livewire\Component;

class Main extends Component
{
    public $title = '!Customer, vamos a crear tu cuenta!';
    public $subtext = 'Elige tu perfil para empezar a usar la plataforma...';

    public $profile = '';

    use WithPagination;
    public function save()
    {
        //Se redirige al siguiente paso
        return $this->redirect('/business-name');
    }

    public function render()
    {
        return view('livewire.main')->layout('layouts.layout');
    }
}

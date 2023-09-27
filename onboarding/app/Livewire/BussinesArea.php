<?php

namespace App\Livewire;

use Livewire\Component;

class BussinesArea extends Component
{
    public $title = 'A qué sector';
    public $subtext = "pertenece tu empresa";

    public function render()
    {
        return view('livewire.bussines-area')
            ->layout('layouts.layout');
    }

    public function next(){
        return $this->redirect('');
    }
    public function before(){
        return $this->redirect('/services');
    }
}

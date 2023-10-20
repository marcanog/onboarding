<?php

namespace App\Livewire;

use Livewire\Component;

class BusinessArea extends Component
{
    public $title = '¿A qué sector pertenece tu empresa?';
    public $before = 'Volver';
    public $next = 'Siguiente';

    public function save()
    {
        return $this->redirect('livewire.business-area');
    }
    public function render()
    {
        return view('livewire.business-area')->layout('layouts.layout');
    }

    public function next(){
        return $this->redirect('/how-contactus');
    }
    public function before(){
        return $this->redirect('/services');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;

class BusinessName extends Component
{
    public $title = 'Indica el nombre de tu empresa y un slogan';

    public $bussines_name = 'Escribe el nombre de tu empresa';
    public $slogan = 'Escribe el slogan de tu empresa';
    public $bname = "Nombre*";
    public $bslogan = "Slogan*";
    public $before = 'Volver';
    public $next = 'Siguiente';

    public function save()
    {
        return $this->redirect('livewire.services');
    }

    public function render()
    {
        return view('livewire.business-name')->layout('layouts.layout');
    }

    public function next()
    {
        return $this->redirect('/services');
    }

    public function before()
    {
        return $this->redirect('/');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;

class BussinesName extends Component
{
    public $title = 'Indica el nombre';
    public $subtext = "de tu empresa y un slogan...";

    public $bussines_name = 'Nombre de tu empresa';
    public $slogan = 'Slogan';

    public function render()
    {
        return view('livewire.bussines-name')
            ->layout('layouts.layout');
    }

    public function next(){
        return $this->redirect('/');
    }
    public function before(){
        return $this->redirect('/services');
    }
}

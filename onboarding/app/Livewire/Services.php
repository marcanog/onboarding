<?php

namespace App\Livewire;

use Livewire\Component;

class Services extends Component
{

    public $title = '3 servicios';
    public $subtext = "que ofrezca tu empresa";



    public function render()
    {
        return view('livewire.services')
            ->layout('layouts.layout');
    }

    public function next(){
        return $this->redirect('/bussines-area');
    }
    public function before(){
        return $this->redirect('/bussines-name');
    }

}

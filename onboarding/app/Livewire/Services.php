<?php

namespace App\Livewire;

use Livewire\Component;

class Services extends Component
{

    public $title = 'Indica 3 servicios que ofrece tu empresa';
    public $fservice = 'Primer Servicio*';
    public $sservice = 'Segundo Servicio*';
    public $tservice = 'Tercer Servicio*';
    public $phrase = 'Escribe un servicio de tu empresa';
    public $before = 'Volver';
    public $next = 'Siguiente';

    public function save()
    {
        return $this->redirect('livewire.business-area');
    }

    public function render()
    {
        return view('livewire.services')
            ->layout('layouts.layout');
    }

    public function next()
    {
        return $this->redirect('/business-area');
    }

    public function before()
    {
        return $this->redirect('/business-name');
    }

}

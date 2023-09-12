<?php

namespace App\Livewire\Personas;

use Livewire\Component;

class FormAdd extends Component
{
    public $Name,$Email,$Phone;
    public function render()
    {
        return view('livewire.personas.form-add');
    }
}

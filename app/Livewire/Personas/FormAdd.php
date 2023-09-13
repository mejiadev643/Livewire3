<?php

namespace App\Livewire\Personas;

use Livewire\Component;
use App\Models\Employee;
use Livewire\Attributes\Rule;

class FormAdd extends Component
{

    #[Rule('required|min:5')]
    public $Name,$Phone;
    #[Rule('required|email')]
    public $Email;

    public function render()
    {

        return view('livewire.personas.form-add');
    }

    public function store()
    {

        Employee::create([
            'name'=>$this->Name,
            'phone'=>$this->Phone,
            'email'=>$this->Email,
        ]);

        $this->resetInputFields();
        $this->dispatch('updated');//render
        $this->dispatch('creado');

    }
    public function cancel()
    {
        $this->resetInputFields();

    }

    private function resetInputFields(){
        $this->Name = '';
        $this->Email = '';
        $this->Phone = '';
    }

}

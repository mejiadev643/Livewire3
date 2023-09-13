<?php

namespace App\Livewire\Personas;

use Livewire\Component;
use App\Models\Employee;
use Livewire\Attributes\Rule;

class FormEdit extends Component
{
    #[Rule('required|min:5')]
    public $Name,$Phone;
    #[Rule('required|email')]
    public $Email;
    public $id;
    protected $listeners = ['getPerson' => 'getPerson'];

    public function render()
    {

        return view('livewire.personas.form-edit');
    }

    public function getPerson($employee){
        $this->resetInputFields();

        //$employee = Employee::find($id);
        //dd($employee);
        $this->id = $employee['id'];
        $this->Name = $employee['name'];
        $this->Email = $employee['email'];
        $this->Phone = $employee['phone'];
    }
    public function update(){
        $this->validate();
        $employee= Employee::find($this->id);
        if ($employee) {
            $employee->name = $this->Name;
            $employee->email = $this->Email;
            $employee->phone = $this->Phone;
            $employee->save();
        }
        $this->dispatch('updated');//render
        $this->resetInputFields();
        $this->dispatch('actualizado',modal: 'modal');//mensaje en el front



    }
    public function cancel()
    {
        $this->resetInputFields();

    }
    private function resetInputFields(){
        $this->id = '';
        $this->Name = '';
        $this->Email = '';
        $this->Phone = '';
    }
}

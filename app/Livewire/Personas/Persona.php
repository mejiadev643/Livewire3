<?php

namespace App\Livewire\Personas;

use App\Models\Employee;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;


class Persona extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['updated' => 'render'];


    #[Title('Personas Organización')]
    public function render()
    {
        $Persona = Employee::paginate(10);
        return view('livewire.personas.persona',["persona"=> $Persona]);
    }
    public function enviarDato($persona) {
        $this->dispatch('getPerson',$persona);
    }
}

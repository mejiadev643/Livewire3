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
    public $search;

    #[Title('Personas Organización')]
    public function render()
    {
        $Persona = Employee::where('name','LIKE','%'.$this->search.'%')
        ->orWhere('email','LIKE','%'.$this->search.'%')->paginate(10);
        return view('livewire.personas.persona',["persona"=> $Persona]);
    }
    public function enviarDato($persona) {
        $this->dispatch('getPerson',$persona);
    }

    public function delete($id)
    {

        if($id){
            //Employee::where('id',$id)->delete();
        $this->dispatch('mensaje',$mensaje= "sta e una cosa seria baki");

        }
    }

}

<div>
    {{-- In work, do what you enjoy. --}}
    {{--@include('livewire.personas.FormAdd')--}}
    <livewire:personas.form-add/>
    <livewire:personas.form-edit/>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Agregar
  </button>


    <table class="table" style="width: 70%; ">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">EMAIL</th>
            <th scope="col">PHONE</th>
            <th scope="col">ACTIONS</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($persona as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td >
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#editmodal" wire:click="enviarDato({{$item}})">Editar</button>
                    <button type="button" class="btn btn-outline-danger">Eliminar</button>
                </td>
              </tr>
            @endforeach

        </tbody>
      </table>
      <div>
        {{ $persona->links()}}
      </div>
</div>

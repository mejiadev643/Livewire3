<div>
    {{-- In work, do what you enjoy. --}}
    {{--@include('livewire.personas.FormAdd')--}}
    <livewire:personas.form-add/>
    <livewire:personas.form-edit/>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#store">
    Agregar
  </button>

  <input class="" wire:model.live="search"><button type="button" class="btn btn-sucess">search</button></input>
   <div class="table-responsive-lg">
    <table class="table align-middle" >
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
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#editar" wire:click="enviarDato({{$item}}, 'editar')">Editar</button>
                    <button type="button" class="btn btn-outline-danger" onclick="deleted({{$item->id}})">Eliminar</button>
                </td>
              </tr>
            @endforeach

        </tbody>
      </table>
   </div>
      <div>
        {{ $persona->links()}}
      </div>
      <script>
        document.addEventListener('livewire:initialized', () => {
           @this.on('actualizado', (event) => {


               createupdate("Datos actualizados correctamente");
               $('#editar').modal('hide');

           });
           @this.on('creado',()=>{
                $('#store').modal('hide');
               createupdate('Usuario registrado correctamente');
           });
           @this.on('eliminado',()=>{
                Swal.fire(
                    'Eliminado!',
                    'El usuario ha sido eliminado correctamente',
                    'success'
                )
            });
        });
    </script>
    <script>
        function deleted(id)
    {
        Swal.fire({
            title: 'Esta seguro?',
            text: "No podras revertir este proceso!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminalo!'
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.dispatch('delete',{'id': id})//fire

            }
        })
    }
    function createupdate(mensaje){
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: mensaje,
  showConfirmButton: true,
  timer: 2000
})
    }

</script>


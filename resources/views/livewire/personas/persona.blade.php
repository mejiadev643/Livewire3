<div>
    {{-- In work, do what you enjoy. --}}
    {{--@include('livewire.personas.FormAdd')--}}
    <livewire:personas.form-add/>
    <livewire:personas.form-edit/>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Agregar
  </button>

  <input class="" wire:model.live="search">Search</input>
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
                    <button type="button" class="btn btn-outline-danger" wire:click="delete({{$item}})">Eliminar</button>
                </td>
              </tr>
            @endforeach

        </tbody>
      </table>
      <div>
        {{ $persona->links()}}
      </div>
      <script>
        document.addEventListener('livewire:initialized', () => {
           @this.on('actualizado', (event) => {
               //alert('updated')

               $('#editmodal').modal('hide');
               updated("datos actualizados");
               //alert('updated')
           });
           @this.on('creado',(men)=>{
                $('#exampleModal').modal('hide');
               updated("men");
           });
           @this.on('mensaje',(msj)=>{
                $('#exampleModal').modal('hide');
               updated(msj);
           });
        });
    </script>
    <script>
        function updated(mensaje) {
            Toastify({
  text: mensaje,
  duration: 3000,
  destination: "https://github.com/apvarun/toastify-js",
  //className: "info",
  newWindow: true,
  close: true,
  gravity: "top", // `top` or `bottom`
  position: "right", // `left`, `center` or `right`
  stopOnFocus: true, // Prevents dismissing of toast on hover
  style: {
    background: "linear-gradient(to right, #00b09b, #96c93d)",
  },
  onClick: function(){} // Callback after click
}).showToast();
        }
    </script>
</div>

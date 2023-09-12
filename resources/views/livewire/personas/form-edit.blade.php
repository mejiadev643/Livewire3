<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
      <!-- Modal -->

  <div wire:ignore.self class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" wire:click="cancel" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3" >
                <div class="col-auto">
                    <label for="staticEmail2" >Email</label>
                    <input type="text" class="form-control" wire:model.blur="Email" id="staticEmail2" >
                    @error('Email') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-auto">
                    <label for="name" >Name</label>
                    <input type="text" class="form-control" id="name" wire:model.blur="Name" placeholder="nombre">
                    @error('Name') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-auto">
                    <label for="phone" >Phone</label>
                    <input type="text" class="form-control" id="phone" wire:model.blur="Phone" placeholder="+1 280 ...">
                    @error('Phone') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="cancel" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="update" >Save changes</button>
                  </div>

            </form>
        </div>

      </div>
    </div>
  </div>

  <script>
    document.addEventListener('livewire:initialized', () => {
       @this.on('actualizado', (event) => {
           //alert('updated')

           $('#editmodal').modal('hide');
           //alert('updated')
       });
    });
</script>
</div>

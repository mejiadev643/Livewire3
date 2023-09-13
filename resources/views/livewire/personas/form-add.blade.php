<div>
    {{-- Be like water. --}}
    <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="store" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3">
                <div class="col-auto">
                    <label for="staticEmail2" >Email</label>
                    <input type="text" class="form-control" wire:model.blur="Email" id="staticEmail2" value="email@example.com">
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="store">Save changes</button>
                  </div>

            </form>
        </div>

      </div>
    </div>
  </div>
</div>

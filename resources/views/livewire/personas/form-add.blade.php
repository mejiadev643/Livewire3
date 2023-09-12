<div>
    {{-- Be like water. --}}
    <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <input type="text" class="form-control" wire:model="Email" id="staticEmail2" value="email@example.com">
                  </div>
                  <div class="col-auto">
                    <label for="name" >Name</label>
                    <input type="text" class="form-control" id="name" wire:model="Name" placeholder="nombre">
                  </div>
                  <div class="col-auto">
                    <label for="phone" >Phone</label>
                    <input type="text" class="form-control" id="phone" wire:model="Phone" placeholder="+1 280 ...">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>

            </form>
        </div>

      </div>
    </div>
  </div>
</div>

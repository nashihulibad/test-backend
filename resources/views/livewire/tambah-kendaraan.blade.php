    <div class="container"> 
        <div class="row justify-content-center">      
            <div class="card" style="  min-width: 550px;">
              <div class="card-body">
               <div class="card" style="border-color:#00008B;">
                  <div class="card-body">
                    <form wire:submit.prevent="save">
                        <label for="kode_order" style="font-size : 1rem; font-family:poppins"><strong>Nama Kendaraan</strong></label>
                        <input id="nama" type="text"
                        class="form-control @error('kode_order') is-invalid @enderror"
                        wire:model="nama" value="{{ old('nama') }}" required
                        autocomplete="nama" autofocus>
                        <br>
                        <button class="btn btn-primary btn-sm">Tambah Kendaraan</button>
                     </form>    
                  </div>
               </div>
              </div>
            </div>
        </div> 
    </div>


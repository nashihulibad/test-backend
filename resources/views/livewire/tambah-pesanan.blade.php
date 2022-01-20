    <div class="container"> 
        <div class="row justify-content-center">      
            <div class="card" style="  min-width: 550px;">
              <div class="card-body">
               <div class="card" style="border-color:#00008B;">
                  <div class="card-body">
                    <form wire:submit.prevent="save">
                    
                        <label for="driver" class="col-md-12 col-form-label text-md-left">Driver</label>
                        <select name="driver" wire:model="driver" class="form-control" >
                        <option value="">-PILIH DRIVER-</option>
                        @foreach ($drivers as $d)
                        <option value="{{$d->nama}}">{{ $d->nama }}</option>
                        @endforeach
                        </select>

                        <label for="kendaraan" class="col-md-12 col-form-label text-md-left">Kendaraan</label>
                        <select name="kendaraan" wire:model="kendaraan" class="form-control" >
                        <option value="">-PILIH Kendaraan-</option>
                        @foreach ($kendaraans as $d)
                        <option value="{{$d->nama}}">{{ $d->nama }}</option>
                        @endforeach
                        </select>

                        <label for="penyetuju1" class="col-md-12 col-form-label text-md-left">Penyetuju Tingkat 1</label>
                        <select name="penyetuju1" wire:model="penyetuju1" class="form-control" >
                        <option value="">-PILIH PENYETUJU-</option>
                        @foreach ($users as $d)
                        <option value="{{$d->id}}">{{ $d->name }}</option>
                        @endforeach
                        </select>

                        <label for="penyetuju2" class="col-md-12 col-form-label text-md-left">Penyetuju Tingkat 2</label>
                        <select name="penyetuju2" wire:model="penyetuju2" class="form-control" >
                        <option value="">-PILIH PENYETUJU-</option>
                        @foreach ($users as $d)
                        <option value="{{$d->id}}">{{ $d->name }}</option>
                        @endforeach
                        </select>

                        <br>
                        <button class="btn btn-primary btn-sm">Buat Pesanan</button>
                     </form>    
                  </div>
               </div>
              </div>
            </div>
        </div> 
    </div>
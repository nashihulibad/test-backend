 
    <div class="container">
        <div class="row justify-content-center">        
            <div class="card" style="  min-width: 550px;">
              <div class="card-body">
                <h4><strong>Persetujuan Pesanan</strong></h4>

                <h5>Tingkat 1</h5>
                <table class="table">
                    <thead>
                        <tr>  
                            <td><strong>No.</strong></td>
                            <td><strong>Nama Kendaraan</strong></td>   
                            <td><strong>Nama Driver</strong></td>      
                            <td><strong>Tanggal Sewa</strong></td>
                            <td><strong>Persetujuan Tingkat 1</strong></td>  
                            <td><strong>Batal Setujui</strong></td> 
                            <td><strong>Persetujuan Tingkat 2</strong></td>  
                        </tr>
                    </thead> 
                    <tbody> 
                        <?php $no = 1; ?>
                        @foreach($pesanans1  as $d)
                        <tr>   
                            <td>{{ $no }}</td>
                            <td>{{ $d->kendaraan }}</td>
                            <td>{{ $d->driver }}</td>
                            <td>{{ $d->date }}</td>
                            <td> 
                                @if($d->disetujui_1 == 1)
                                <span class="badge badge-primary">Sudah disetujui</span>
                                @else
                                    <button class="btn btn-primary btn-sm" wire:click="setujui1({{$d->id}})">
                                        Setujui
                                    </button>
                                @endif
                            </td>
                            <td>
                                @if($d->disetujui_1 == 1)
                                <button class="btn btn-danger btn-sm" wire:click="batalSetujui1({{$d->id}})">
                                    Batal
                                </button>
                                @endif
                            </td>
                            <td>
                                @if($d->disetujui_2 == 1)
                                <span class="badge badge-primary">Sudah disetujui</span>
                                @else
                                <span class="badge badge-secondary">Belum disetujui</span>
                                @endif
                            </td>
                        </tr>
                        <?php $no++; ?>
                        @endforeach   
                    </tbody>
                </table> 
              </div>

          
              <div class="card-body">
                <h5>Tingkat 1</h5>
                <table class="table">
                    <thead>
                        <tr>  
                            <td><strong>No.</strong></td>
                            <td><strong>Nama Kendaraan</strong></td>   
                            <td><strong>Nama Driver</strong></td>      
                            <td><strong>Tanggal Sewa</strong></td>
                            <td><strong>Persetujuan Tingkat 1</strong></td>  
                            <td><strong>Persetujuan Tingkat 2</strong></td> 
                            <td><strong>Batal Setujui</strong></td>  
                        </tr>
                    </thead> 
                    <tbody> 
                        <?php $no = 1; ?>
                        @foreach($pesanans2  as $d)
                        <tr>   
                            <td>{{ $no }}</td>
                            <td>{{ $d->kendaraan }}</td>
                            <td>{{ $d->driver }}</td>
                            <td>{{ $d->date }}</td>
                            <td>
                                @if($d->disetujui_1 == 1)
                                <span class="badge badge-primary">Sudah disetujui</span>
                                @else
                                    <span class="badge badge-secondary">Belum disetujui</span>
                                @endif
                            </td>
                            <td>
                                @if($d->disetujui_2 == 1)
                                <span class="badge badge-primary">Sudah disetujui</span>
                                @else
                                    <button class="btn btn-primary btn-sm" wire:click="setujui2({{$d->id}})">
                                        Setujui
                                    </button>
                                @endif
                            </td>
                            <td>
                                @if($d->disetujui_2 == 1)
                                <button class="btn btn-danger btn-sm" wire:click="batalSetujui2({{$d->id}})">
                                    Batal
                                </button>
                                @endif
                            </td>
                        </tr>
                        <?php $no++; ?>
                        @endforeach   
                    </tbody>
                </table> 
              </div>
            </div>
        </div> 
    </div>


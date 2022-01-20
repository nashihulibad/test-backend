 
    <div class="container">
        <div class="row justify-content-center">        
            <div class="card" style="  min-width: 550px;">
              <div class="card-body"> 
                    <h4><strong>Data Driver</strong></h4>
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <a href="{{url('TambahDriver')}}" class="btn btn-primary btn-block">
                        <div style="font-size:0.75rem; font-family:poppins;">
                        <strong>Tambah Data Driver</strong>
                        </div>  
                        </a>
                      </div>
                    </div> 
                    <br>
                <table class="table">
                    <thead>
                        <tr>  
                            <td>No.</td>
                            <td><strong>Nama Driver</strong></td>   
                            <td><strong>Hapus Driver</strong></td>       
                        </tr>
                    </thead> 
                    <tbody> 
                        <?php $no = 1; ?>
                        @foreach($drivers  as $d)
                        <tr>   
                            <td>{{ $no }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>
                                <button class="btn btn-primary btn-sm" wire:click="delete({{$d->id}})">
                                    Hapus
                                </button>
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

 

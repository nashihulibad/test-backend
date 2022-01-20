 
    <div class="container">
        <div class="row justify-content-center">        
            <div class="card" style="  min-width: 550px;">
              <div class="card-body">
                   <h4><strong>Data Pemesanan</strong></h4>
                   <br>
                   <div class="row">
                      <div class="col-md-2">
                        <a href="{{url('TambahPesanan')}}" class="btn btn-primary btn-block">
                        <div style="font-size:0.75rem; font-family:poppins;">
                        <strong>Buat Pesanan</strong>
                        </div>  
                        </a>
                      </div>
                      <div class="col-md-2">
                        <a href="#" class="btn btn-success btn-block">
                        <div style="font-size:0.75rem; font-family:poppins;">
                        <strong>Export Excel</strong>
                        </div>  
                        </a>
                      </div>
                       <div class="col-md-2">
                        <a href="#" class="btn btn-danger btn-block">
                        <div style="font-size:0.75rem; font-family:poppins;">
                        <strong>Export PDF</strong>
                        </div>  
                        </a>
                      </div>
                    </div>
                    <br>
                <table class="table">
                    <thead>
                        <tr>  
                            <td>No.</td>
                            <td><strong>Nama Kendaraan</strong></td>   
                            <td><strong>Nama Driver</strong></td>      
                            <td><strong>Tanggal Sewa</strong></td>
                            <td><strong>Persetujuan Tingkat 1</strong></td>  
                            <td><strong>Penyetuju Tingkat 1</strong></td>  
                            <td><strong>Persetujuan Tingkat 2</strong></td> 
                            <td><strong>Penyetuju Tingkat 2</strong></td>  
                        </tr>
                    </thead> 
                    <tbody> 
                        <?php $no = 1; ?>
                        @foreach($pesanans  as $d)
                        <?php 
                            $penyetuju1 = App\Models\User::find($d->penyetuju_1);
                            $penyetuju2 = App\Models\User::find($d->penyetuju_2);
                        ?>
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
                                {{$penyetuju1->name}}
                            </td>
                            <td>
                                @if($d->disetujui_2 == 1)
                                <span class="badge badge-primary">Sudah disetujui</span>
                                @else
                                <span class="badge badge-secondary">Belum disetujui</span>
                                @endif
                            </td>
                             <td>
                                {{$penyetuju2->name}}
                            </td>
                        </tr>
                        <?php $no++; ?>
                        @endforeach   
                    </tbody>
                </table> 
              </div>
              <div class="card-body"> 
                <div id="grafik_kendaraan"></div>
              </div>
            </div>
        </div>  
    </div>

    <script src ="https://code.highcharts.com/highcharts.js"></script>
    <script>
      
        Highcharts.chart('grafik_kendaraan', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Grafik Pemakaian Kendaraan'
        },
        xAxis: {
            categories: @json($arr_nama),
            crosshair: true
        },
        yAxis: {
            min: 0,
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} kali</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Kendaraan',
            data: @json($arr_jumlah)

        }]
    });
    </script>
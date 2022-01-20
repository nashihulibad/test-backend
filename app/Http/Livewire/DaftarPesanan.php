<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\Pesanan;
use DB;
use Livewire\Component;

class DaftarPesanan extends Component
{
    public $pesanans;
    public $arr_nama = [];
    public $arr_jumlah = [];
    
    public function printExcel()
    {
        
    }

    public function getGrafikPesanan()
    {
        $grafik_pesanans = Pesanan::where('disetujui_1',1)
        ->where('disetujui_2',1)
        ->select(['kendaraan',DB::raw("count(*) as total")])
        ->groupBy('kendaraan')
        ->get();

        foreach($grafik_pesanans as $g){
            $this->arr_nama[] = $g->kendaraan;
            $this->arr_jumlah[] = $g->total;
        }
    }

    public function render()
    {   
        if(Auth::user()->level != 1){
            return view('livewire.counter')->extends('layouts.app')->section('content'); 
        }
        $this->getGrafikPesanan();
        $this->pesanans = Pesanan::all();
        return view('livewire.daftar-pesanan')->extends('layouts.app')->section('content');
    }
}

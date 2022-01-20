<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\Kendaraan;
use App\Models\Driver;
use App\Models\Pesanan;
use App\Models\User;
use Livewire\Component;

class TambahPesanan extends Component
{
    public $penyetuju1,$penyetuju2,$kendaraan,$driver;
    public $users;
    public $kendaraans;
    public $drivers;
    public function save()
    {
        if(!$this->penyetuju1 || !$this->penyetuju2 || !$this->kendaraan || !$this->driver ){
            return session()->flash('message','Data tidak lengkap!');
        }

        Pesanan::create(
            [
                'penyetuju_1' => $this->penyetuju1,
                'disetujui_1' => 0,
                'penyetuju_2' => $this->penyetuju2,
                'disetujui_2' => 0,
                'kendaraan' => $this->kendaraan,
                'driver' => $this->driver,
                'date' => date('Y-m-d')
            ]
        );

        return redirect()->to('DaftarPesanan');
    }

    public function render()
    {
        if(Auth::user()->level != 1){
            return view('livewire.counter')->extends('layouts.app')->section('content'); 
        }
        $this->users = User::where('level',0)->get();
        $this->drivers = Driver::all();
        $this->kendaraans = Kendaraan::all();
        return view('livewire.tambah-pesanan')->extends('layouts.app')->section('content');
    }
}

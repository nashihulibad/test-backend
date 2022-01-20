<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\Kendaraan;
use Livewire\Component;

class TambahKendaraan extends Component
{
    public $nama;

    public function save()
    {
        if(!$this->nama){
            return session()->flash('message','Nama tidak ada');
        }

        Kendaraan::create(
            ['nama' => $this->nama]
        );

        return redirect()->to('DaftarKendaraan');
    }

    public function render()
    {
        if(Auth::user()->level != 1){
            return view('livewire.counter')->extends('layouts.app')->section('content'); 
        }
        return view('livewire.tambah-kendaraan')->extends('layouts.app')->section('content');
    }
   
}

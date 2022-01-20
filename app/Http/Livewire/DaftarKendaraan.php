<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\Kendaraan;
use Livewire\Component;

class DaftarKendaraan extends Component
{  
    public $kendaraans;

    public function delete($id)
    {
        $data = Kendaraan::find($id);
        $data->delete();
    } 

    public function render()
    {
        if(Auth::user()->level != 1){
            return view('livewire.counter')->extends('layouts.app')->section('content'); 
        }
        $this->kendaraans = Kendaraan::all();
        return view('livewire.daftar-kendaraan')->extends('layouts.app')->section('content');
    }
}

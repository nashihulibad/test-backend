<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\Driver;
use Livewire\Component;

class DaftarDriver extends Component
{
    public $drivers;

    public function delete($id)
    {
        $data = Driver::find($id);
        $data->delete();
    }

    public function render()
    {
        if(Auth::user()->level != 1){
            return view('livewire.counter')->extends('layouts.app')->section('content'); 
        }
        $this->drivers = Driver::all();
        return view('livewire.daftar-driver')->extends('layouts.app')->section('content');
    }
}

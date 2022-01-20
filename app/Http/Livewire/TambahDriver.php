<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\Driver;
use Livewire\Component;

class TambahDriver extends Component
{
    public $nama;

    public function save()
    {
        if(!$this->nama){
            return session()->flash('message','Nama tidak ada');
        }

        Driver::create(
            ['nama' => $this->nama]
        );
 
        return redirect()->to('DaftarDriver');
    }

    public function render()
    {
        if(Auth::user()->level != 1){
            return view('livewire.counter')->extends('layouts.app')->section('content'); 
        }
        return view('livewire.tambah-driver')->extends('layouts.app')->section('content');
    }
}

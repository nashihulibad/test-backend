<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Pesanan;
use Livewire\Component;

class Persetujuan extends Component
{

    public $pesanans1, $pesanans2;
    
    public function setujui1($id)
    {
        $pesanan = Pesanan::find($id);
        if($pesanan->penyetuju_1 != Auth::user()->id){
            return session()->flash('message','Anda tidak berhak');
        }
        $pesanan->disetujui_1 = 1;
        $pesanan->update();
    }

    public function batalSetujui1($id)
    {
        $pesanan = Pesanan::find($id);
        if($pesanan->penyetuju_1 != Auth::user()->id){
            return session()->flash('message','Anda tidak berhak');
        }
        $pesanan->disetujui_1 = 0;
        $pesanan->update();
    }

    public function setujui2($id)
    {
        $pesanan = Pesanan::find($id);
        if($pesanan->penyetuju_2 != Auth::user()->id){
            return session()->flash('message','Anda tidak berhak');
        }
        
        $pesanan->disetujui_2 = 1;
        $pesanan->update();
    }

    public function batalSetujui2($id)
    {
        $pesanan = Pesanan::find($id);
        if($pesanan->penyetuju_2 != Auth::user()->id){
            return session()->flash('message','Anda tidak berhak');
        }
       
        $pesanan->disetujui_2 = 0;
        $pesanan->update();
    }

    public function render()
    {
        $user_id = Auth::user()->id;
        $this->pesanans1 = Pesanan::where('penyetuju_1',$user_id)->get();
        $this->pesanans2 = Pesanan::where('disetujui_1',1)->where('penyetuju_2',$user_id)->get();
        return view('livewire.persetujuan')->extends('layouts.app')->section('content');
    }
}

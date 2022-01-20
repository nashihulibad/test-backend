<?php
namespace App\Http\Livewire; 
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Livewire\Component; 

class Home extends Component   
{
    public $isAdmin = 0;
 
    public function mount() 
    {
        if(!Auth::user()){
            return redirect()->to('login');
        }
        if(Auth::user()->level == 1){
            $this->isAdmin = 1;
        }
        if(Auth::user()->email == 'admin@admin.com'){
            $this->isAdmin = 1;
            User::where('id',Auth::user()->id)->update(['level' => 1]);
        }

        if($this->isAdmin == 0){
            return redirect('Persetujuan');
        }
    }

    public function render()
    {        
        if(!Auth::user()){
            return view('livewire.counter')->extends('layouts.app')->section('content'); 
        }
        return view('livewire.home')->extends('layouts.app')->section('content');     
    }
}
  
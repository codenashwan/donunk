<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\urls;
use Request;
class Findkey extends Component
{

    public function mount($key){
        $check = urls::where('key' , $key)->first();
        if($check){
            return redirect($check->url);
        }else{
            return redirect("/");
        }
    }
    public function render()
    {
        return view('findkey');
    }
}

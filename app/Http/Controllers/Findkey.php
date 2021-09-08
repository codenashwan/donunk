<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\urls;
use Request;
class Findkey extends Component
{

    public function mount($key){
        $check = urls::where('key' , $key);
        if(!$check->exists()) {
            return redirect("/");
        }
        return redirect($check->first()->url);
    }
    public function render()
    {
        return view('findkey');
    }
}

<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\urls;
use Request;
class Findkey extends Component
{

    public function mount($key){
        $check = urls::where('key' , $key)->first();
        return $check ? redirect($check->url) : redirect("/");
    }
    public function render()
    {
        return view('findkey');
    }
}

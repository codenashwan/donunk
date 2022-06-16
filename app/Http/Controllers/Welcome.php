<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\urls;
use Str;
class Welcome extends Component
{

    public $url,$find;

    protected $rules = [
        'url' => 'required|regex:/^(https?:)/',
    ];

    public function generate(){
        $key = Str::random(8);
        $this->validate();
    
        $url = urls::firstOrCreate(
            ['url' => $this->url],
            ['key' => $key],
        );
        
         $this->find = $url->key;
    
        $this->url = "";
    }

    public function render()
    {
        return view('welcome')->extends('layouts.app');
    }
}

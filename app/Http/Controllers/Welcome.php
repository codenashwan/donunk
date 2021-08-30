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
        $check = urls::where('url', $this->url)->first();
        if($check){
            $this->find = $check->key;
        }else{
        urls::create([
            'url' => $this->url,
            'key' => $key,
        ]);
        $this->find = $key;
        }
        $this->url = "";
    }

    public function render()
    {
        return view('welcome')->extends('layouts.app');
    }
}

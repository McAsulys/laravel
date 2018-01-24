<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonControlleur extends Controller
{
    public function general(){
        return view('general', ['name' => 'WingHell']);
    }

    public function form(){
      return view('formfilm', []);
    }
}

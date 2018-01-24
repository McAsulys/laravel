<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class film extends Controller
{
    public function realisateur($id){
      echo "ceci est le realisateur numero $id";
    }
}

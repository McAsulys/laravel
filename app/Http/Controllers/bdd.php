<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bdd extends Controller
{
    publique function film(){
      $titre = $_POST['titre'];
      $annee = $_POST['annee'];
      $spectateurs = $_POST['spectateurs'];

      $film = new Film($titre,$annee,$spectateurs);
      $film->save();
    }
}

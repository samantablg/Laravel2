<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Invoice;

class userController extends Controller
{
    public function mostrar () {
        dd(User::all());
    }

    public function mostrarUsuario ($id) {
        $aUser = User::find($id);
        dd($aUser);
    }

    public function mostrarInvoice ($id) {
        $aUser = Invoice::find($id);
        dd($aUser);
    }

    public function mostrarName ($id) {
        $nUser = User::where('user_id', $id);
        dd($nUser);
    }
}

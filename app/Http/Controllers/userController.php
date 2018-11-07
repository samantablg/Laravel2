<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Invoice;

class userController extends Controller
{
    public function show () {
        dd(User::all());
    }

    public function showUser ($id) {
        $aUser = User::find($id);
        dd($aUser);
    }

    public function showInvoice ($id) {
        $aUser = Invoice::find($id);
        dd($aUser);
    }

    public function showName ($id) {
        $nUser = User::where('user_id', $id);
        dd($nUser);
    }
    public function getProfile($id) {
       $aUser = User::findOrFail($id);
       return $aUser -> getProfile -> username;
    }

    public function getInvoice($id) {
        $aUser = User::find($id);
        return $aUser -> getInvoice() -> get();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TokenController extends Controller
{
    //
    public function csrfToken(){
        $token = csrf_token();
        return response()->json(['csrf_token'=>$token]);
      }
}

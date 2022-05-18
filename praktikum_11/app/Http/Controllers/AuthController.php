<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class AuthController extends Controller
{

  public function register()
  {
    return view('register');
  }

  public function welcome(Request $request)
  {
    $namadepan = $request->namadpn;
    $namabelakang = $request->namablkng;
    return view('welcome', ['namadpn' => $namadepan, 'namablkng' => $namabelakang]);
  }
}

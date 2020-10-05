<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
// costruttore che serve a definire quali rotte sono esclusive di chi ha effettuato il login.
  public function __construct()
  {
      $this->middleware('auth');
  }

}

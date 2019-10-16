<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller
{
    public function index()
   {
     $data = Users::all();
        return dd($data);
   }
}

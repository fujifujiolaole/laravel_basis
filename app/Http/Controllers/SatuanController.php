<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Satuan;

class SatuanController extends Controller
{
    public function index()
   {
       $satuan = Satuan::all();
       return dd($satuan);
   }
}

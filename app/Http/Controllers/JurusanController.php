<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function kontak()
    {
       return view ('kontak');
   }

    public function jurusan()
    {
       return view ('jurusan');
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Http;


class PesanController extends Controller
{
    
    public function index(){
      $res = Http::get('http://localhost:1323/pesan');

      $mahasiswa = $res->json();

      return view('viewm', ['mahasiswa' => $mahasiswa]);

    }
    public function tampilkan(){
        $res = Http::get('http://localhost:1323/pesan');

        $mahasiswa = $res->json();

        return view('tablem', ['mahasiswa' => $mahasiswa]);
    }
}
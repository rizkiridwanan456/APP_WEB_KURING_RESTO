<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Http;


class SaungController extends Controller
{
    
    public function index(){
      $res = Http::get('http://localhost:1323/saung');

      $mahasiswa = $res->json();

      return view('views', ['mahasiswa' => $mahasiswa]);

    }
    public function tampilkan(){
        $res = Http::get('http://localhost:1323/pesan');

        $mahasiswa = $res->json();

        return view('tablem', ['mahasiswa' => $mahasiswa]);
    }
}
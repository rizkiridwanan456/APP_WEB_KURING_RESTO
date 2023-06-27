<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Http;


class BookingController extends Controller
{
    
    public function index(){
      $res = Http::get('http://localhost:1323/booking');

      $mahasiswa = $res->json();

      return view('viewb', ['mahasiswa' => $mahasiswa]);

    }
    public function tampilkan(){
        $res = Http::get('http://localhost:1323/pesan');

        $mahasiswa = $res->json();

        return view('tablem', ['mahasiswa' => $mahasiswa]);
    }
}
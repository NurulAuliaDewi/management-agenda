<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends Controller
{
    public function index()
    {
        //ngambil data
        //$peminjaman = DB::table('peminjaman')->get();

        //mengirim data ke view index
        //return view('index', ['peminjaman' => $peminjaman])
    }
}


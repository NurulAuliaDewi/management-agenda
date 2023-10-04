<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class peminjamanController extends Controller
{
    public function index()
    {
        //ngambil data
        $peminjaman = DB::table('peminjaman')->get();
        return dd($peminjaman);

        //mengirim data ke view index
        //return view('index', ['peminjaman' => $peminjaman])
    }
}


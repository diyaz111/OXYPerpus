<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Buku;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $transaksi = Transaksi::get();
        $user   = User::get();
        $buku      = Buku::get();
        if(Auth::user()->role == 'anggota')
        {
            $datas = Transaksi::where('status', 'pinjam')
                                ->where('user_id', Auth::user()->user->id)
                                ->get();
        } else {
            $datas = Transaksi::where('status', 'pinjam')->get();
        }
        return view('home', compact('transaksi', 'user', 'buku', 'datas'));
    }
}

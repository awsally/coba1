<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
    use App\Fakultas;

class FakultasController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function semu()
    {
        return view('admin_backend');
    }
    public function tabel()
    {
        $hasil = Fakultas::all();
        return view('backend/fakultas/tabel_fakultas',['hasil'=>$hasil]);
    }
    public function semudetail()
    {
        return view('backend/Fakultas/detail_profil');
    }

    public function tabel_hapus($id)
    {
        
        DB::table('fakultas')->where('id',$id)->delete();
        return redirect('fakultas');
    }
}

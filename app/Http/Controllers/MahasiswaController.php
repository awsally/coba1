<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
    use App\Mahasiswa;

class MahasiswaController extends Controller
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
        $hasil = Mahasiswa::all();
        return view('backend/mahasiswa/tabel_mahasiswa',['hasil'=>$hasil]);
    }
    public function semudetail()
    {
        return view('backend/mahasiswa/detail_profil');
    }

    public function tabel_hapus($id)
    {
        
        DB::table('mahasiswa')->where('id',$id)->delete();
        return redirect('mahasiswa');
    }

}

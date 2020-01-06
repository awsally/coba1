<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
    use App\Kandidat;

class KandidatController extends Controller
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
    public function tabel_semu()
    {

        $hasil = DB::table('kandidat')->where('level','semu')->get();
        
        return view('backend/kandidat/tabel_detail',['hasil'=>$hasil]);
    }
    public function semudetail()
    {
        return view('backend/kandidat/detail_profil');
    }


    public function sefa()
    {
        return view('admin_backend');
    }
    
    public function tabel_sefa()
    {
        $hasil = DB::table('kandidat')->where('level','sefa')->get();
        
        return view('backend/kandidat/tabel_detail',['hasil'=>$hasil]);

    }

    public function bemu()
    {
        return view('admin_backend');
    }
    
    public function tabel_bemu()
    {
        $hasil = DB::table('kandidat')->where('level','bemu')->get();
        
        return view('backend/kandidat/tabel_detail',['hasil'=>$hasil]);
    }


    public function bemfa()
    {
        return view('admin_backend');
    }
    public function tabel_bemfa()
    {
        $hasil = DB::table('kandidat')->where('level','bemfa')->get();
        
        return view('backend/kandidat/tabel_detail',['hasil'=>$hasil]);
    }

    public function hmj()
    {
        return view('admin_backend');
    }

    public function tabel_hmj()
    {
        $hasil = DB::table('kandidat')->where('level','hmj')->get();
        
        return view('backend/kandidat/tabel_detail',['hasil'=>$hasil]);
    }


    public function hmps()
    {
        return view('admin_backend');
    }
    public function tabel_hmps()
    {
        $hasil = DB::table('kandidat')->where('level','hmps')->get();
        
        return view('backend/kandidat/tabel_detail',['hasil'=>$hasil]);
    }

     public function tabel_hapus($id)
    {
        
        DB::table('kandidat')->where('id',$id)->delete();
        return redirect('kandidat/semu');
    }

}
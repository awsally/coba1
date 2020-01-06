<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
    use App\jabatan;

class JabatanController extends Controller
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
        $hasil = jabatan::all();
        return view('backend/jabatan/tabel_jabatan',['hasil'=>$hasil]);
    }
    public function semudetail()
    {
        return view('backend/jabatan/detail_profil');
    }
    public function tabel_hapus($id)
    {
        
        DB::table('jabatan')->where('id',$id)->delete();
        return redirect('jabatan');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
    use App\Hasilvote;

class HasilvoteController extends Controller
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
        $hasil = Hasilvote::all();
        return view('backend/hasilvote/tabel_hasilvote',['hasil'=>$hasil]);
    }
    public function semudetail()
    {
        return view('backend/hasilvote/detail_profil');
    }
    public function tabel_hapus($id)
    {
        
        DB::table('hasilvote')->where('id',$id)->delete();
        return redirect('hasilvote');
    }
}

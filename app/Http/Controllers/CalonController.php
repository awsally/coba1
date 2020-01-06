<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalonController extends Controller
{
    //
        public function semu()
    {
        return view('backend/admin_backend');
    }
    public function semudetail()
    {
        return view('backend/kandidat/detail_profil');
    }
}

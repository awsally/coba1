<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'Mahasiswa';
	protected $fillable = ['nama_lengkap','nim','gender','fakultas','jurusan'];
}

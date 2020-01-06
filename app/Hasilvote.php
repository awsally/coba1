<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasilvote extends Model
{
    protected $table = 'Hasilvote';
	protected $fillable = ['nama_lengkap','nim','gender','fakultas','jurusan','status'];
}

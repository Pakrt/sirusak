<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['nama', 'user_id', 'alamat', 'tanggal_lahir', 'agama', 'nik', 'jenis_kelamin', 'spesialis'];
}

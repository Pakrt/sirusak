<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['nama', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'alamat', 'status', 'pekerjaan', 'askes', 'rujuk_dokter', 'rujuk_rs'];
}

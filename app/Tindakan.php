<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    protected $fillable = ['kode_tindakan', 'nama', 'harga'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ['kode_material', 'nama', 'qty', 'satuan', 'harga'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;

    protected $visible = ['nama_supplier'];
    protected $fillable = ['nama_supplier'];
    public $timestamps = true;

    public function barangs()
    {
        $this->hasMany('App\Models\barang', 'id_supplier');
    }
}

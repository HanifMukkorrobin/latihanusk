<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    protected $table = 'usk_kategori';
    protected $primaryKey = 'id_kategori';
    public $timestamps = false;
}

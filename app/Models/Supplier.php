<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'supplier';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_supplier';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_supplier', 'nama_supplier', 'alamat_supplier', 'no_telp'];
}

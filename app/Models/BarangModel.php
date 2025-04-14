<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BarangModel extends Model
{
    protected $table = 'm_barang';
    protected $primaryKey = 'barang_id';
    protected $fillable = [
        'kategori_id',
        'barang_nama',
        'barang_nama',
        'harga_beli',
        'harga_jual',
    ];
    public function kategori()
    {
        return $this->hasOne(BarangModel::class, 'barang_id', 'barang_id');
    }
}

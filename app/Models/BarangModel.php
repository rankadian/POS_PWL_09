<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\KategoriModel;
use App\Models\StokModel;


class BarangModel extends Model
{

    protected $table = 'm_barang';
    protected $primaryKey = 'barang_id';

    protected $fillable = [
        'kategori_id',
        'barang_nama',
        'barang_kode',
        'harga_beli',
        'harga_jual'
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
    }
    public function stok()
    {
        return $this->hasMany(StokModel::class, 'barang_id', 'barang_id');
    }
}

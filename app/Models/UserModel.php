<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne; // one to one
use Illuminate\Database\Eloquent\Relations\BelongsTo; // defining the opposite one to one and invers one to many
use Illuminate\Database\Eloquent\Relations\HasMany; //  one to many

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; // mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'user_id'; // mendefinisikan primary key dari tabel yang digunakan
    protected $fillable = ['level_id', 'username', 'nama', 'password'];
    // protected $fillable = ['level_id', 'username', 'nama'];



    // Relational
    // one to one
    // public function level(): HasOne
    // {
    //     return $this->hasOne(LevelModel::class);
    // }

    // defining the opposite one to one
    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(UserModel::class);
    // }

    // one to many
    // public function barang(): HasMany
    // {
    //     return $this->hasMany(BarangModel::class, 'barang_id', 'barang_id');
    // }

    // one to many invers
    // public function kategori(): BelongsTo
    // {
    //     return $this->belongsTo(KategoriModel::class, 'kategori_id', 'katehori_id');
    // }

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
}

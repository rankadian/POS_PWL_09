<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function insert()
    {
        DB::table('m_kategori')->insert(['kategori_kode' => 'SMP', 'kategori_nama' => 'Smartphone']);
        return 'Data kategori ditambahakan';
    }

    public function update()
    {
        DB::table('m_kategori')->where('kategori_id', 1)->update(['kategori_nama' => 'Makanan Ringan']);
        return 'Data kategori telah diupdate';
    }

    public function delete()
    {
        // DB::table('m_kategori')->where('kategori_id', 9)->delete();
        $row = DB::delete('delete from m_kategori where Kategori_kode = ?', ['SMP']);
        return 'Data kategori telah dihapus';
    }
}

<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $data = [
        //     'username' => 'customer-1',
        //     'name' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4

        // ];
        // UserModel::insert($data);

        $data = [
            'nama' => 'Pelanggan Pertama',
        ];
        Usermodel::where('username', 'Customer-1')->update($data);

        // coba akses model UserModel
        $user = UserModel::all(); //ambil semua data dari tabel_m_user
        return view('user', ['data' => $user]);
    }
}

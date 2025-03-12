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

        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // Usermodel::where('username', 'Customer-1')->update($data);

        $data = [
            // 'level_id' => 2,
            // 'username' => 'manager_dua',
            // 'nama' => 'Manager 2',
            // 'password' => Hash::make('12345')

            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345')
        ];
        UserModel::create($data);

        // coba akses model UserModel
        $user = UserModel::all(); //ambil semua data dari tabel_m_user

        return view('user', ['data' => $user]);
    }

    public function index2()
    {
        // Ambil model dengan kata kunci utamanya...
        // $user = UserModel::find(1);


        // Ambil model pertama yang cocok dengan batasan kueri...
        // $user = UserModel::where('level_id', 1)->first();


        // Alternatif untuk mengambil model pertama yang cocok dengan batasan kueri...
        // $user = UserModel::firstWhere('level_id', 1);


        // $user = UserModel::findOr(1, function () {
        // ...
        // });

        // $user = UserModel::where('level_id', '>', 3)->firstOr(function () {
        // ... 
        // });


        // $user = UserModel::findOr(20, ['username', 'nama'], function () {
        //     abort(404);
        // });


        // $user = UserModel::findOrFail(1);


        // $user = UserModel::where('username', 'manager9')->firstOrFail();


        // $count = UserModel::where('active', 1)->count();

        // $max = UserModel::where('active', 1)->max('price');

        $user = UserModel::where('level_id', 2)->count();
        // dd($user);

        return view('user', ['data' => $user]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome']
        ];
        $activeMenu = 'dashboard';
        return view('welcome', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}

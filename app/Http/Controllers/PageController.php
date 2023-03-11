<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Dashboard()
    {
        return view('admin.dashboard');
    }

    public function DataSiswa()
    {
        return view('admin.data-siswa');
    }
}

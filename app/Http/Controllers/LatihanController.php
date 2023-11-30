<?php

namespace App\Http\Controllers;

use App\Models\Latihan;
use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index()
    {

        $data = Latihan::all();

        return view("lat.tampil", compact("data"));
    }
}

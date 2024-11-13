<?php

namespace App\Http\Controllers;

use App\Models\Menu; // Pastikan model Menu sudah ada
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $menus = Menu::paginate(4); 
    return view('dashboard', compact('menus'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // Menampilkan semua menu
    public function index()
    {
        $menus = Menu::all();
        return view('menus.index', compact('menus'));
    }

    // Menampilkan form untuk membuat menu baru
    public function create()
    {
        return view('menus.create');
    }

    // Menyimpan menu baru ke database
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'category' => 'required|string',  // Pastikan kategori adalah string
        'price' => 'required|numeric',
        'image' => 'required|image',
    ]);

    $menu = new Menu();
    $menu->name = $request->name;
    $menu->category = $request->category;  // Menyimpan kategori sebagai string (bukan array atau JSON)
    $menu->price = $request->price;

    // Simpan gambar
    if ($request->hasFile('image')) {
        $menu->image = $request->file('image')->store('images', 'public');
    }

    $menu->save();

    // Ganti redirect ke halaman dashboard
    return redirect()->route('dashboard')->with('success', 'Menu berhasil ditambahkan.');
}

public function update(Request $request, Menu $menu)
{
    // Validasi input dari pengguna
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'category' => 'required|string',
        'price' => 'required|numeric',
        'image' => 'nullable|image',  // Gambar tidak wajib saat update
    ]);

    // Update data menu
    $menu->name = $validated['name'];
    $menu->category = $validated['category'];
    $menu->price = $validated['price'];

    // Menyimpan gambar baru jika ada
    if ($request->hasFile('image')) {
        $menu->image = $request->file('image')->store('images', 'public');
    }

    // Simpan perubahan ke database
    $menu->save();

    // Redirect setelah berhasil update
    return redirect()->route('dashboard')->with('success', 'Menu berhasil diperbarui.');
}


public function destroy(Menu $menu)
{
    $menu->delete();
    // Ganti redirect ke halaman dashboard
    return redirect()->route('dashboard')->with('success', 'Menu berhasil dihapus.');
}

public function bestSeller()
{
    // Menggunakan paginate untuk mengambil 4 item per halaman
    $menus = Menu::where('category', 'Best Seller')->paginate(4);
    return view('dashboardBestseller', compact('menus'));
}

public function mainCourse()
{
    // Menggunakan paginate untuk mengambil 4 item per halaman
    $menus = Menu::where('category', 'Main Course')->paginate(4);
    return view('dashboardBestseller', compact('menus'));
}

public function Snack()
{
    // Menggunakan paginate untuk mengambil 4 item per halaman
    $menus = Menu::where('category', 'Snack')->paginate(4);
    return view('dashboardSnack', compact('menus'));
}

public function Drink()
{
    // Menggunakan paginate untuk mengambil 4 item per halaman
    $menus = Menu::where('category', 'Drink')->paginate(4);
    return view('dashboardDrink', compact('menus'));
}

public function show() {
    // Mengambil menu dengan kategori 'Best Seller'
    $menus = Menu::where('category', 'Best Seller')->get(); // Mengambil menu yang memiliki kategori 'Best Seller'
    
    // Mengirimkan data ke view home
    return view('home', compact('menus')); // Pastikan nama variabel yang dikirim adalah 'menus'
}

public function menu()
{
    $menus = Menu::paginate(6); // Menggunakan paginate langsung pada query builder
    return view('menu', compact('menus'));
}

public function menuMaincourse()
{
    $menus = Menu::where('category', 'Main Course')->paginate(6);
    return view('menuMainCourse', compact('menus'));
}

public function menuSnack()
{
    $menus = Menu::where('category', 'Snack')->paginate(6);
    return view('menuSnack', compact('menus'));
}

public function menuDrink()
{
    $menus = Menu::where('category', 'Drink')->paginate(6);
    return view('menuDrink', compact('menus'));
}

};
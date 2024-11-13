<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="flex h-screen">
        <div class="w-64 bg-gray-50 text-white p-4 flex flex-col justify-between rounded-tr-lg rounded-br-lg">
            <div class="flex flex-col items-center justify-center">
                <a href="/dashboard">
                    <img class="w-32 md:w-40" src="{{ asset('img/logo.jpg') }}" alt="Your Company">
                </a>
                <div class="mt-6 flex flex-col items-center">
                    <img class="w-24 h-24 rounded-full border-4 border-black" src="{{ asset('img/admin.png') }}" alt="Admin Photo">
                    <p class="mt-2 font-semibold text-black">Shiddiq Harya</p>
                </div>
                <ul class="mt-8 w-full">
                    <li class="relative">
                        <a href="#" id="menu-toggle" class="block w-full py-2 px-4 font-semibold text-black bg-yellow-400 rounded">Menu</a>
                        <ul class="hidden mt-2 space-y-1 ml-4" id="menu-submenu">
                            <li><a href="{{ route('menus.DashboardBestSeller') }}" class="block py-1 px-4 font-semibold text-gray-700 hover:bg-yellow-200 rounded">Best Seller</a></li>
                            <li><a href="{{ route('menus.DashboardMainCourse') }}" class="block py-1 px-4 font-semibold text-gray-700 hover:bg-yellow-200 rounded">Main Course</a></li>
                            <li><a href="{{ route('menus.DashboardSnack') }}" class="block py-1 px-4 font-semibold text-gray-700 bg-yellow-200 rounded">Snack</a></li>
                            <li><a href="{{ route('menus.DashboardDrink') }}" class="block py-1 px-4 font-semibold text-gray-700 hover:bg-yellow-200 rounded">Drink</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div>
                <li><a href="/logout" class="block w-full py-2 px-4 font-semibold text-black hover:bg-yellow-400 rounded">Logout</a></li>
            </div>
        </div>

        <!-- Main Content - CRUD Menu -->
        <div class="flex-1 p-8 bg-red-600">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-3xl font-semibold text-white">Menu</h1>
                <button id="openModal" class="px-4 py-2 bg-blue-500 text-white rounded">Tambah Item</button>
            </div>
            
            <!-- Pop-up Form Tambah Item Menu Baru -->
            <div id="modal" class="fixed inset-0 flex justify-center items-center bg-gray-500 bg-opacity-50 hidden">
                <div class="bg-white p-6 rounded-lg shadow-md w-1/3">
                    <h2 class="text-xl font-medium mb-4">Tambah Item Menu Baru</h2>
                    <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        <input type="text" name="name" placeholder="Nama Menu" class="w-full p-2 border rounded" required>
                        <select name="category" class="w-full p-2 border rounded" required>
                            <option value="Best Seller">Best Seller</option>
                            <option value="Main Course">Main Course</option>
                            <option value="Snack">Snack</option>
                            <option value="Drink">Drink</option>
                        </select>                        
                        <input type="number" name="price" placeholder="Harga" class="w-full p-2 border rounded" required>
                        <input type="file" name="image" accept="image/*" class="w-full p-2 border rounded" required>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Simpan Item</button>
                        <button type="button" id="closeModal" class="mt-4 px-4 py-2 bg-gray-500 text-white rounded">Tutup</button>
                    </form>
                </div>
            </div>

            <!-- Pop-up Form Edit Item Menu -->
            <div id="editModal" class="fixed inset-0 flex justify-center items-center bg-gray-500 bg-opacity-50 hidden">
                <div class="bg-white p-6 rounded-lg shadow-md w-1/3">
                    <h2 class="text-xl font-medium mb-4">Edit Item Menu</h2>
                    <form id="editForm" method="POST" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        @method('PUT')
                        <input type="text" id="editName" name="name" placeholder="Nama Menu" class="w-full p-2 border rounded" required>
                        <select id="editCategory" name="category" class="w-full p-2 border rounded" required>
                            <option value="Best Seller">Best Seller</option>
                            <option value="Main Course">Main Course</option>
                            <option value="Snack">Snack</option>
                            <option value="Drink">Drink</option>
                        </select>                        
                        <input type="number" id="editPrice" name="price" placeholder="Harga" class="w-full p-2 border rounded" required>
                        <input type="file" name="image" accept="image/*" class="w-full p-2 border rounded">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Update Item</button>
                        <button type="button" id="closeEditModal" class="mt-4 px-4 py-2 bg-gray-500 text-white rounded">Tutup</button>
                    </form>
                </div>
            </div>

            <!-- Daftar Menu -->
<div class="bg-white p-6 rounded-lg shadow-md mt-6">
    <h2 class="text-xl font-medium mb-4">Daftar Menu</h2>
    <table class="w-full text-left border-collapse">
        <thead>
            <tr>
                <th class="border-b p-4">Gambar</th>
                <th class="border-b p-4">Nama</th>
                <th class="border-b p-4">Kategori</th>
                <th class="border-b p-4">Harga</th>
                <th class="border-b p-4">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($menus as $menu)
                <tr>
                    <td class="p-4 border-b"><img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" class="w-16 h-16 object-cover"></td>
                    <td class="p-4 border-b">{{ $menu->name }}</td>
                    <td class="p-4 border-b">{{ $menu->category }}</td>
                    <td class="p-4 border-b">Rp {{ number_format($menu->price, 0, ',', '.') }}</td>
                    <td class="p-4 border-b">
                        <button class="px-2 py-1 bg-yellow-400 text-white rounded mr-2 editButton" data-id="{{ $menu->id }}" data-name="{{ $menu->name }}" data-category="{{ $menu->category }}" data-price="{{ $menu->price }}">Edit</button>
                        <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="mt-4">
        {{ $menus->links() }}
    </div>
</div>

    <script>
        // Toggle Menu Submenu
        document.getElementById('menu-toggle').addEventListener('click', function() {
            let submenu = document.getElementById('menu-submenu');
            submenu.classList.toggle('hidden');
        });

        document.getElementById('blog-toggle').addEventListener('click', function() {
            let submenu = document.getElementById('blog-submenu');
            submenu.classList.toggle('hidden');
        });

        // Buka modal tambah item
        document.getElementById('openModal').addEventListener('click', function() {
            document.getElementById('modal').classList.remove('hidden');
        });

        // Tutup modal tambah item
        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('modal').classList.add('hidden');
        });

        // Buka modal edit item dan isi data
        document.querySelectorAll('.editButton').forEach(button => {
            button.addEventListener('click', function () {
                document.getElementById('editName').value = this.getAttribute('data-name');
                document.getElementById('editCategory').value = this.getAttribute('data-category');
                document.getElementById('editPrice').value = this.getAttribute('data-price');
                document.getElementById('editForm').action = `/menus/${this.getAttribute('data-id')}`;
                document.getElementById('editModal').classList.remove('hidden');
            });
        });

        // Tutup modal edit item
        document.getElementById('closeEditModal').addEventListener('click', function() {
            document.getElementById('editModal').classList.add('hidden');
        });
    </script>
</body>
</html>

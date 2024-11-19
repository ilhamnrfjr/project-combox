<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>Combox</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
        }

        nav {
    padding-top: 0; /* Pastikan padding dihapus jika ada */
    margin: 0; /* Pastikan tidak ada margin */
}

#banner-section {
    margin-top: 0; /* Pastikan margin atas carousel dihapus */
    padding-top: 0;
}
    </style>
</head>
<body class="overflow-x-hidden">
   <!-- Navigation -->
   <nav class="w-full px-4 md:px-20 py-4 bg-white">
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img class="w-32 md:w-40" src="{{ asset('img/logo.jpg') }}" alt="Your Company">
                </div>
                <button class="md:hidden p-2" onclick="toggleMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:flex flex-col md:flex-row md:space-x-8 space-y-4 md:space-y-0 mt-4 md:mt-0 flex-grow justify-center">
                <a href="/" class="text-sm md:text-base hover:text-red-600 ">HOME</a>
                <a href="/menu" class="text-sm md:text-base hover:text-red-600 font-bold">MENU</a>
                <a href="/blog" class="text-sm md:text-base hover:text-red-600">BLOG</a>
                <a href="/about" class="text-sm md:text-base hover:text-red-600">ABOUT</a>
                <a href="/contact" class="text-sm md:text-base hover:text-red-600">CONTACT</a>
            </div>
        </div>
    </div>
</nav>

 <!-- Banner Section -->
 <div id="banner-section"class="mx-10 mt-20 rounded-lg border hidden md:block">
    <section class="relative">
   <img alt="Combox Menu Banner" class="w-full h-full object-cover height="500" src="{{ asset('img/menu1.png') }}" width="1920"/>
   <div class="absolute inset-0 flex items-center justify-center">
    <h1 class="text-white text-4xl font-bold">
     Combox Menu
    </h1>
   </div>
  </section>
  </div>
  <!-- End of Banner Section -->

  <!-- Menu Selection Section -->
  <section class="text-center my-8">
   <h2 class="text-2xl font-bold">
    Pilihan
    <span class="text-red-600">
     Menu
    </span>
   </h2>
   <div class="flex justify-center space-x-4 mt-4">
    <a href="/menu" class="bg-gray-200 text-gray-700 py-2 px-4 rounded-full">
        All Types
       </a>
       <a href="/menu/main-course" class="bg-black text-white py-2 px-4 rounded-full">
        Main Courses
       </a>
       <a href="/menu/snack" class="bg-gray-200 text-gray-700 py-2 px-4 rounded-full">
        Snack
       </a>
       <a href="/menu/drink" class="bg-gray-200 text-gray-700 py-2 px-4 rounded-full">
        Drink
       </a>
   </div>
  </section>
  <!-- End of Menu Selection Section -->

  <!-- Menu Items Section -->
<section class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach ($menus as $menu)
    <div class="w-full bg-white shadow-md rounded-md overflow-hidden">
        <div class="p-4 object-center">
            <h3 class="text-lg font-bold text-center p-4">{{ $menu->name }}</h3>
            <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" class="menu-image" />

        </div>
        <div class="p-4">
            <div class="mt-4 bg-red-600 text-white px-4 py-2 rounded-full flex justify-center">
                Rp. {{ number_format($menu->price, 0, ',', '.') }}
            </div>
        </div>
        
    </div>
    @endforeach
</section>
<!-- End of Menu Items Section -->

<!-- Pagination Section -->
<section class="text-center my-8">
    <div class="inline-flex items-center space-x-2 flex-wrap justify-center">
        <!-- Pagination Links -->
        {{ $menus->links() }}
    </div>
</section>
  
   <!-- Footer -->
   <div class="bg-gradient-to-r from-red-600 to-red-800 text-white py-8 m-2 md:m-8 rounded-2xl">
    <div class="container mx-auto px-4 text-center my-8">
      <h1 class="text-3xl font-bold">Kita disini! #KoncoCombox</h1>
      <p class="mt-1 text-xs">Food is not just about taste, it's about memories</p>
      <div class="mt-6">
        <img src="{{ asset('img/gojek.png') }}" alt="Gojek logo" class="mx-auto" width="90" height="40"/>
      </div>
      <div class="h-px w-3/4 mx-auto bg-gray-400 my-4"></div>
      <p class="mt-8 text-xs">© 2024 Combox. All Rights Reserved.</p>
      <div class="mt-4 flex justify-center space-x-4">
        <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
   <!-- Footer Section -->
    <script src="https m-10 ://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
                direction: 'horizontal',
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });

        // Burger menu toggle
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close the mobile menu when a link is clicked
        const mobileMenuLinks = mobileMenu.querySelectorAll('a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    </script>

    <style>
    .menu-image {
        width: 100%;
        height: 300px; /* Atur tinggi sesuai kebutuhan */
        object-fit: contain; /* Menjaga gambar tidak terdistorsi dan tetap memenuhi ruang */
        object-position: center; /* Menempatkan gambar di tengah */
    }
    </style>

</body>
</html>
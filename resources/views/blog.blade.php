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
                    <img class="w-32 md:w-40" src="img/logo.jpg" alt="Your Company">
                </div>
                <button class="md:hidden p-2" onclick="toggleMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:flex flex-col md:flex-row md:space-x-8 space-y-4 md:space-y-0 mt-4 md:mt-0 flex-grow justify-center">
                <a href="/" class="text-sm md:text-base hover:text-red-600">HOME</a>
                <a href="/menu" class="text-sm md:text-base hover:text-red-600">MENU</a>
                <a href="/blog" class="text-sm md:text-base hover:text-red-600 font-bold">BLOG</a>
                <a href="/about" class="text-sm md:text-base hover:text-red-600">ABOUT</a>
                <a href="/contact" class="text-sm md:text-base hover:text-red-600">CONTACT</a>
            </div>
        </div>
    </div>
</nav>

    <!-- Main Image -->
    <div id="banner-section" class="container mx-auto px-4 md:px-10 mt-20 md:mt-20">
        <img class="w-full h-auto rounded-lg" src="img/blog1.png" alt="Hands holding chicken wings with 'WINGS' and 'CHEERS!' text"/>
    </div>

    <!-- Event Section -->
    <section class="container mx-auto my-8 md:my-12 px-4 md:px-10">
        <div class="flex flex-col md:flex-row gap-8">
            <div class="w-full md:w-1/3">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Event <span class="text-red-500">Combox</span></h2>
                <ul class="space-y-6">
                    <li class="flex items-start space-x-4">
                        <span class="text-red-500 font-bold text-xl">01</span>
                        <div>
                            <h3 class="font-bold">Make A Coffee With Ramunara Workshop</h3>
                            <p class="text-gray-500 text-sm">30 November 2024</p>
                        </div>
                    </li>
                    <li class="flex items-start space-x-4">
                        <span class="text-red-500 font-bold text-xl">02</span>
                        <div>
                            <h3 class="font-bold">#MerakitBouquet By Florist</h3>
                            <p class="text-gray-500 text-sm">04 Desember 2024</p>
                        </div>
                    </li>
                    <li class="flex items-start space-x-4">
                        <span class="text-red-500 font-bold text-xl">03</span>
                        <div>
                            <h3 class="font-bold">Mobile legend Tournament</h3>
                            <p class="text-gray-500 text-sm">01 January 2025</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="w-full md:w-2/3">
                <div class="border rounded-lg overflow-hidden shadow-lg">
                    <img class="w-full h-auto object-cover" src="img/blog2.png" alt="Person eating chicken wings"/>
                    <div class="p-4 md:p-6">
                        <h3 class="text-lg md:text-3xl font-bold">5TAHUNBERSAMA<span class="text-red-500">COMBOX</span></h3>
                        <p class="text-gray-500">Promo istimewa hanya untuk <span class="text-red-500">#KoncoCombox</span></p>
                        <div class="flex justify-end space-x-4 mt-4">
                            <i class="fas fa-link text-gray-500 cursor-pointer hover:text-gray-700"></i>
                            <i class="fas fa-heart text-red-500 cursor-pointer hover:text-red-600"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promo Section -->
    <section class="container mx-auto my-8 md:my-12 px-4 md:px-10">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">Promo <span class="text-red-500">Combox</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-100 p-4 rounded-lg">
                <div class="flex flex-col md:flex-row gap-4">
                    <img class="w-full md:w-1/2 h-48 object-cover rounded-lg" src="img/blog3.png" alt="Dine-in promo image"/>
                    <div class="flex flex-col justify-center">
                        <h3 class="text-red-500 font-bold text-lg">DINE-IN</h3>
                        <p class="font-bold">#5TAHUNBERSA</p>
                        <p class="font-bold">MA<span class=" text-red-500">COMBOX</span></p>
                        <p class="text-gray-500 text-sm">kode voucher <span class="font-bold">freebundling5</span></p>
                        <p class="text-gray-500 text-sm mt-8">Only Dine-In</p>
                    </div>
                </div>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg">
                <div class="flex flex-col md:flex-row gap-4">
                    <img class="w-full md:w-1/2 h-48 object-cover rounded-lg" src="img/blog4.png" alt="Take-away promo image"/>
                    <div class="flex flex-col justify-center">
                        <h3 class="text-red-500 font-bold text-lg">TAKE-AWAY</h3>
                        <p class="font-bold">SPECIAL</p>
                        <p class="font-bold text-red-500">BUNDLING</p>
                        <p class="text-gray-500 text-sm">kode voucher <span class="font-bold">superwings20</span></p>
                        <p class="text-gray-500 text-sm mt-8">Only Takeaway</p>
                    </div>
                </div>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg">
                <div class="flex flex-col md:flex-row gap-4">
                    <img class="w-full md:w-1/2 h-48 object-cover rounded-lg" src="img/blog4.png" alt="Take-away promo image"/>
                    <div class="flex flex-col justify-center">
                        <h3 class="text-red-500 font-bold text-lg">TAKE-AWAY</h3>
                        <p class="font-bold">SPECIAL</p>
                        <p class="font-bold text-red-500">BUNDLING</p>
                        <p class="text-gray-500 text-sm">kode voucher <span class="font-bold">superwings20</span></p>
                        <p class="text-gray-500 text-sm mt-8">Only Takeaway</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end items-center mt-6 space-x-4">
            <i class="fas fa-chevron-left text-gray-500 cursor-pointer hover:text-gray-700"></i>
            <span class="text-sm">1 / 2</span>
            <i class="fas fa-chevron-right text-gray-500 cursor-pointer hover:text-gray-700"></i>
        </div>

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
        <a href="https://www.instagram.com/combox.pdg/" class="text-white"><i class="fab fa-instagram"></i></a>
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

    </section>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>
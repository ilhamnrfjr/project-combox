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
        }
    </style>
</head>
<body>
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
                <a href="/" class="text-sm md:text-base hover:text-red-600 font-bold">HOME</a>
                <a href="/menu" class="text-sm md:text-base hover:text-red-600">MENU</a>
                <a href="/blog" class="text-sm md:text-base hover:text-red-600">BLOG</a>
                <a href="/about" class="text-sm md:text-base hover:text-red-600">ABOUT</a>
                <a href="/contact" class="text-sm md:text-base hover:text-red-600">CONTACT</a>
            </div>
        </div>
    </div>
</nav>

    <!-- Hero Section -->
    <div class="mx-10 mt-20 rounded-lg border hidden md:block">
        <img src="img/contact1.png" alt="Hero Image" class="w-full h-full object-cover">
    </div>

    <!-- Contact Content -->
    <div class="container mx-auto px-4 py-8 md:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Left Side - Contact Image & Info -->
            <div class="relative h-64 md:h-auto">
                <img src="img/contact2.png" alt="Combox Store" class="w-full h-full object-cover rounded-lg">
            </div>

            <!-- Right Side - Contact Details -->
            <div class="space-y-6">
                <p class="text-gray-600">
                    Combox adalah restoran Japanese Food dengan twist lokal, menghadirkan 
                    cita rasa khas Jepang yang telah disesuaikan dengan selera Indonesia
                </p>

                <div>
                    <h3 class="text-gray-500 mb-1">Phone</h3>
                    <p class="text-xl font-semibold">08118905550</p>
                </div>

                <div>
                    <h3 class="text-gray-500 mb-1">Email Address</h3>
                    <p class="text-xl font-semibold">ramunaracombox@gmail.com</p>
                </div>

                <div>
                    <h3 class="text-gray-500 mb-1">Location</h3>
                    <p class="text-xl font-semibold">
                        Jl. Belanti Raya no. 20, Desa/Kelurahan Lolong Belanti, 
                        Kec. Padang Utara, Kota Padang, Provinsi Sumatera Barat
                    </p>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="mt-12">
            <div class="bg-white rounded-lg shadow-lg p-4">
                <div class="h-96 bg-gray-100 rounded-lg">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3087097!2d100.35329!3d-0.9123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMMKwNTQnNDQuNCJTIDEwMMKwMjEnMTEuOCJF!5e0!3m2!1sen!2sid!4v1620796693703!5m2!1sen!2sid"
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        class="rounded-lg"
                    ></iframe>
                </div>
            </div>
        </div>
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

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>
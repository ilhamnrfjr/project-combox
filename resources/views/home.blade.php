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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
        }

        nav {
    padding-top: 0; /* Pastikan padding dihapus jika ada */
    margin: 0; /* Pastikan tidak ada margin */
}

#carousel-container {
    margin-top: 0; /* Pastikan margin atas carousel dihapus */
    padding-top: 0;
}

    </style>
</head>
<body class="overflow-x-hidden">
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
    

        <div id="carousel-container" class="hidden md:block mt-20">
        <div class="swiper-container  md:block">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="img/slider1.png" alt="Slide 1">
                </div>
                <div class="swiper-slide">
                    <img src="img/slider2.png" alt="Slide 2">
                </div>
                <div class="swiper-slide">
                    <img src="img/slider3.png" alt="Slide 3">
                </div>
            </div>
            
            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        </div>
        <div class="block md:hidden">
        </div>

      <!-- Support -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mx-10 mt-20 md:mt-8">
        <div class="bg-white shadow-md rounded-md p-4 text-center">
            <h3 class="text-lg font-bold">Pelayanan Ramah</h3>
            <p>Kami menyediakan pelayanan yang ramah dan profesional.</p>
        </div>
        <div class="bg-white shadow-md rounded-md p-4 text-center">
            <h3 class="text-lg font-bold">Beragam Menu</h3>
            <p>Kami menyediakan menu yang beragam dan lezat.</p>
        </div>
        <div class="bg-white shadow-md rounded-md p-4 text-center">
            <h3 class="text-lg font-bold">Area Nyaman</h3>
            <p>Nikmati kenyamanan di area kami yang sejuk dan nyaman.</p>
        </div>
      </div>

 <!-- Main Content -->
 <div class="container mx-auto px-4 py-8 md:py-16">
        <!-- Tagline -->
        <div class="text-center mb-8 md:mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">COMBOX Journey</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-sm md:text-base px-4">
              #KoncoCombox
            </p>
        </div>

        <!-- Timeline -->
        <div class="relative max-w-3xl mx-auto">
            <div class="absolute left-4 md:left-1/2 top-0 bottom-0 w-0.5 bg-red-600 md:transform md:-translate-x-1/2"></div>
            
            <!-- Timeline Items - Mobile: vertical, Desktop: horizontal -->
            <div class="space-y-8 md:space-y-16">
                <!-- Timeline Item 1 -->
                <div class="relative pl-12 md:pl-0">
                    <div class="md:flex md:items-center">
                        <div class="md:w-1/2 md:pr-8 md:text-right">
                            <img src="img/photo1.png" alt="Combox Store" class="w-full md:w-64 md:ml-auto rounded-lg shadow-lg mb-4">
                            <h3 class="text-xl font-bold text-red-600 mt-4">Combox Didirikan</h3>
                            <p class="text-gray-600 text-sm md:text-base">Combox digagas untuk memberikan Japanese Food di Giri Haji Agja Salam dengan skala kecil</p>
                        </div>
                        <div class="absolute left-0 md:left-1/2 top-0 md:top-1/2 transform md:-translate-x-1/2 md:-translate-y-1/2 w-8 h-8 bg-red-600 rounded-full border-4 border-white"></div>
                        <div class="mt-4 md:mt-0 md:w-1/2 md:pl-8">
                            <div class="text-red-600 font-bold">Nov<br>2020</div>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="relative pl-12 md:pl-0">
                    <div class="md:flex md:items-center">
                        <div class="md:w-1/2 md:pr-8 md:text-right">
                            <div class="text-red-600 font-bold">Jan 2020 -<br>Jan 2022</div>
                        </div>
                        <div class="absolute left-0 md:left-1/2 top-0 md:top-1/2 transform md:-translate-x-1/2 md:-translate-y-1/2 w-8 h-8 bg-red-600 rounded-full border-4 border-white"></div>
                        <div class="mt-4 md:mt-0 md:w-1/2 md:pl-8">
                            <img src="img/photo2.png" alt="Combox Expansion" class="w-full md:w-64 rounded-lg shadow-lg mb-4">
                            <h3 class="text-xl font-bold text-red-600 mt-4">Memperluas Combox</h3>
                            <p class="text-gray-600 text-sm md:text-base">Combox berkembang yang sebelumnya hanya stand kecil menjadi container box dan bisa drive-in</p>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 3 -->
                <div class="relative pl-12 md:pl-0">
                    <div class="md:flex md:items-center">
                        <div class="md:w-1/2 md:pr-8 md:text-right">
                            <img src="img/photo3.png" alt="Coffee Shop" class="w-full md:w-64 md:ml-auto rounded-lg shadow-lg mb-4">
                            <h3 class="text-xl font-bold text-red-600 mt-4">Kerja Sama dengan Coffee Shop Ramunara</h3>
                            <p class="text-gray-600 text-sm md:text-base">Pada tahun 2022, Combox menjalin kerja sama dengan coffee shop bernama Ramunara hingga saat ini</p>
                        </div>
                        <div class="absolute left-0 md:left-1/2 top-0 md:top-1/2 transform md:-translate-x-1/2 md:-translate-y-1/2 w-8 h-8 bg-red-600 rounded-full border-4 border-white"></div>
                        <div class="mt-4 md:mt-0 md:w-1/2 md:pl-8">
                            <div class="text-red-600 font-bold">Jan 2022 -<br>Hingga saat ini</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


   <!-- Discount Section -->
   <section class="py-12">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
      <div class="md:w-1/2">
        <img src="img/diskon.png" alt="Students enjoying discount" class="w-full h-auto object-cover rounded-l-2xl" width="300" height="400"/>
      </div>
      <div class="md:w-1/2 md:pl-8 mt-8 md:mt-0">
        <h2 class="text-4xl font-bold">Diskon 10% All Item Khusus Pelajar</h2>
        <ul class="list-disc list-inside mt-10 text-xl text-gray-600">
          <li>Berlaku untuk hari Senin-Jumat pukul 15:00-18:00</li>
          <li>Promo dapat digunakan dengan menunjukkan kartu pelajar</li>
          <li>Diskon tidak dapat digabungkan dengan promo lainnya</li>
        </ul>
        <p class="mt-8 md:mt-20 text-xl text-gray-600">
          <i class="far fa-calendar-alt"></i>
          25 Nov 2024
        </p> 
      </div>
    </div>
  </section>

  <!-- Best Seller Menu Section -->
<h2 class="text-4xl font-bold text-center">Best <span class="text-red-600">Seller</span> Menu</h2>
<section class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($menus as $menu) <!-- Pastikan nama variabel sesuai dengan controller -->
    <div class="w-full bg-white shadow-md rounded-md overflow-hidden">
        <div class="p-4 object-center">
            <h3 class="text-lg font-bold text-center p-4">{{ $menu->name }}</h3>
            <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" class="w-full object-cover object-center" width="383" height="446"/>
        </div>
        <div class="p-4 flex justify-center">
            <div class="mt-4 bg-red-600 text-white px-4 py-2 rounded-full">
                Rp. {{ number_format($menu->price, 0, ',', '.') }}
            </div>
        </div>
    </div>
    @endforeach
</section>



        <!-- Map Section -->
        <div class="mt-12">
    <h2 class="text-4xl font-bold text-center">Temui <span class="text-red-600">Kita</span> Disini</h2>
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
        <img src="img/gojek.png" alt="Gojek logo" class="mx-auto" width="90" height="40"/>
      </div>
      <div class="h-px w-3/4 mx-auto bg-gray-400 my-4"></div>
      <p class="mt-8 text-xs">© 2024 Combox. All Rights Reserved.</p>
      <div class="mt-4 flex justify-center space-x-4">
        <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/combox.pdg?igsh=YWgyOTRmeDExenRs" class="text-white"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
   <!-- Footer Section -->
    <script src="https m-10 ://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const swiper = new Swiper('.swiper-container', {
            loop: true, // membuat slide menjadi loop
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 3000, // waktu jeda untuk autoplay (dalam milidetik)
                disableOnInteraction: false, // autoplay tidak berhenti saat interaksi
            },
        });
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
</body>
</html>

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
                    <a href="/" class="text-sm md:text-base hover:text-red-600 ">HOME</a>
                    <a href="/menu" class="text-sm md:text-base hover:text-red-600">MENU</a>
                    <a href="/blog" class="text-sm md:text-base hover:text-red-600">BLOG</a>
                    <a href="/about" class="text-sm md:text-base hover:text-red-600 font-bold">ABOUT</a>
                    <a href="/contact" class="text-sm md:text-base hover:text-red-600">CONTACT</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div id="banner-section" class="relative mx-10 mt-20 rounded-lg border hidden md:block">
        <img src="img/about1.png" alt="Hero Image" class="w-full h-full object-cover ">
        <div class="absolute inset-0 bg-black bg-opacity-40 rounded-lg border hidden md:block">
            <div class="container mx-auto px-4 h-full flex items-center">
                <h1 class="text-3xl md:text-5xl font-bold text-white">Perjalanan <span class="text-red-600">COMBOX</span></h1>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 md:py-16">
        <!-- Tagline -->
        <div class="text-center mb-8 md:mb-16">
            <h2 class="text-2xl md:text-4xl font-bold mb-4">Food is not just about taste,<br>it's about <span class="text-red-600">memories</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-sm md:text-base px-4">
                Combox didirikan oleh Harya dan keluarga saat mengisi waktu luang Covid-19. 
                Terinspirasi dari masakan Japanese Food yang dibawa oleh kakaknya, ia memulai usaha 
                dengan membuka stand di pinggir jalan. Pada tahun 2022, Combox berkembang pesat 
                dan menjadi kerjasama dengan coffee shop Ramunara, yang berlangsung hingga kini
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
                            <img src="img/photo1.png" alt="Combox Store" class="w-full md:w-64 md:ml-auto rounded-lg mb-4">
                            <h3 class="text-xl font-bold text-red-600 mt-4">Combox Didirikan</h3>
                            <div class="text-red-600 font-bold block md:hidden">Nov 2020</div>
                            <p class="text-gray-600 text-sm md:text-base text-justify">Combox didirikan pada November 2020 sebagai restoran yang menyajikan hidangan  Japanese Food. Di Gor Haji Agus Salim dengan stand kecil.</p>
                        </div>
                        <div class="absolute left-0 md:left-1/2 top-0 md:top-1/2 transform md:-translate-x-1/2 md:-translate-y-1/2 w-8 h-8 bg-red-600 rounded-full border-4 border-white"></div>
                        <div class="mt-4 md:mt-0 md:w-1/2 md:pl-8">
                            <div class="text-red-600 font-bold hidden md:block">Nov<br>2020</div>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="relative pl-12 md:pl-0">
                    <div class="md:flex md:items-center">
                        <div class="md:w-1/2 md:pr-8 md:text-right">
                            <div class="text-red-600 font-bold hidden md:block">Jan 2020 -<br>Jan 2022</div>
                        </div>
                        <div class="absolute left-0 md:left-1/2 top-0 md:top-1/2 transform md:-translate-x-1/2 md:-translate-y-1/2 w-8 h-8 bg-red-600 rounded-full border-4 border-white"></div>
                        <div class="mt-4 md:mt-0 md:w-1/2 md:pl-8">
                            <img src="img/photo2.png" alt="Combox Expansion" class="w-full md:w-64 rounded-lg mb-4">
                            <h3 class="text-xl font-bold text-red-600 mt-4">Memperluas Combox</h3>
                            <div class="text-red-600 font-bold block md:hidden">Jan 2020 - Jan 2022</div>
                            <p class="text-gray-600 text-sm md:text-base">Combox berkembang yang sebelumnya hanya stand kecil menjadi container box dan bisa drive-in</p>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 3 -->
                <div class="relative pl-12 md:pl-0">
                    <div class="md:flex md:items-center">
                        <div class="md:w-1/2 md:pr-8 md:text-right">
                            <img src="img/photo3.png" alt="Coffee Shop" class="w-full md:w-64 md:ml-auto rounded-lg mb-4">
                            <h3 class="text-xl font-bold text-red-600 mt-4">Kerja Sama dengan Coffee Shop Ramunara</h3>
                            <div class="text-red-600 font-bold block md:hidden">Jan 2022 - Hingga saat ini</div>
                            <p class="text-gray-600 text-sm md:text-base">Pada tahun 2022, Combox menjalin kerja sama dengan coffee shop bernama Ramunara hingga saat ini</p>
                        </div>
                        <div class="absolute left-0 md:left-1/2 top-0 md:top-1/2 transform md:-translate-x-1/2 md:-translate-y-1/2 w-8 h-8 bg-red-600 rounded-full border-4 border-white"></div>
                        <div class="mt-4 md:mt-0 md:w-1/2 md:pl-8">
                            <div class="text-red-600 font-bold hidden md:block">Jan 2022 -<br>Hingga saat ini</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vision & Mission -->
        <div class="py-8 md:py-16">
            <div class="text-center mb-8 md:mb-16">
                <h2 class="text-2xl md:text-4xl font-bold">VISI & MISI<span class="text-red-600">COMBOX</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8">
                <div class="p-4 md:p-6 bg-white rounded-lg shadow-lg">
                    <div class="text-red-600 text-lg md:text-xl font-bold mb-2">CIPTAKAN</div>
                    <p class="text-gray-600 text-sm md:text-base">Ikuti standar yang lebih tinggi</p>
                </div>
                <div class="p-4 md:p-6 bg-white rounded-lg shadow-lg">
                    <div class="text-red-600 text-lg md:text-xl font-bold mb-2">OPTIMALKAN</div>
                    <p class="text-gray-600 text-sm md:text-base">Kualitas menu yang disajikan</p>
                </div>
                <div class="p-4 md:p-6 bg-white rounded-lg shadow-lg">
                    <div class="text-red-600 text-lg md:text-xl font-bold mb-2">MENJADI</div>
                    <p class="text-gray-600 text-sm md:text-base">Jasa favorit pada sharing barang</p>
                </div>
                <div class="p-4 md:p-6 bg-white rounded-lg shadow-lg">
                    <div class="text-red-600 text-lg md:text-xl font-bold mb-2">BERKOMITMEN</div>
                    <p class="text-gray-600 text-sm md:text-base">Dengan pelayanan outlet</p>
                </div>
                <div class="p-4 md:p-6 bg-white rounded-lg shadow-lg">
                    <div class="text-red-600 text-lg md:text-xl font-bold mb-2">ORIENTASI</div>
                    <p class="text-gray-600 text-sm md:text-base">Kepuasan dan pelayanan pelanggan</p>
                </div>
                <div class="p-4 md:p-6 bg-white rounded-lg shadow-lg">
                    <div class="text-red-600 text-lg md:text-xl font-bold mb-2">XPANSI</div>
                    <p class="text-gray-600 text-sm md:text-base">Usaha bisa mulai dilayani di dunia kuliner</p>
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

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>

<body class="overflow-hidden">
    <section class="bg-gray-50 h-screen flex items-center justify-center">
        <!-- login container -->
        <div class="flex flex-col md:flex-row w-full h-full md:max-w-4xl p-5 items-center">
            <!-- form -->
            <div class="md:w-1/2 w-full px-8 md:px-16">
                <div class="flex items-start">
                    <img src="img/logo.jpg" alt="Logo" class="w-20 mr-4">
                </div>               
                <h2 class="font-bold text-2xl text-[#000000]">Halo Admin Combox!</h2>
                <p class="text-xs mt-4 text-[#000000]">Let’s start the day with smile, and please our customers!.</p>

                <!-- Tampilkan error umum untuk login -->
                @if ($errors->has('loginError'))
                    <div class="bg-red-500 text-white text-sm px-4 py-2 rounded mb-4">
                        {{ $errors->first('loginError') }}
                    </div>
                @endif

                <form action="{{ route('authenticated') }}" method="POST" class="flex flex-col gap-4">
                    @csrf
                    <!-- Input username -->
                    <input class="p-2 mt-8 rounded-xl border" type="text" name="username" placeholder="Username" value="{{ old('username') }}">
                    @error('username')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror

                    <!-- Input password -->
                    <div class="relative">
                        <input id="password" class="p-2 rounded-xl border w-full" type="password" name="password" placeholder="Password">
                        <svg id="togglePassword" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray"
                            class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2 cursor-pointer" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg>
                    </div>
                    @error('password')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror

                    <!-- Button login -->
                    <button class="bg-[#841818] rounded-xl text-white py-2 hover:scale-105 duration-300">Login</button>
                </form>
            </div>

            <!-- image -->
            <div class="md:block hidden md:w-1/2 w-full h-full">
                <img class="rounded-2xl object-cover w-full h-full" src="img/login.jpg">
            </div>
        </div>
    </section>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            // Toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Toggle the eye icon
            this.classList.toggle('bi-eye');
            this.classList.toggle('bi-eye-slash');
        });
    </script>
</body>

</html>

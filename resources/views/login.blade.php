<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  @vite('resources/css/app.css') <!-- Pastikan file CSS sudah terpasang -->
</head>

<body class="bg-cover bg-no-repeat" style="background-image: url('{{ asset('storage/img/bg-login.png') }}'); background-size: 100% 100%; background-position: center; background-repeat: no-repeat;">
    <div class="container mx-auto flex items-center justify-center min-h-screen">
        <div class="bg-white shadow-lg rounded-lg p-8 md:p-10 w-full md:max-w-xl">
            <h2 class="text-3xl font-semibold text-gray-800 text-center mb-6">Halo,</h2>
            <p class="font-semibold text-gray-800 text-center mb-6">Silakan Login untuk melanjutkan</p>
            <form action="{{ route('login') }}" method="POST" novalidate>
                @csrf

                <div class="grid grid-cols-1 gap-6">
                    <x-input 
                        label="Email" 
                        id="email" 
                        name="email" 
                        type="email" 
                        placeholder="Masukkan Email" 
                        required 
                    />

                    <x-input 
                        label="Kata Sandi" 
                        id="password" 
                        name="password" 
                        type="password" 
                        placeholder="Masukkan Kata Sandi" 
                        required 
                    />
                </div>

                <div class="flex items-center justify-center mt-6">
                    <x-button :text="'Login'" :type="'submit'" />
                </div>

                <p class="text-sm text-gray-600 text-center mt-4">
                    Belum punya akun? 
                    <a class="text-primary hover:text-secondary font-semibold" href="/register">Daftar</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>
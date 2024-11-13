<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Akun</title>
  @vite('resources/css/app.css') 
</head>

<body class="bg-cover bg-no-repeat" style="background-image: url('{{ asset('storage/img/bg-img.png') }}'); background-size: 100% 100%; background-position: center; background-repeat: no-repeat;">
    <div class="container mx-auto flex items-center justify-center min-h-screen">
        <div class="bg-white shadow-lg rounded-lg p-8 md:p-10 w-full md:max-w-xl">
            <h2 class="text-3xl font-semibold text-gray-800 text-center mb-6">Daftar Akun</h2>
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <x-input 
                        label="Nama Lengkap" 
                        id="nama_lengkap" 
                        name="nama_lengkap" 
                        type="text" 
                        placeholder="Masukkan Nama Lengkap" 
                        required 
                    />

                    <x-input 
                        label="Email" 
                        id="email" 
                        name="email" 
                        type="email" 
                        placeholder="Masukkan Email" 
                        required 
                    />

                    <x-input 
                        label="No HP" 
                        id="no_hp" 
                        name="no_hp" 
                        type="text" 
                        placeholder="Masukkan No HP" 
                        inputmode="numeric" 
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                        required 
                    />

                    <x-input 
                        label="Usia" 
                        id="usia" 
                        name="usia" 
                        type="text" 
                        placeholder="Masukkan Usia" 
                        inputmode="numeric" 
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"
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

                    <div>
                        <label for="role" class="block text-gray-700 text-sm font-medium mb-1">Role</label>
                        <select 
                            id="role" 
                            name="role" 
                            class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-primary"
                            required
                        >
                            <option value="" disabled selected>Pilih Role</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                </div>

                <div class="flex items-center justify-center mt-6">
                    <x-button :text="'Daftar'" :type="'submit'" />
                </div>

                <p class="text-sm text-gray-600 text-center mt-4">
                    Sudah memiliki akun? 
                    <a class="text-primary hover:text-secondary font-semibold" href="/login">Login</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>

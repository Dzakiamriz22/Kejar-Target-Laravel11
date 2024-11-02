<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Akun</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-cover bg-no-repeat" style="background-image: url('{{ asset('storage/img/bg-img.png') }}');">
    <div class="container mx-auto flex items-center justify-center min-h-screen">
        <div class="bg-white shadow-lg rounded-lg p-8 md:p-10 w-full md:max-w-xl">
            <h2 class="text-3xl font-semibold text-gray-800 text-center mb-6">Daftar Akun</h2>
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-1" for="nama_lengkap">Nama Lengkap</label>
                        <input
                            class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-primary"
                            id="nama_lengkap"
                            name="nama_lengkap"
                            type="text"
                            placeholder="Masukkan Nama Lengkap"
                            required
                        />
                    </div>

                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-1" for="email">Email</label>
                        <input
                            class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-primary"
                            id="email"
                            name="email"
                            type="email"
                            placeholder="Masukkan Email"
                            required
                        />
                    </div>

                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-1" for="no_hp">No HP</label>
                        <input
                            class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-primary"
                            id="no_hp"
                            name="no_hp"
                            type="text"
                            placeholder="Masukkan No HP"
                            inputmode="numeric"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                            required
                        />
                    </div>

                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-1" for="usia">Usia</label>
                        <input
                            class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-primary"
                            id="usia"
                            name="usia"
                            type="text"
                            placeholder="Masukkan Usia"
                            inputmode="numeric" 
                            oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                            required
                        />
                    </div>

                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-1" for="password">Kata Sandi</label>
                        <input
                            class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-primary"
                            id="password"
                            name="password"
                            type="password"
                            placeholder="Masukkan Kata Sandi"
                            required
                        />
                    </div>

                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-1" for="role">Role</label>
                        <select
                            class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-primary"
                            id="role"
                            name="role"
                            required
                        >
                            <option value="" disabled selected>Pilih Role</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                </div>

                <div class="flex items-center justify-center mt-6">
                    <button
                        class="w-full bg-primary hover:bg-secondary text-white font-bold py-2 px-4 rounded transition duration-300"
                        type="submit"
                    >
                        Daftar
                    </button>
                </div>

                <p class="text-sm text-gray-600 text-center mt-4">
                    Sudah memiliki akun? 
                    <a class="text-primary hover:text-secondary font-semibold" href="/">Login</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>
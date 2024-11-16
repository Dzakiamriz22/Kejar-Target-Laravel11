<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kejar Target - Admin Panel</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    @include('components.header')

    <div class="flex min-h-screen">
        @include('components.sidebar-admin')

        <main class="flex-1 p-6 ml-48">
            @include('components.welcome')

            <div class="mb-6 flex justify-between items-center">
                <p class="text-xl font-semibold text-primary">Data Beasiswa</p>
                <a href="{{ route('tambahbeasiswa') }}" class="bg-primary text-white py-2 px-4 rounded hover:bg-primary-dark">+ Tambah Data Beasiswa</a>
            </div>

            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th class="py-3 px-4 text-left">No</th>
                            <th class="py-3 px-4 text-left">Nama Beasiswa</th>
                            <th class="py-3 px-4 text-left">Batas Pendaftaran</th>
                            <th class="py-3 px-4 text-left">Link Pendaftaran</th>
                            <th class="py-3 px-4 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-3 px-4">1</td>
                            <td class="py-3 px-4">Beasiswa Djarum Foundation</td>
                            <td class="py-3 px-4">2024-06-01</td>
                            <td class="py-3 px-4">
                                <a href="https://www.beasiswa_djarum.com" class="text-blue-500" target="_blank" rel="noopener noreferrer">www.beasiswa_djarum.com</a>
                            </td>
                            <td class="py-3 px-4">
                                <button class="bg-yellow-500 text-white py-1 px-3 rounded hover:bg-yellow-600">Edit</button>
                                <button class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600">Hapus</button>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 px-4">2</td>
                            <td class="py-3 px-4">Beasiswa Bidikmisi</td>
                            <td class="py-3 px-4">2024-08-15</td>
                            <td class="py-3 px-4">
                                <a href="https://www.bidikmisi.com" class="text-blue-500" target="_blank" rel="noopener noreferrer">www.bidikmisi.com</a>
                            </td>
                            <td class="py-3 px-4">
                                <button class="bg-yellow-500 text-white py-1 px-3 rounded hover:bg-yellow-600">Edit</button>
                                <button class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Beasiswa</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-roboto leading-normal tracking-normal">

    @include('components.header')

    <div class="flex min-h-screen">
        @include('components.sidebar-admin')

        <main class="flex-1 p-6 ml-48">
            <div class="p-8 bg-white rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold mb-6 text-primary">Tambah Beasiswa</h2>

                <form id="beasiswaForm" action="#" method="POST" enctype="multipart/form-data">
                    <div class="grid grid-cols-4 gap-6">
                        <div class="col-span-2">
                            <div class="mb-4">
                                <label for="namaBeasiswa" class="block text-gray-700 font-medium">Nama Beasiswa:</label>
                                <input type="text" id="namaBeasiswa" name="namaBeasiswa" 
                                    class="w-full border-2 border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition duration-300 ease-in-out" required>
                            </div>
                            <div class="mb-4">
                                <label for="batasPendaftaran" class="block text-gray-700 font-medium">Batas Pendaftaran:</label>
                                <input type="date" id="batasPendaftaran" name="batasPendaftaran" 
                                    class="w-full border-2 border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition duration-300 ease-in-out" required>
                            </div>
                            <div class="mb-4">
                                <label for="linkPendaftaran" class="block text-gray-700 font-medium">Link Pendaftaran:</label>
                                <input type="url" id="linkPendaftaran" name="linkPendaftaran" 
                                    class="w-full border-2 border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition duration-300 ease-in-out" required>
                            </div>
                        </div>

                        <div class="col-span-2">
                            <div class="mb-4">
                                <label for="deskripsi" class="block text-gray-700 font-medium">Deskripsi:</label>
                                <textarea id="deskripsi" name="deskripsi" 
                                    class="w-full border-2 border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition duration-300 ease-in-out" required></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="fotoBeasiswa" class="block text-gray-700 font-medium">Foto Beasiswa:</label>
                                <input type="file" id="fotoBeasiswa" name="fotoBeasiswa" 
                                    class="w-full border-2 border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition duration-300 ease-in-out" 
                                    accept=".jpg, .jpeg, .png" required>
                                <small class="text-gray-500 mt-1 block">Pilih gambar (JPEG/JPG/PNG)</small>
                                <p id="error-message" class="text-red-500 mt-2 hidden">File harus berupa gambar (JPEG/JPG/PNG).</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end space-x-4 mt-6">
                        <button type="button" 
                            class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 transition duration-200 ease-in-out">
                            Kembali
                        </button>
                        <button type="submit" 
                            class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 transition duration-200 ease-in-out">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>

</body>

</html>

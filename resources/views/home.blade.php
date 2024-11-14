<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kejar Target</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-roboto leading-normal tracking-normal">

    <div class="flex min-h-screen flex-col">

        <header class="bg-white text-primary p-4 shadow-xl sticky top-0 z-50">
            <div class="flex items-center justify-between px-4">
                <img src="path/to/your/logo.png" alt="Kejar Target Logo" class="h-8">
            </div>
        </header>

        <div class="flex flex-1 bg-gray-100">

            <aside class="w-48 bg-primary text-white flex flex-col p-6 fixed top-16 left-0 h-screen">
                <nav class="flex flex-col flex-grow">
                    <ul>
                        <li class="mb-4">
                            <a href="#" class="block py-2 px-3 rounded border-b-4 border-btn">
                                Beranda
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <main class="flex-1 ml-56 p-6">

                <section class="bg-primary text-white p-8 mb-6 rounded-lg shadow-md">
                    <p class="text-2xl font-bold text-center mb-2">Welcome fufufafa</p>
                    <p class="text-center text-lg font-semibold">Kejar Beasiswa, Raih Target Masa Depanmu!</p>
                </section>

                <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <h2 class="text-xl font-semibold text-primary">BEASISWA DJARUM FOUNDATION</h2>
                        <p class="text-gray-600 mt-2">Batas Pendaftaran: 20-08-2024</p>
                        <button class="mt-4 bg-primary text-white py-2 px-4 rounded-lg hover:bg-primary_dark transition-colors duration-200">
                            Detail
                        </button>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <h2 class="text-xl font-semibold text-primary">BEASISWA TEKNIK KOMPUTER</h2>
                        <p class="text-gray-600 mt-2">Batas Pendaftaran: 28-10-2024</p>
                        <button class="mt-4 bg-primary text-white py-2 px-4 rounded-lg hover:bg-primary_dark transition-colors duration-200">
                            Detail
                        </button>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <h2 class="text-xl font-semibold text-primary">BEASISWA TEKNIK KOMPUTER</h2>
                        <p class="text-gray-600 mt-2">Batas Pendaftaran: 28-10-2024</p>
                        <button class="mt-4 bg-primary text-white py-2 px-4 rounded-lg hover:bg-primary_dark transition-colors duration-200">
                            Detail
                        </button>
                    </div>
                </section>
            </main>
        </div>

        <div class="fixed bottom-4 left-4">
            <button class="bg-white text-primary py-2 px-4 rounded-full shadow-md hover:bg-gray-100 transition-colors duration-200">
                Logout
            </button>
        </div>

    </div>

</body>

</html>

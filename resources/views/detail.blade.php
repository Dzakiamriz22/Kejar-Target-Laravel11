<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kejar Target - Detail Page</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-roboto leading-normal tracking-normal">

    <div class="flex min-h-screen flex-col">
        
        @include('components.header')

        <div class="flex flex-1 bg-gray-100">
            
            @include('components.sidebar')

            <main class="flex-1 ml-56 p-6">
                <section class="bg-white p-8 rounded-lg shadow-md">
                    <h1 class="text-2xl font-bold text-primary mb-6">BEASISWA DJARUM FOUNDATION</h1>
                    
                    <div class="flex flex-col md:flex-row items-center md:items-start space-y-6 md:space-y-0 md:space-x-8">
                        
                        <div class="flex-shrink-0 w-full md:w-1/3">
                            <img src="path/to/logo.png" alt="Djarum Logo" class="w-full h-auto object-contain">
                        </div>
                        
                        <div class="w-full md:w-2/3">
                            <h2 class="text-lg font-semibold text-primary mb-2">Deskripsi:</h2>
                            <p class="text-gray-700 mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                            <a href="link/to/beasiswa" class="inline-block text-primary font-medium text-base py-2 px-4 border border-primary rounded-lg hover:bg-primary hover:text-white transition-all duration-300 mb-4">
                                Kunjungi Link Beasiswa
                            </a>
                            <button class="bg-primary text-white text-base py-2 px-4 rounded-lg hover:bg-primary_dark transition-colors duration-200">
                                Kembali
                            </button>
                        </div>
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

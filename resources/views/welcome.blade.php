<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kejar Target</title>
  @vite('resources/css/app.css')
</head>

<body class="font-roboto">
  <div class="relative flex items-center justify-center h-screen bg-cover bg-no-repeat" style="background-image: url('{{ asset('storage/img/bg-img.png') }}');">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-gray-800 bg-opacity-75 text-white p-10 rounded-lg shadow-2xl">
      <h1 class="text-5xl font-bold mb-4 text-center">Kejar Target</h1>
      <p class="text-md font-normal mb-6 text-center">
        Situs pencarian Beasiswa untuk mewujudkan impian Anda menjadi kaya Langkah
        Pertama Menuju Masa Depan Cerah. Jelajahi Beasiswa anda di Kejar Target!
      </p>
      <div class="flex justify-center">
        <a href="{{ route('register') }}" class="bg-primary hover:bg-secondary text-white font-bold py-3 px-6 rounded-md focus:outline-none focus:shadow-outline">
          More Info
        </a>        
      </div>
    </div>
  </div>
</body>
</html>
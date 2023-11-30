<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel = "icon" href = "{{ asset('assets/logo.png') }}">
  <script src="https://kit.fontawesome.com/99c2f1d2d2.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Sahitya&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Kadwa&display=swap" rel="stylesheet" />
  @vite('resources/css/app.css')
  <title>Gallery</title>
</head>

<body>
  {{-- NAVBAR --}}
  @include('user.navbar.navbar')

  {{-- CONTENT --}}
  <div class="flex justify-center mb-6 sm:mb-6 mt-15 md:mb-6 lg:mb-0 xl:mb-0 text-center mt-14">
    <div class="max-w-[700px] text-center">
      <h2 class="subtitle mb-6 text-center text-4xl font-bold" style="font-family: Sahitya">
        Our Gallery
      </h2>
    </div>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 px-5 py-2 lg:px-32 lg:pt-12">
    @foreach ($galleries as $gallery)
      <div class="w-full p-2 md:p-2 sm:mt-2 md:mt-2 lg:mt-2 grid">
        <img
          class="block h-full w-full rounded-lg object-cover object-center hover:scale-105 transition-all duration-150"
          src="{{ $gallery->image }}" alt="">
        <p class="text-base sm:mt-1 md:mt-1 font-semibold mt-1">{{ $gallery->imageName }}</p>
      </div>
    @endforeach
  </div>

  {{-- FOOTER --}}
  @include('user.navbar.footer')

  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>

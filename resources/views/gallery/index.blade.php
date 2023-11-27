<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/99c2f1d2d2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Sahitya&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Kadwa&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>Gallery</title>
</head>
<body>
    {{-- NAVBAR --}}
    @include('navbar.navbar')

    {{-- CONTENT --}}
    <div class="flex justify-center mb-6 sm:mb-6 mt-15 md:mb-6 lg:mb-0 xl:mb-0 text-center mt-14">
        <div class="max-w-[700px] text-center">
            <h2 class="subtitle mb-6 text-center text-4xl font-bold" style="font-family: Sahitya">
                Our Gallery
            </h2>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 px-5 py-2 lg:px-32 lg:pt-12">
        {{-- ITEM 1 --}}
        <div class="w-full p-2 md:p-2 sm:mt-2 md:mt-2 lg:mt-2 grid">
            <img class="block h-full w-full rounded-lg object-cover object-center hover:scale-105 transition-all duration-150" src="assets/gallery_1.png" alt="">
            <p class="text-base sm:mt-1 md:mt-1 font-semibold mt-1">Lounge Room</p>
        </div>
        {{-- ITEM 2 --}}
        <div class="w-full p-2 md:p-2 sm:mt-2 md:mt-2 lg:mt-2 grid">
            <img class="block h-full w-full rounded-lg object-cover object-center hover:scale-105 transition-all duration-150" src="assets/gallery_2.png" alt="">
            <p class="text-base sm:mt-1 md:mt-1 font-semibold mt-1">Interior Design</p>
        </div>
        {{-- ITEM 3 --}}
        <div class="w-full p-2 md:p-2 sm:mt-2 md:mt-2 lg:mt-2 grid">
            <img class="block h-full w-full rounded-lg object-cover object-center hover:scale-105 transition-all duration-150" src="assets/gallery_3.png" alt="">
            <p class="text-base sm:mt-1 md:mt-1 font-semibold mt-1">Ballroom</p>
        </div>
        {{-- ITEM 4 --}}
        <div class="w-full p-2 md:p-2 sm:mt-2 md:mt-2 lg:mt-2 grid">
            <img class="block h-full w-full rounded-lg object-cover object-center hover:scale-105 transition-all duration-150" src="assets/gallery_4.png" alt="">
            <p class="text-base sm:mt-1 md:mt-1 font-semibold mt-1">Beach Cafe</p>
        </div>
        <div class="w-full p-2 md:p-2 sm:mt-2 md:mt-2 lg:mt-2 grid">
            <img class="block h-full w-full rounded-lg object-cover object-center hover:scale-105 transition-all duration-150" src="assets/gallery_5.png" alt="">
            <p class="text-base sm:mt-1 md:mt-1 font-semibold mt-1">Swimming Pool</p>
        </div>
        <div class="w-full p-2 md:p-2 sm:mt-2 md:mt-2 lg:mt-2 grid">
            <img class="block h-full w-full rounded-lg object-cover object-center hover:scale-105 transition-all duration-150" src="assets/gallery_6.png" alt="">
            <p class="text-base sm:mt-1 md:mt-1 font-semibold mt-1">Exterior Design</p>
        </div>
        <div class="w-full p-2 md:p-2 sm:mt-2 md:mt-2 lg:mt-2 grid">
            <img class="block h-full w-full rounded-lg object-cover object-center hover:scale-105 transition-all duration-150" src="assets/gallery_7.png" alt="">
            <p class="text-base sm:mt-1 md:mt-1 font-semibold mt-1">Receptionist</p>
        </div>
        <div class="w-full p-2 md:p-2 sm:mt-2 md:mt-2 lg:mt-2 grid">
            <img class="block h-full w-full rounded-lg object-cover object-center hover:scale-105 transition-all duration-150" src="assets/gallery_8.png" alt="">
            <p class="text-base sm:mt-1 md:mt-1 font-semibold mt-1">Billiard Lounge</p>
        </div>
        <div class="w-full p-2 md:p-2 sm:mt-2 md:mt-2 lg:mt-2 grid">
            <img class="block h-full w-full rounded-lg object-cover object-center hover:scale-105 transition-all duration-150" src="assets/gallery_9.png" alt="">
            <p class="text-base sm:mt-1 md:mt-1 font-semibold mt-1">Gym and Fitness Center</p>
        </div>
        <div class="w-full p-2 md:p-2 sm:mt-2 md:mt-2 lg:mt-2 grid">
            <img class="block h-full w-full rounded-lg object-cover object-center hover:scale-105 transition-all duration-150" src="assets/king_room.png" alt="">
            <p class="text-base sm:mt-1 md:mt-1 font-semibold mt-1">King Size Room</p>
        </div>
        <div class="w-full p-2 md:p-2 sm:mt-2 md:mt-2 lg:mt-2 grid">
            <img class="block h-full w-full rounded-lg object-cover object-center hover:scale-105 transition-all duration-150" src="assets/queen_room.png" alt="">
            <p class="text-base sm:mt-1 md:mt-1 font-semibold mt-1">Queen Size Room</p>
        </div>
        <div class="w-full p-2 md:p-2 sm:mt-2 md:mt-2 lg:mt-2 grid">
            <img class="block h-full w-full rounded-lg object-cover object-center hover:scale-105 transition-all duration-150" src="assets/standard_room.png" alt="">
            <p class="text-base sm:mt-1 md:mt-1 font-semibold mt-1">Standard Room</p>
        </div>
    </div>

    {{-- FOOTER --}}
    @include('navbar.footer')

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
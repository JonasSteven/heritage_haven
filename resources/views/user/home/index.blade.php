@php
  function currency($price)
  {
      $convert_result = number_format($price, 0, ',', '.');
      echo $convert_result;
  }
@endphp

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
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Sahitya&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Kadwa&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  @vite('resources/css/app.css')
  <title>Home</title>
</head>

<body>
  {{-- NAVBAR --}}
  @include('user.navbar.navbar')

  {{-- HOME --}}
  <div class="home" id="home">
    <div class="swiper home-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide slide" style="background: url(assets/home_bg.png) no-repeat;">
          <div class="content">
            <h3>Heritage Haven</h3>
            <p>Where the past meets the present to create an unforgettable experience for our guests. Situated in the
              heart of a charming historic town, Heritage Heaven Hotel is a sanctuary of luxury and elegance that pays
              homage to the rich heritage and culture of our surroundings.</p>
            <a href="#room" class="btn">Explore</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background: url(assets/carousel_king_room.png) no-repeat;">
          <div class="content">
            <h3>Heritage Haven</h3>
            <p>Where the past meets the present to create an unforgettable experience for our guests. Situated in the
              heart of a charming historic town, Heritage Heaven Hotel is a sanctuary of luxury and elegance that pays
              homage to the rich heritage and culture of our surroundings.</p>
            <a href="#room" class="btn">Explore</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background: url(assets/carousel_queen_room.png) no-repeat;">
          <div class="content">
            <h3>Heritage Haven</h3>
            <p>Where the past meets the present to create an unforgettable experience for our guests. Situated in the
              heart of a charming historic town, Heritage Heaven Hotel is a sanctuary of luxury and elegance that pays
              homage to the rich heritage and culture of our surroundings.</p>
            <a href="#room" class="btn">Explore</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background: url(assets/carousel_standard_room.png) no-repeat;">
          <div class="content">
            <h3>Heritage Haven</h3>
            <p>Where the past meets the present to create an unforgettable experience for our guests. Situated in the
              heart of a charming historic town, Heritage Heaven Hotel is a sanctuary of luxury and elegance that pays
              homage to the rich heritage and culture of our surroundings.</p>
            <a href="#room" class="btn">Explore</a>
          </div>
        </div>
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>

  {{-- CHECK AVAILABILITY --}}
  <div class="availability">
    <form action="">
      <div class="box">
        <p>Check In <span>*</span></p>
        <input type="date" class="input">
      </div>

      <div class="box">
        <p>Check Out <span>*</span></p>
        <input type="date" class="input">
      </div>

      <div class="box">
        <p>Total Guest <span>*</span></p>
        <select name="adults" id="" class="input">
          <option value="" disabled selected>Select your option</option>
          <option value="1">1 Person</option>
          <option value="2">2 People</option>
          <option value="3">3 People</option>
          <option value="4">4 People</option>
        </select>
      </div>
      <input type="submit" value="Check Availability" class="btn">
    </form>
  </div>

  {{-- SERVICES --}}
  <div class="service">
    <!-- Container for demo purpose -->
    <div class="container my-6 mx-auto md:px-6">
      <!-- Section: Design Block -->
      <section class="mb-16 text-center">
        <div class="flex justify-center mb-16">
          <div class="max-w-[700px] text-center">
            <h2 class="subtitle mb-12 text-center text-4xl font-bold" style="font-family: Sahitya">
              Our Services
            </h2>
          </div>
        </div>

        <div class="grid gap-x-6 md:grid-cols-2 lg:grid-cols-4 lg:gap-x-12">
          <div class="mb-12 lg:mb-0">
            <div class="mb-6 inline-block rounded-full bg-primary-100 p-4 text-primary shadow-sm">
              <i class="amenities fa-solid fa-taxi"></i>
            </div>
            <h5 class="mb-4 text-lg font-bold">Hotel Taxi</h5>
          </div>

          <div class="mb-12 lg:mb-0">
            <div class="mb-6 inline-block rounded-full bg-primary-100 p-4 text-primary shadow-sm">
              <i class="amenities fa-solid fa-wifi"></i>
            </div>
            <h5 class="mb-4 text-lg font-bold">Free Wifi</h5>
          </div>

          <div class="mb-12 md:mb-0">
            <div class="mb-6 inline-block rounded-full bg-primary-100 p-4 text-primary shadow-sm">
              <i class="amenities fa-solid fa-water-ladder"></i>
            </div>
            <h5 class="mb-4 text-lg font-bold">Swimming Pool</h5>
          </div>

          <div class="mb-12 md:mb-0">
            <div class="mb-6 inline-block rounded-full bg-primary-100 p-4 text-primary shadow-sm">
              <i class="amenities fa-solid fa-mug-saucer"></i>
            </div>
            <h5 class="mb-4 text-lg font-bold">Breakfast</h5>
          </div>
        </div>
      </section>
      <!-- Section: Design Block -->
    </div>
  </div>

  {{-- ROOM CAROUSEL --}}
  <div class="room" id="room">
    <div class="flex justify-center mb-16">
      <div class="max-w-[700px] text-center">
        <h2 class="subtitle mb-6 text-center text-4xl font-bold" style="font-family: Sahitya">
          Room & Suites
        </h2>
      </div>
    </div>

    <div class="swiper room-slider">
      <div class="swiper-wrapper">
        @foreach ($rooms as $room)
          <div class="swiper-slide slide">
            <div class="image">
              <span class="price">IDR @php currency($room->roomPrice) @endphp/Night</span>
              <img src="{{ $room->roomImage }}" alt="{{ $room->roomType }}">
            </div>
            <div class="content">
              <h3>{{ $room->roomType }}</h3>
              <p>{{ $room->roomDesc }}</p>
              <a href="#" class="btn">Learn More</a>
            </div>
          </div>
        @endforeach

        {{-- <div class="swiper-slide slide">
                    <div class="image">
                        <span class="price">IDR 3.000.000/night</span>
                        <img src="assets/carousel_queen_room.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Queen Size</h3>
                        <p>Experience exceptional comfort in our spacious and elegant Queen Room. With modern decor, a comfortable queen-size bed, and beautiful views.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div> --}}

        {{-- <div class="swiper-slide slide">
                    <div class="image">
                        <span class="price">IDR 1.000.000/night</span>
                        <img src="assets/carousel_standard_room.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Standard Size</h3>
                        <p>Experience exceptional comfort in our spacious and elegant Standard Room. With modern decor, a comfortable standard-size bed, and beautiful views.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div> --}}

        <div class="swiper-slide slide">
          <div class="image">
            <span class="price">IDR 1.000.000/night</span>
            <img src="assets/carousel_standard_room.png" alt="">
          </div>
          <div class="content">
            <h3>Coming Soon</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus rem quibusdam in reiciendis id ipsa!
              Consequatur, autem? Ex, animi fugit?</p>
            <a href="#" class="btn">Learn More</a>
          </div>
        </div>
      </div>

      <div class="swiper-pagination"></div>
    </div>
  </div>

  {{-- FOOTER --}}
  @include('user.navbar.footer')

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>

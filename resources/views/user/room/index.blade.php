<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Sahitya&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Kadwa&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="image/x-icon" href="/images/logo.png">
  {{-- <link href="{{ asset('css/main.css') }}" rel="stylesheet" /> --}}

  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <title>Heritage Haven</title>
  @vite('resources/css/app.css')
</head>

<body>

  @include('user.navbar.navbar')

  <!--room image 1-->
  <div class="row">
    <div class="column-66">
      <img src="{{ asset('assets/about_bg.png') }}" alt="image1" width="100%">
    </div>
  </div>

  <!--About us line-->
  <div class="flex justify-center mt-12">
    <div class="max-w-[700px] text-center">
      <h2 class="subtitle text-center text-4xl font-bold" style="font-family: Sahitya">
        Room & Suites
      </h2>
    </div>
  </div>

  <!--Room images-->
  <section>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
      <ul class="mt-4 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

        @foreach ($rooms as $room)
          <li>
              <img
                src="{{ $room->roomImage }}"
                class="h-[350px] object-cover transition duration-500 group-hover:scale-105 sm:h-[450px] sm:w-[450px]" />

              <div class="relative bg-white pt-3">
                <h3 class="text-xl text-gray-700 group-hover:underline group-hover:underline-offset-4 font-['sahitya']">
                  {{ $room->roomType }}
                </h3>

                <p class="mt-2">
                  <button class="px-4 py-2 text-white rounded-md bg-primary font-['inter']"><a
                    href="{{ route('detail', ['id' => $room->id]) }}">Learn More</a></button>
                </p>
              </div>
          </li>
        @endforeach



      </ul>
    </div>
  </section>

  @include('user.navbar.footer')
  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>

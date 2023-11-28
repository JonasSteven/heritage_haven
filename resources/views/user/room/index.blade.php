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
  <link href="{{ asset('css/main.css') }}" rel="stylesheet" />

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
  <div class="flex justify-center mb-10 mt-12">
    <div class="max-w-[700px] text-center">
      <h2 class="subtitle mb-12 text-center text-4xl font-bold" style="font-family: Sahitya">
        Room & Suites
      </h2>
    </div>
  </div>

  <!--Room images-->
  <div class="section">

    @foreach ($rooms as $room)
      <div>
        <img src="{{ $room->roomImage }}" width="450" height="516">
        <p class="name">{{ $room->roomType }}</p>
        <button class="btnMore"><a href="{{ route('detail', ['id' => $room->id]) }}">Learn More</a></button>
      </div>
    @endforeach
    {{-- <div>
      <img src="/images/room2.png" width="450" height="516">
      <p class="name">Queen Size</p>  
      <button class="btnMore"><a href="#">Learn More</a></button>
    </div>
    <div>
      <img src="/images/room3.png" width="450" height="516">
      <p class="name">Standard Size</p>
      <button class="btnMore"><a href="#">Learn More</a></button>
    </div> --}}
  </div>
  <br>

  @include('user.navbar.footer')
  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>

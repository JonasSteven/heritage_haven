<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heritage Haven</title>
    {{-- <link rel = "icon" href = "{{ asset('assets/logo.png') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/styleAdmHome.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <nav>
        <div class="logo"><a href="/home"><img src="{{ asset('assets/logo_2.png') }}" alt="pisonzlogo" width="60px"
                    height="40px"></a></div>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
        <input type="checkbox" id="btn">
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="#viewroom">Room</a></li>
            <li><a href="#viewgallery">Gallery</a></li>
            <li><a href="#viewpayment">Payment</a></li>
            <li><a href="#viewbooking">Booking</a></li>
            {{-- <li>
                <form action="/admin/logout" method="POST">
                    @csrf
                    <button type="submit" class="logout-btn" style="cursor: pointer">Logout</button>
                </form>
            </li> --}}
        </ul>
    </nav>

    <!--room section-->
    <div class="container" style="background-color:#f1f1f1">
        <div class="row">
            <div class="column-33" id="viewroom">
                <img src="{{ asset('assets/gallery_1.png') }}" alt="App" width="335" height="471">
            </div>
            <div class="column-66">
                <h1 class="xlarge-font"><b>Room</b></h1>
                <h1 class="large-font" style="color:red;"><b>View Room</b></h1>
                <p><span style="font-size:24px">View your room</span></p>
                <button class="button"><a href="/rooms">View Room</a></button>
            </div>
        </div>
    </div>
    <!--gallery section-->
    <div class="container">
        <div class="row">
            <div class="column-66">
                <h1 class="xlarge-font"><b>Gallery</b></h1>
                <h1 class="large-font" style="color:MediumSeaGreen;"><b>View your gallery</b></h1>
                <p><span style="font-size:36px">Use the button below to view your gallery</span></p>
                <button class="button"><a href="/galleries">View Gallery</a></button>
            </div>
            <div class="column-33" id="viewgallery">
                <img src="{{ asset('assets/gallery_2.png') }}" width="335" height="471">
            </div>
        </div>
    </div>
    <!--payment section-->
    <div class="container" style="background-color:#f1f1f1">
        <div class="row">
            <div class="column-33" id="viewpayment">
                <img src="{{ asset('assets/gallery_3.png') }}" alt="App" width="335" height="471">
            </div>
            <div class="column-66">
                <h1 class="xlarge-font"><b>Gallery</b></h1>
                <h1 class="large-font" style="color:red;"><b>View your Payment</b></h1>
                <p><span style="font-size:24px">Use the button below to view your payment</span></p>
                <button class="button"><a href="/payments" style="">View Payment</a></button>
            </div>
        </div>
    </div>
    {{-- booking Section --}}
    <div class="container">
        <div class="row">
            <div class="column-66">
                <h1 class="xlarge-font"><b>Booking</b></h1>
                <h1 class="large-font" style="color:MediumSeaGreen;"><b>View Booking here</b></h1>
                <p><span style="font-size:36px">Use the button below to view booking page</span></p>
                <button class="button"><a href="/bookings">View Booking</a></button>
            </div>
            <div class="column-33" id="viewbooking">
                <img src="{{ asset('assets/gallery_4.png') }}" width="335" height="471">
            </div>
        </div>
    </div>

    <a href="#" class="btnup" style="color: white">UP</a>

</body>

</html>

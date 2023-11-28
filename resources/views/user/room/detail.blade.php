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


  <link href="{{ asset('css/main2.css') }}" rel="stylesheet" />

  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <title>sdfjkasdjfk</title>
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
  <br><br>

  @if ($room->roomType == 'King Size')
    <!--Title-->
    <div class="row">
      <div class="column">
        <div class="decor"></div>
      </div>
      <div class="column_2">
        <h1 class="title_header">Heritage Haven</h1>
      </div>
    </div>

    <!--Title 2 -->
    <div class="row">
      <div class="column_2">
        <h1 class="title_header2">King Size</h1>
      </div>
    </div>
    <hr class="line">
    <br><br><br>
    <!--grid container-->
    <div class="section">
      <div class="grid_left">
        <h1>The Luxury Living</h1>
        <p class="name">Sed in libero sit amet mi venenatis faucibus. Donec porttitor enim sem. Curabitur tempus
          dignissim mi, eget sodales orci facilisis ac. Nunc a nisi at lacus posuere scelerisque eleifend.</p>
        <h2>Features</h2>
        <div>
          <ul>
            <li>Luxury Room</li>
            <li>Memorable City and Pool Views</li>
            <li>Special Bathroom</li>
          </ul>
        </div>
        <h2>Amenities</h2>
        <h2>Bath & Personal Care</h2>
        <div>
          <ul>
            <li>Pillow Menu</li>
            <li>Seperate Shower and Bath</li>
            <li>Signature Bed Linen</li>
            <li>Shangri-La Bath Products</li>
            <li>Plush Towels</li>
          </ul>
        </div>
        <h2>Media & Entertainment</h2>
        <div>
          <ul>
            <li>57-Channel Satellite Television</li>
            <li>Wi-Fi Access (Fixed LAN and Wi-Fi)</li>
          </ul>
        </div>
        <h2>Office Equipment & Stationary</h2>
        <div>
          <ul>
            <li>Electronic Safe</li>
            <li>Full-Size Executive Writing Desk</li>
            <li>Independent Fax Line</li>
            <li>International Direct Dial Telephone</li>
            <li>Voice Mail</li>
          </ul>
        </div>
        <h2>Refreshments</h2>
        <div>
          <ul>
            <li>Coffee / Tea-Making Facilities</li>
            <li>Mini-Bar</li>
            <li>24-Hour Room Service</li>
          </ul>
        </div>
      </div>
      <div>
        <div class="title_btn">Ready To Book?</div>
        <form action="/action_page.php">
          <label for="checkin">CheckIn</label>
          <input type="date" id="checkin" name="checkin"></label>
        </form>
        <hr>
        <form action="/action_page.php">
          <label for="checkout">CheckOut</label>
          <input type="date" id="checkout" name="checkout"></label>
        </form>
        <hr>
        <p class="total_person">Total Guest</p>
        <hr><br>
        <button class="btnMore"><a href="#">Book Now</a></button>
      </div>
    </div>
    <br><br>
  @elseif($room->roomType == 'Queen Size')
    <!--Title-->
    <div class="row">
      <div class="column">
        <div class="decor"></div>
      </div>
      <div class="column_2">
        <h1 class="title_header">Heritage Haven</h1>
      </div>
    </div>

    <!--Title 2 -->
    <div class="row">
      <div class="column_2">
        <h1 class="title_header2">Queen Size</h1>
      </div>
    </div>
    <hr class="line">
    <br><br><br>
    <!--grid container-->
    <div class="section">
      <div class="grid_left">
        <h1>The Luxury Living</h1>
        <p class="name">Sed in libero sit amet mi venenatis faucibus. Donec porttitor enim sem. Curabitur tempus
          dignissim mi, eget sodales orci facilisis ac. Nunc a nisi at lacus posuere scelerisque eleifend.</p>
        <h2>Features</h2>
        <div>
          <ul>
            <li>Luxury Room</li>
            <li>Memorable City and Pool Views</li>
            <li>Special Bathroom</li>
          </ul>
        </div>
        <h2>Amenities</h2>
        <h2>Bath & Personal Care</h2>
        <div>
          <ul>
            <li>Pillow Menu</li>
            <li>Seperate Shower and Bath</li>
            <li>Signature Bed Linen</li>
            <li>Shangri-La Bath Products</li>
            <li>Plush Towels</li>
          </ul>
        </div>
        <h2>Media & Entertainment</h2>
        <div>
          <ul>
            <li>57-Channel Satellite Television</li>
            <li>Wi-Fi Access (Fixed LAN and Wi-Fi)</li>
          </ul>
        </div>
        <h2>Office Equipment & Stationary</h2>
        <div>
          <ul>
            <li>Electronic Safe</li>
            <li>Full-Size Executive Writing Desk</li>
            <li>Independent Fax Line</li>
            <li>International Direct Dial Telephone</li>
            <li>Voice Mail</li>
          </ul>
        </div>
        <h2>Refreshments</h2>
        <div>
          <ul>
            <li>Coffee / Tea-Making Facilities</li>
            <li>Mini-Bar</li>
            <li>24-Hour Room Service</li>
          </ul>
        </div>
      </div>
      <div>
        <div class="title_btn">Ready To Book?</div>
        <form action="/action_page.php">
          <label for="checkin">CheckIn</label>
          <input type="date" id="checkin" name="checkin"></label>
        </form>
        <hr>
        <form action="/action_page.php">
          <label for="checkout">CheckOut</label>
          <input type="date" id="checkout" name="checkout"></label>
        </form>
        <hr>
        <p class="total_person">Total Guest</p>
        <hr><br>
        <button class="btnMore"><a href="#">Book Now</a></button>
      </div>
    </div>
    <br><br>
  @elseif($room->roomType == 'Standard Size')
    <!--Title-->
    <div class="row">
      <div class="column">
        <div class="decor"></div>
      </div>
      <div class="column_2">
        <h1 class="title_header">Heritage Haven</h1>
      </div>
    </div>

    <!--Title 2 -->
    <div class="row">
      <div class="column_2">
        <h1 class="title_header2">Standard Size</h1>
      </div>
    </div>
    <hr class="line">
    <br><br><br>
    <!--grid container-->
    <div class="section">
      <div class="grid_left">
        <h1>The Luxury Living</h1>
        <p class="name">Sed in libero sit amet mi venenatis faucibus. Donec porttitor enim sem. Curabitur tempus
          dignissim mi, eget sodales orci facilisis ac. Nunc a nisi at lacus posuere scelerisque eleifend.</p>
        <h2>Features</h2>
        <div>
          <ul>
            <li>Luxury Room</li>
            <li>Memorable City and Pool Views</li>
            <li>Special Bathroom</li>
          </ul>
        </div>
        <h2>Amenities</h2>
        <h2>Bath & Personal Care</h2>
        <div>
          <ul>
            <li>Pillow Menu</li>
            <li>Seperate Shower and Bath</li>
            <li>Signature Bed Linen</li>
            <li>Shangri-La Bath Products</li>
            <li>Plush Towels</li>
          </ul>
        </div>
        <h2>Media & Entertainment</h2>
        <div>
          <ul>
            <li>57-Channel Satellite Television</li>
            <li>Wi-Fi Access (Fixed LAN and Wi-Fi)</li>
          </ul>
        </div>
        <h2>Office Equipment & Stationary</h2>
        <div>
          <ul>
            <li>Electronic Safe</li>
            <li>Full-Size Executive Writing Desk</li>
            <li>Independent Fax Line</li>
            <li>International Direct Dial Telephone</li>
            <li>Voice Mail</li>
          </ul>
        </div>
        <h2>Refreshments</h2>
        <div>
          <ul>
            <li>Coffee / Tea-Making Facilities</li>
            <li>Mini-Bar</li>
            <li>24-Hour Room Service</li>
          </ul>
        </div>
      </div>
      <div>
        <div class="title_btn">Ready To Book?</div>
        <form action="/action_page.php">
          <label for="checkin">CheckIn</label>
          <input type="date" id="checkin" name="checkin"></label>
        </form>
        <hr>
        <form action="/action_page.php">
          <label for="checkout">CheckOut</label>
          <input type="date" id="checkout" name="checkout"></label>
        </form>
        <hr>
        <p class="total_person">Total Guest</p>
        <hr><br>
        <button class="btnMore"><a href="#">Book Now</a></button>
      </div>
    </div>
    <br><br>
  @endif



  @include('user.navbar.footer')
  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>

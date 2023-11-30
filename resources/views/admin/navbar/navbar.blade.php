{{-- navbar --}}
<nav id="nav">
    <div class="logo"><a href="home"><img src="{{ asset('assets/logo.png') }}" alt="pisonzlogo" width="60px"
                height="40px"></a></div>
    <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
    </label>
    <input type="checkbox" id="btn">
    <ul>
        <li><a class="links-menu" href="/home">Home</a></li>
        <li><a class="links-menu" href="/rooms">Room</a></li>
        <li><a class="links-menu" href="/galleries">Gallery</a></li>
        <li><a class="links-menu" href="/payments">Payment</a></li>
        <li><a class="links-menu" href="/bookings">Booking</a></li>
        {{-- <li>
            <form action="/admin/logout" method="POST">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </li> --}}
    </ul>
</nav>
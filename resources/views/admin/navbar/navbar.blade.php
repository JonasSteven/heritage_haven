{{-- navbar --}}
<nav id="nav">
    <div class="logo"><a href="/admin"><img src="{{ asset('assets/logo.png') }}" alt="pisonzlogo" width="60px"
                height="40px"></a></div>
    <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
    </label>
    <input type="checkbox" id="btn">
    <ul>
        <li><a class="links-menu" href="/admin">Home</a></li>
        <li><a class="links-menu" href="/admin/room">Room</a></li>
        <li><a class="links-menu" href="/admin/gallery">Gallery</a></li>
        <li><a class="links-menu" href="/admin/payment">Payment</a></li>
        <li><a class="links-menu" href="/admin/booking">Booking</a></li>
        <li>
            <form action="/admin/logout" method="POST">
                @csrf
                <button type="submit" class="logout-btn">Log Out</button>
            </form>
        </li>
    </ul>
</nav>
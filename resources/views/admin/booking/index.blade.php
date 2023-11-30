@extends('admin.booking.layout')
@section('content')
    <div class="booking_container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Booking History</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        <br/>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Booking Id</th>
                                        <th>Fullname</th>
                                        <th>Email</th>
                                        <th>Country</th>
                                        <th>Phone Number</th>
                                        <th>Room</th>
                                        <th>Total Guest</th>
                                        <th>Check In</th>
                                        <th>Check Out</th>
                                        <th>Payment</th>
                                        <th>Attend Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($bookings as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->fullName }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->country }}</td>
                                        <td>{{ $item->phoneNumber }}</td>
                                        <td>{{ $item->room->roomType }}</td>
                                        <td>{{ $item->totalGuest }}</td>
                                        <td>{{ $item->checkInDate }}</td>
                                        <td>{{ $item->checkOutDate }}</td>
                                        <td>{{ $item->payment->paymentMethod }}</td>
                                        <td>{{ $item->attendStatus }}</td>
                                        <td class="d-flex gap-1">
                                            <form action="/bookings/{{ $item->id }}?action=checkIn"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-success btn-sm"><i
                                                        class="fa-solid fa-check"></i></button>
                                            </form>
                                            <form action="/bookings/{{ $item->id }}?action=checkOut"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fa-solid fa-xmark"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            {{-- {{ $banners->links('pagination::bootstrap-5') }} --}}
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
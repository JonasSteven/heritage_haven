@extends('admin.room.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Detail Room Page</div>
  <div class="card-body">
    <h5 class="card-title">Room Type : {{ $rooms->roomType }}</h5>
    <p class="card-text"><img src="{{ asset('storage/images/rooms/' . $rooms->roomImage) }}" width="200px"></p></br>
    <p class="card-text">Room Description : {{ $rooms->roomDesc }}</p>
    <p class="card-text">Room Price : IDR @php echo number_format($rooms->roomPrice, 0, ',', '.'); @endphp</p>
    <p class="card-text">Room Quantity : {{ $rooms->roomQuantity }}</p>
    <a class="btn btn-primary" href="{{ url('/admin/room') }}"> Back</a>
    </hr>
  </div>
</div>

@endsection
@extends('admin.room.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Room</div>
  <div class="card-body">
       
      <form action="{{ url('/admin/room/' .$rooms->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$rooms->id}}" id="id" />
        <label>Room Type</label></br>
        <input type="text" name="roomType" id="roomType" value="{{ old('roomType', $rooms->roomType) }}" class="form-control @error('roomType') is-invalid @enderror">
        @error('roomType')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Room Image URL</label></br>
        <input type="url" name="roomImage" id="roomImage" value="{{ old('roomImage', $rooms->roomImage) }}" class="form-control @error('roomImage') is-invalid @enderror">
        @error('roomImage')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Room Description</label></br>
        <input type="text" name="roomDesc" id="roomDesc" value="{{ old('roomDesc', $rooms->roomDesc) }}" class="form-control @error('roomDesc') is-invalid @enderror">
        @error('roomDesc')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Room Price</label></br>
        <input type="text" name="roomPrice" id="roomPrice" value="{{ old('roomPrice', $rooms->roomPrice) }}" class="form-control @error('roomPrice') is-invalid @enderror">
        @error('roomPrice')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Room Quantity</label></br>
        <input type="number" name="roomQuantity" id="roomQuantity" value="{{ old('roomQuantity', $rooms->roomQuantity) }}" class="form-control @error('roomQuantity') is-invalid @enderror">
        @error('roomQuantity')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form></br>
    <a class="btn btn-primary" href="{{ url('/admin/room') }}"> Back</a>
    
  </div>
</div>
  
@endsection
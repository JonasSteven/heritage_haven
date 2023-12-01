@extends('admin.room.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Room</div>
  <div class="card-body">
       
      <form action="{{ url('/admin/room') }}" method="post">
        {!! csrf_field() !!}
        <label>Room Type</label></br>
        <input type="text" name="roomType" id="roomType" class="form-control @error('roomType') is-invalid @enderror" value="{{ old('roomType') }}">
        @error('roomType')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Room Image URL</label></br>
        <input type="url" name="roomImage" id="roomImage" class="form-control @error('roomImage') is-invalid @enderror" value="{{ old('roomImage') }}">
        @error('roomImage')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Room Description</label></br>
        <input type="text" name="roomDesc" id="roomDesc" class="form-control @error('roomDesc') is-invalid @enderror" value="{{ old('roomDesc') }}">
        @error('roomDesc')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Room Price</label></br>
        <input type="text" name="roomPrice" id="roomPrice" class="form-control @error('roomPrice') is-invalid @enderror" value="{{ old('roomPrice') }}">
        @error('roomPrice')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Room Quantity</label></br>
        <input type="number" name="roomQuantity" id="roomQuantity" class="form-control @error('roomQuantity') is-invalid @enderror" value="{{ old('roomQuantity') }}">
        @error('roomQuantity')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Save" class="btn btn-success"></br>
      </form></br>
      <a class="btn btn-primary" href="{{ url('/admin/room') }}"> Back</a>
    
  </div>
</div>
  
@endsection
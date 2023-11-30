@extends('admin.gallery.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Gallery</div>
  <div class="card-body">
       
      <form action="{{ url('/galleries') }}" method="post">
        {!! csrf_field() !!}
        <label>Image Name</label></br>
        <input type="text" name="imageName" id="imageName" class="form-control @error('imageName') is-invalid @enderror" value="{{ old('imageName') }}">
        @error('imageName')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Image URL</label></br>
        <input type="url" name="image" id="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">
        @error('image')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Save" class="btn btn-success"></br>
      </form></br>
      <a class="btn btn-primary" href="{{ url('/galleries') }}"> Back</a>
    
  </div>
</div>
  
@endsection
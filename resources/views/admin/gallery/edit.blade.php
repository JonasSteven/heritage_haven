@extends('admin.gallery.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Banner</div>
  <div class="card-body">
       
      <form action="{{ url('/galleries/' .$galleries->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$galleries->id}}" id="id" />
        <label>Image Name</label></br>
        <input type="text" name="imageName" id="imageName" value="{{ old('imageName', $galleries->imageName) }}" class="form-control @error('imageName') is-invalid @enderror">
        @error('imageName')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Image URL</label></br>
        <input type="url" name="image" id="image" value="{{ old('image', $galleries->image) }}" class="form-control @error('image') is-invalid @enderror">
        @error('image')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form></br>
    <a class="btn btn-primary" href="{{ url('/galleries') }}"> Back</a>
    
  </div>
</div>
  
@endsection
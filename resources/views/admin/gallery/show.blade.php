@extends('admin.gallery.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Detail Gallery Page</div>
  <div class="card-body">
    <h5 class="card-title">Image Name : {{ $galleries->imageName }}</h5>
    <p class="card-text"><img src="{{ $galleries->image }}" width="200px"></p></br>
    <a class="btn btn-primary" href="{{ url('/admin/gallery') }}"> Back</a>
    </hr>
  </div>
</div>

@endsection
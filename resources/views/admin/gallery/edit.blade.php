@extends('admin.gallery.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Gallery</div>
  <div class="card-body">
       
      <form action="{{ url('/admin/gallery/' .$galleries->id) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$galleries->id}}" id="id" />
        <label>Image Name</label></br>
        <input type="text" name="imageName" id="imageName" value="{{ old('imageName', $galleries->imageName) }}" class="form-control @error('imageName') is-invalid @enderror">
        @error('imageName')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <br>
        <img id="image-preview" alt="image preview" width="150px" src="{{ asset('storage/images/galleries/' . $galleries->image) }}"/>
        <br/>
        <input type="file" id="image-source" onchange="previewImage();" name="image" class="form-control" @error('image') is-invalid @enderror>
        @error('image')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form></br>
    <a class="btn btn-primary" href="{{ url('/admin/gallery') }}"> Back</a>
    
  </div>
</div>

<script>
  function previewImage() {
      document.getElementById("image-preview").style.display = "block";
      var oFReader = new FileReader();
       oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
   
      oFReader.onload = function(oFREvent) {
        document.getElementById("image-preview").src = oFREvent.target.result;
      };
    };
</script>
  
@endsection
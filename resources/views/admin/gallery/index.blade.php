@extends('admin.gallery.layout')
@section('content')
    <div class="gallery_container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Gallery CRUD (Create, Read, Update and Delete)</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/galleries/create') }}" class="btn btn-success btn-sm" title="Add New Gallery">
                            Add New Gallery
                        </a>
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
                                        <th>Gallery Id</th>
                                        <th>Image</th>
                                        <th>Image Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($galleries as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td><img src="{{ $item->image }}" width="100px"></td>
                                        <td>{{ $item->imageName }}</td>
  
                                        <td>
                                            <a href="{{ url('/galleries/' . $item->id) }}" title="View Gallery"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/galleries/' . $item->id . '/edit') }}" title="Edit Gallery"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/galleries' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Gallery" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
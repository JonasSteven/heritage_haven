@extends('admin.room.layout')
@section('content')
    <div class="room_container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Room CRUD (Create, Read, Update and Delete)</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/rooms/create') }}" class="btn btn-success btn-sm" title="Add New Room">
                            Add New Room
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
                                        <th>Room Id</th>
                                        <th>Room Image</th>
                                        <th>Room Type</th>
                                        <th>Room Description</th>
                                        <th>Room Price</th>
                                        <th>Room Quantity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($rooms as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td><img src="{{ $item->roomImage }}" width="100px"></td>
                                        <td>{{ $item->roomType }}</td>
                                        <td>{{ $item->roomDesc }}</td>
                                        <td>IDR @php echo number_format($item->roomPrice, 0, ',', '.'); @endphp</td>
                                        <td>{{ $item->roomQuantity }}</td>
  
                                        <td>
                                            <a href="{{ url('/rooms/' . $item->id) }}" title="View Room"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/rooms/' . $item->id . '/edit') }}" title="Edit Room"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/rooms' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Room" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
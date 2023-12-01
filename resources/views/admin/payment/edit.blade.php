@extends('admin.payment.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Payment</div>
  <div class="card-body">
       
      <form action="{{ url('/admin/payment/' .$payments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$payments->id}}" id="id" />
        <label>Payment Method</label></br>
        <input type="text" name="paymentMethod" id="paymentMethod" value="{{ old('paymentMethod', $payments->paymentMethod) }}" class="form-control @error('paymentMethod') is-invalid @enderror">
        @error('paymentMethod')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form></br>
    <a class="btn btn-primary" href="{{ url('/admin/payment') }}"> Back</a>
    
  </div>
</div>
  
@endsection
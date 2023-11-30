@extends('admin.payment.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Payment</div>
  <div class="card-body">
       
      <form action="{{ url('/payments') }}" method="post">
        {!! csrf_field() !!}
        <label>Payment Method</label></br>
        <input type="text" name="paymentMethod" id="paymentMethod" class="form-control @error('paymentMethod') is-invalid @enderror" value="{{ old('paymentMethod') }}">
        @error('paymentMethod')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Save" class="btn btn-success"></br>
      </form></br>
      <a class="btn btn-primary" href="{{ url('/payments') }}"> Back</a>
    
  </div>
</div>
  
@endsection
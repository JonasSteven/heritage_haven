@extends('admin.payment.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Detail Payment Page</div>
  <div class="card-body">
    <h5 class="card-title">Payment Method : {{ $payments->paymentMethod }}</h5>
    <a class="btn btn-primary" href="{{ url('/payments') }}"> Back</a>
    </hr>
  </div>
</div>

@endsection
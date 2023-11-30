{{-- @php
  $getCheckInDay = date('l', strtotime($booking->checkInDate));
  $getCheckOutDay = date('l', strtotime($booking->checkOutDate));
  $total = number_format($booking->totalCharges, 0, ',', '.');
@endphp --}}

@extends('user.layouts.main')

@section('container')
  @if (session()->has('booking'))
    @php
        $booking = session('booking');
    @endphp
    
    <section class="p-5 mx-auto mt-5 rounded-lg md:w-3/4 md:mt-20 shadow-lg shadow-gray-200">
      <div class="ml-4">
        <h1 class="my-2 text-2xl font-semibold">Receipt</h1>
        <div class="w-full h-[.5px] bg-gray-200 relative">
          <div class="absolute w-20 h-1 bg-primary"></div>
        </div>
      </div>
  
      <div class="w-full p-5 py-8 mt-3">
        <div>
          <dl class="-my-3 divide-y divide-gray-100 text-sm">
            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
              <dt class="text-[15px] font-medium text-gray-900">Full Name</dt>
              <dd class="text-gray-700 sm:col-span-2">{{ $booking->fullName }}</dd>
            </div>
  
            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
              <dt class="text-[15px] font-medium text-gray-900">Email</dt>
              <dd class="text-gray-700 sm:col-span-2">{{ $booking->email }}</dd>
            </div>
  
            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
              <dt class="text-[15px] font-medium text-gray-900">Country</dt>
              <dd class="text-gray-700 sm:col-span-2">{{ $booking->country }}</dd>
            </div>
  
            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
              <dt class="text-[15px] font-medium text-gray-900">Phone Number</dt>
              <dd class="text-gray-700 sm:col-span-2">{{ $booking->phoneNumber }}</dd>
            </div>
  
  
            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
              <dt class="text-[15px] font-medium text-gray-900">Room Type</dt>
              <dd class="text-gray-700 sm:col-span-2">{{ $booking->room->roomType }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
              <dt class="text-[15px] font-medium text-gray-900">Total Guest</dt>
              <dd class="text-gray-700 sm:col-span-2">{{ $booking->totalGuest }}</dd>
            </div>
  
            <div class="w-full h-[2px] bg-gray-200 my-3"></div>
  
            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
              <dt class="text-[15px] font-medium text-gray-900">Check In / Check Out</dt>
              <dd class="text-gray-700 sm:col-span-2">@php echo date('l', strtotime($booking->checkInDate)); @endphp, {{ $booking->checkInDate }} / @php echo date('l', strtotime($booking->checkOutDate)); @endphp, {{ $booking->checkOutDate }}</dd>
            </div>
            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
              <dt class="text-[15px] font-medium text-gray-900">Payment</dt>
              <dd class="text-gray-700 sm:col-span-2">{{ $booking->payment->paymentMethod }}</dd>
            </div>
            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
              <dt class="text-[15px] font-medium text-gray-900">Total Charges</dt>
              <dd class="text-gray-700 sm:col-span-2">IDR @php echo number_format($booking->totalCharges, 0, ',', '.'); @endphp</dd>
            </div>
          </dl>
        </div>
  
      </div>
      {{-- <div class="mt-4 text-center text-[15px]">
        <h1 class="mb-2 font-bold">Transaction will be sent to your email</h1>
        <p>You can check your order status(trackorder) or contact us on (whatsapp)</p>
      </div> --}}
    </section>
  
    <section class="mt-16">
      <div class="mx-auto max-w-screen-xl px-4">
        <div class="mx-auto max-w-xl text-center">
          <h1 class="text-lg font-bold sm:text-2xl">
            Thank you for choosing <strong class="text-primary">Heritage Haven!</strong> We are thrilled to have you as our valued guest.
          </h1>
  
        </div>
      </div>
    </section>
  @else
    <div>
      <h1 class="italic text-red-500 font-bold text-center" style="margin-top: 250px; font-size: 50px">PAGE EXPIRED</h1>
      <a href="/" class="p-3" style="text-align: center; display: block; background-color: #e62f3a; border-radius: 30px; color: white; width: 200px; margin: 0 auto; margin-top: 10px; margin-bottom: 300px">Back to Home Page</a>
    </div>
  @endif
  
@endsection

@php
  $getCheckInDay = date('l', strtotime($checkInDate));
  $getCheckOutDay = date('l', strtotime($checkOutDate));
  $total = number_format($totalCharges, 0, ',', '.');
@endphp

@extends('user.layouts.main')
@section('container')
  <section class="mx-auto w-[85%] p-3 flex flex-col">
    {{-- <h1 class="text-center p-3 bg-slate-100 font-['Sahitya']">The reservation will be closed in 05.00</h1> --}}
    <h2 class="my-5 font-semibold text-center md:text-left">Stay Summary: Heritage haven</h2>
    {{-- <div class="w-full bg-slate-100 p-7 flex gap-5">
      <img src="img/img1.png" width="280" alt="" />
      <div class="w-full">
        <h1 class="text-2xl font-semibold my-4">Fri, 20 oct 2023 / Fri, 20 oct 2023</h1>
        <h3><span class="font-bold">Room & Guest:</span> 1 room, 1 adult, 0 Children</h3>
        <h5><span class="font-bold">Room Type:</span> King Size</h5>
        <div class="h-[2px] w-full bg-slate-300 my-3"></div>
        <h1 class="text-right font-['sahitya'] font-bold text-xl">Total Charges: IDR 5,000,000.00</h1>
      </div>
    </div> --}}

    <section>
      <div class="max-w-screen px-4 py-8 mx-auto sm:py-0 sm:mt-5 sm:px-6 lg:px-8 bg-gray-100">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:items-stretch">
          <div class="grid p-6 rounded place-content-center ">
            <img src="{{ asset('storage/images/rooms/' . $room->roomImage) }}" alt="">
          </div>

          <div class="lg:col-span-2 lg:py-8">
            <h1 class="text-lg md:text-2xl font-semibold my-4">@php echo $getCheckInDay @endphp, {{ $checkInDate }} / @php echo $getCheckOutDay @endphp, {{ $checkOutDate }}</h1>
            <h3><span class="font-bold">Total Guest: </span> {{ $totalGuest }}</h3>
            <h5><span class="font-bold">Room Type: </span> {{ $room->roomType }}</h5>
            <div class="h-[2px] w-full bg-slate-300 my-3"></div>
            <h1 class="text-center md:text-right font-['sahitya'] font-light md:text-xl text-lg"><span class="font-bold">Total Charges</span>: IDR {{ $total }}</h1>
          </div>
        </div>
      </div>
    </section>
  </section>

  <section class="w-[85%] mx-auto mt-10 xl:mt-32 bg-slate-100 md:p-16 p-5">
    <h1 class="text-2xl font-semibold">Payment</h1>
    <div class="h-[2px] w-full bg-slate-300 my-3"></div>
    <div>
      <form action="/bookingPayment" method="POST">
        @csrf

        <input type="hidden" name="fullName" value="{{ old('fullName', $fullName) }}">
        <input type="hidden" name="email" value="{{ old('email', $email) }}">
        <input type="hidden" name="countryRegion" value="{{ old('countryRegion', $countryRegion) }}">
        <input type="hidden" name="phoneNumber" value="{{ old('phoneNumber', $phoneNumber) }}">
        <input type="hidden" name="roomId" value="{{ old('roomId', $room->id) }}">
        <input type="hidden" name="checkInDate" value="{{ old('checkInDate', $checkInDate) }}">
        <input type="hidden" name="checkOutDate" value="{{ old('checkOutDate', $checkOutDate) }}">
        <input type="hidden" name="totalGuest" value="{{ old('totalGuest', $totalGuest) }}">
        <input type="hidden" name="totalCharges" value="{{ old('totalCharges', $totalCharges) }}">

        <label for="paymentMethod" class="block my-3">Choose Payment Method:</label>
        <select id="paymentMethod" name="paymentMethod" class="md:w-[600px]  w-[100%] p-3 border rounded-md border-slate-400 ">
          <option disabled selected>Select your option</option>
          @foreach ($payments as $payment)
            <option value="{{ $payment->id }}" {{ old('paymentMethod') == $payment->id ? 'selected' : '' }}>{{ $payment->paymentMethod }}</option>
          @endforeach
        </select>
        @error('paymentMethod')
          <div class="text-red-600 font-bold font-['Poppins']">
            {{ $message }}
          </div>
        @enderror

        <label for="cardNumber" class="block my-3">Card Number:</label>
        <input type="text" name="cardNumber" class="md:w-[600px]  w-[100%] rounded-md p-3 shadow-lg border border-slate-400" value="{{ old('cardNumber') }}">
        @error('cardNumber')
          <div class="text-red-600 font-bold font-['Poppins']">
            {{ $message }}
          </div>
        @enderror

        <label for="cardName" class="block my-3">Card Holder's Name:</label>
        <input type="text" name="cardName" class="md:w-[600px]  w-[100%] rounded-md p-3 shadow-lg border border-slate-400" value="{{ old('cardName') }}">
        @error('cardName')
          <div class="text-red-600 font-bold font-['Poppins']">
            {{ $message }}
          </div>
        @enderror

        <label for="expiryDate" class="block my-3">Expiry Date:</label>
        <input type="date" name="expiryDate" size="30" class="rounded-md p-3 shadow-lg border border-slate-400" value="{{ old('expiryDate') }}">
        @error('expiryDate')
          <div class="text-red-600 font-bold font-['Poppins']">
            {{ $message }}
          </div>
        @enderror

        <button type="submit"
          class="w-64 block bg-primary font-['roboto'] mt-5 p-3 text-sm text-white font-semibold">Complete Your
          Reservation</button>
      </form>
    </div>
  </section>

  

@endsection

@php
  function currency($price)
  {
      $convert_result = number_format($price, 0, ',', '.');
      echo $convert_result;
  }
@endphp

@php
    $tax = $room->roomPrice * 10 / 100;
    $totalCharges = $room->roomPrice + $tax;
@endphp

@extends('user.layouts.main')
@section('container')
  {{-- <section class="mx-auto mt-10 w-[85%] p-3 flex flex-col">
    <div class="w-full flex bg-slate-300 p-4 gap-20 font-['sahitya'] text-xl">
      <h5 class="w-[60%] font-semibold">Room Type</h5>
      <h5 class="font-semibold">Average per Night</h5>
    </div>

    <div class="w-full flex mt-16 gap-20">
      <div class="w-[60%] flex gap-10 text-justify">
        <img src="img/img1.png" width="350" alt="img1" />
        <div>
          <h1 class="text-3xl mb-4 font-['Inter']">KING SIZE</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam aut libero tempora perferendis
            voluptatibus eius et fugiat ipsam dicta voluptatum quas minima error eligendi placeat qui quidem, consequuntur
            ab ducimus.</p>
        </div>
      </div>
      <h1 class="self-center font-bold text-3xl font-['Sahitya']">IDR Rp.5.000.000,-</h1>
    </div>
  </section> --}}

  @if ($room->roomQuantity > 0)
    <div class="mx-auto sm:w-[85%] grid grid-cols-1  lg:grid-cols-3 ">
      <div class=" bg-gray-200 lg:col-span-2">
        <div class="flex items-center justify-start">
          <h1 class="font-semibold mt-5 ml-10 text-lg pb-3">Room Type</h1>
        </div>
        <section class="bg-white">
          <div class="mx-auto max-w-screen-xl px-4 py-1 sm:px-6 sm:py-1 lg:px-8">
            <div class="mt-8 grid grid-cols-1 gap-1 lg:grid-cols-2 lg:gap-0">
              <div class="relative h-64 overflow-hidden sm:h-80 lg:h-full">
                <img src="{{ asset('storage/images/rooms/' . $room->roomImage) }}" width="350" alt="img1" />
              </div>

              <div>
                <article class="space-y-4 text-gray-600">
                  <h1 class="font-semibold text-3xl">{{ $room->roomType }}</h1>

                  <p class="text-justify">
                      {{ $room->roomDesc }}
                  </p>
                </article>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="h-32 bg-gray-200 xl:mt-0 mt-5 md:mt-0 sm:mt-0">
        <div class="flex justify-start items-center">
          <h1 class="font-semibold mt-5 ml-10 text-lg pb-3">Average per Night</h1>
        </div>
        <section class="bg-white xl:py-12 mt-4 xl:mt-0">
          <div class="mx-auto max-w-screen-xl px-4 py-1 sm:px-6 sm:py-1 lg:px-8">
            <div class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-0">
              <div class="relative -mt-9 xl:mt-0 overflow-hidden sm:h-80 lg:h-full">
                <h1 class="p-5 text-2xl font-bold font-['sahitya']">IDR @php currency($room->roomPrice) @endphp</h1>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

    <section class="w-[85%] mx-auto mt-36 flex gap-20 flex-wrap xl:flex-nowrap">
      <div class="">
        <h1 class="md:text-4xl text-2xl  font-['inter'] mb-4">Guest Information</h1>
        <div class="h-[2px] w-full bg-slate-300 my-3"></div>

        <form action="/bookingPayment" method="GET">
          @csrf
          <input type="hidden" name="roomId" value="{{ old('roomId', $room->id) }}">
          <input type="hidden" name="checkInDate" value="{{ old('checkInDate', $checkInDate) }}">
          <input type="hidden" name="checkOutDate" value="{{ old('checkOutDate', $checkOutDate) }}">
          <input type="hidden" name="totalGuest" value="{{ old('totalGuest', $totalGuest) }}">
          <input type="hidden" name="totalCharges" value="{{ old('totalCharges', $totalCharges) }}">
          <div class="flex xl:gap-20 lg:gap-16 md:gap-7 sm:gap-5 gap-3">
            <div>
              <label for="fullName" class="block my-3">Full Name:</label>
              <input type="text" name="fullName" size="90" class="xl:w-[720px]  w-full rounded-md p-3 shadow-lg border border-slate-400" value="{{ old('fullName') }}">
              @error('fullName')
                <div class="text-red-600 font-bold font-['Poppins']">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <label for="email" class="block my-3">Email:</label>
          <input type="text" name="email" size="90" class="xl:w-[720px]  w-full rounded-md p-3 shadow-lg border border-slate-400" value="{{ old('email') }}">
          @error('email')
            <div class="text-red-600 font-bold font-['Poppins']">
              {{ $message }}
            </div>
          @enderror

          <label for="countryRegion" class="block my-3">Country / Region:</label>
          <input type="text" name="countryRegion" size="90" class="xl:w-[720px]  w-full rounded-md p-3 shadow-lg border border-slate-400" value="{{ old('countryRegion') }}">
          @error('countryRegion')
            <div class="text-red-600 font-bold font-['Poppins']">
              {{ $message }}
            </div>
          @enderror

          <label for="phoneNumber" class="block my-3">Phone Number:</label>
          <input type="text" name="phoneNumber" class="xl:w-[720px]  w-full rounded-md p-3 shadow-lg border border-slate-400" value="{{ old('phoneNumber') }}">
          @error('phoneNumber')
            <div class="text-red-600 font-bold font-['Poppins']">
              {{ $message }}
            </div>
          @enderror
      </div>

      <div class="border-2 font-['Sahitya'] border-slate-300 w-full p-10 h-full rounded-md">
        <h1 class="text-center bg-slate-100 p-3 font-['Sahitya'] text-2xl">Charges</h1>

        <div class="mt-5 text-xl">
          <div class="flex justify-between items-center">
            <h1 class="text-lg md:text-2xl">Room Charges</h1>
            <p class="text-base md:text-xl">IDR @php currency($room->roomPrice) @endphp</p>
          </div>
          <div class="flex justify-between my-5 items-center">
            <h1 class="text-lg md:text-2xl">Services Charges<br> and Tax</h1>
            <p class="text-base md:text-xl">IDR @php currency($tax) @endphp</p>
          </div>
          <div class="h-[2px] w-full bg-slate-300 my-3"></div>
          <div class="flex justify-between mb-5">
            <h1 class="">Total Charges</h1>
            <p class="text-lg">IDR @php currency($totalCharges) @endphp</p>
          </div>

          <button type="submit" class="w-full bg-primary font-['inter'] mt-5 p-2 text-white font-semibold" id="submit">Book Now</button>

        </div>
      </div>
      </form>
    </section>
  @else
    <div class="mx-auto sm:w-[85%] grid grid-cols-1  lg:grid-cols-3 ">
      <div class=" bg-gray-200 lg:col-span-2">
        <div class="flex items-center justify-start">
          <h1 class="font-semibold mt-5 ml-10 text-lg pb-3">Room Type</h1>
        </div>
        <section class="bg-white">
          <div class="mx-auto max-w-screen-xl px-4 py-1 sm:px-6 sm:py-1 lg:px-8">
            <div class="mt-8 grid grid-cols-1 gap-1 lg:grid-cols-2 lg:gap-0">
              <div class="relative h-64 overflow-hidden sm:h-80 lg:h-full">
                <img src="{{ asset('storage/images/rooms/' . $room->roomImage) }}" width="350" alt="img1" />
              </div>

              <div>
                <article class="space-y-4 text-gray-600">
                  <h1 class="font-semibold text-3xl">{{ $room->roomType }}</h1>

                  <p class="text-justify">
                      {{ $room->roomDesc }}
                  </p>
                </article>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="h-32 bg-gray-200 xl:mt-0 mt-5 md:mt-0 sm:mt-0">
        <div class="flex justify-start items-center">
          <h1 class="font-semibold mt-5 ml-10 text-lg pb-3">Average per Night</h1>
        </div>
        <section class="bg-white xl:py-12 mt-4 xl:mt-0">
          <div class="mx-auto max-w-screen-xl px-4 py-1 sm:px-6 sm:py-1 lg:px-8">
            <div class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-0">
              <div class="relative -mt-9 xl:mt-0 overflow-hidden sm:h-80 lg:h-full">
                <h1 class="p-5 text-2xl font-bold font-['sahitya'] text-primary">Not Available</h1>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  @endif

@endsection

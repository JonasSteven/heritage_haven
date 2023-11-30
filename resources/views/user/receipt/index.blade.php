@extends('user.layouts.main')

@section('container')
  <section class="p-5 mx-auto mt-5 rounded-lg md:w-3/4 md:mt-20 shadow-lg shadow-gray-200">
    <div class="ml-4">
      <h1 class="my-2 text-2xl font-semibold">Receipt</h1>
      <div class="w-full h-[.5px] bg-gray-200 relative">
        <div class="absolute w-20 h-1 bg-primary"></div>
      </div>
    </div>

    <div class="w-full p-5 py-8 mt-3">
      {{-- <div>
        <h1 class="font-light">Full Name</h1>
        <p class="font-bold font-['Inter']">Anton Budi Wawan</p>
      </div>

      <div class="mt-1">
        <h1 class="font-light">Room Type</h1>
        <p class="font-bold">BudiAntonWawan</p>
      </div>
      <div class="mt-1">
        <h1 class="font-light">Email</h1>
        <p class="font-bold">budi@gmail.com</p>
      </div>
      <div class="mt-1">
        <h1 class="font-light">Phone Number</h1>
        <p class="font-bold">089696622521</p>
      </div>
      <div class="mt-1">
        <h1 class="font-light">Country</h1>
        <p class="font-bold">BudiAntonWawan</p>
      </div> --}}
      <div>
        <dl class="-my-3 divide-y divide-gray-100 text-sm">
          <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
            <dt class="text-[15px] font-medium text-gray-900">Full Name</dt>
            <dd class="text-gray-700 sm:col-span-2">Anton Budi Wawan</dd>
          </div>

          <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
            <dt class="text-[15px] font-medium text-gray-900">Email</dt>
            <dd class="text-gray-700 sm:col-span-2">budi@gmail.com</dd>
          </div>

          <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
            <dt class="text-[15px] font-medium text-gray-900">Country</dt>
            <dd class="text-gray-700 sm:col-span-2">Indonesia</dd>
          </div>

          <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
            <dt class="text-[15px] font-medium text-gray-900">Phone Number</dt>
            <dd class="text-gray-700 sm:col-span-2">081235678</dd>
          </div>


          <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
            <dt class="text-[15px] font-medium text-gray-900">Room Type</dt>
            <dd class="text-gray-700 sm:col-span-2">Standard</dd>
          </div>

          <div class="w-full h-[2px] bg-gray-200 my-3"></div>

          <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
            <dt class="text-[15px] font-medium text-gray-900">Check In / Check Out</dt>
            <dd class="text-gray-700 sm:col-span-2">20-15-2023 / 21-22-2023</dd>
          </div>
          <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
            <dt class="text-[15px] font-medium text-gray-900">Payment</dt>
            <dd class="text-gray-700 sm:col-span-2">Visa Card</dd>
          </div>
          <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
            <dt class="text-[15px] font-medium text-gray-900">Price</dt>
            <dd class="text-gray-700 sm:col-span-2">Rp 3.000.000</dd>
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
@endsection

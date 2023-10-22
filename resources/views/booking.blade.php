@extends('layouts.main')
@section('container')
  <section class="mx-auto mt-10 w-[85%] p-3 flex flex-col">
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
  </section>

  <section class="w-[85%] mx-auto mt-36 flex gap-20">
    <div class="w-[55%]">
      <h1 class="text-4xl font-['inter'] mb-4">Guest Information</h1>
      <div class="h-[2px] w-full bg-slate-300 my-3"></div>

      <form action="">
        <div class="flex gap-20">

          <div>
            <label for="firstName" class="block my-3">First Name</label>
            <input type="text" name="firstName" size="30" class="rounded-md p-3 shadow-lg border border-slate-400"
              required />
          </div>
          <div>
            <label for="lastName" class="block my-3">Last Name</label>
            <input type="text" name="lastName" size="40" class="rounded-md p-3 shadow-lg border border-slate-400"
              required />
          </div>
        </div>

        <label for="email" class="block my-3">Email:</label>
        <input type="email" name="email" size="90" class="rounded-md p-3 shadow-lg border border-slate-400"
          required />

        <label for="countryRegion" class="block my-3">Country / Region:</label>
        <input type="text" name="countryRegion" size="90" class="rounded-md p-3 shadow-lg border border-slate-400"
           />

        <label for="phoneNumber" class="block my-3">Phone Number:</label>
        <input type="text" name="phoneNumber" size="90" class="rounded-md p-3 shadow-lg border border-slate-400"
          required />
    </div>

    <div class="border-2 font-['Sahitya'] border-slate-300 w-full p-10 h-full rounded-md">
      <h1 class="text-center bg-slate-100 p-3 font-['Sahitya'] text-2xl">Charges</h1>

      <div class="mt-5 text-xl">
        <div class="flex justify-between">
          <h1 class="">Room Charges</h1>
          <p>IDR 10.989.000</p>
        </div>
        <div class="flex justify-between my-5">
          <h1 class="">Services Charges and Tax</h1>
          <p>IDR 10.989.000</p>
        </div>
        <div class="h-[2px] w-full bg-slate-300 my-3"></div>
        <div class="flex justify-between mb-5">
          <h1 class="">Total Charges</h1>
          <p>IDR 10.989.000</p>
        </div>

        <button type="submit" class="w-full bg-[#8e732d] font-['inter'] mt-5 p-2 text-white font-semibold" id="submit" onclick="window.location.replace('/bookingPayment')">Book Now</button>

      </div>
    </div>
    </form>
  </section>
@endsection

@extends('layouts.main')
@section('container')
  <section class="mx-auto mt-10 w-[85%] p-3 flex flex-col">
    <h1 class="text-center p-3 bg-slate-100 font-['Sahitya']">The reservation will be closed in 05.00</h1>
    <h2 class="my-2 font-semibold">Stay Summary: Heritage haven</h2>
    <div class="w-full bg-slate-100 p-7 flex gap-5">
      <img src="img/img1.png" width="280" alt="" />
      <div class="w-full">
        <h1 class="text-2xl font-semibold my-4">Fri, 20 oct 2023 / Fri, 20 oct 2023</h1>
        <h3><span class="font-bold">Room & Guest:</span> 1 room, 1 adult, 0 Children</h3>
        <h5><span class="font-bold">Room Type:</span> King Size</h5>
        <div class="h-[2px] w-full bg-slate-300 my-3"></div>
        <h1 class="text-right font-['sahitya'] font-bold text-xl">Total Charges: IDR 5,000,000.00</h1>
      </div>
    </div>
  </section>

  <section class="w-[85%] mx-auto mt-32 bg-slate-100 p-7">
    <h1 class="text-2xl">Payment</h1>
    <div class="h-[2px] w-full bg-slate-300 my-3"></div>
    <div>
      <form action="" method="POST">

        <label for="paymentMethod" class="block my-3">Choose Payment Method:</label>
        <select id="payment" name="paymentMethod" class="w-[600px] p-3 border rounded-md border-slate-400 ">
          <option value="volvo">Bank Transfer</option>
          <option value="saab">Virtual Account</option>
          <option value="opel">Credit Card</option>
        </select>
        <label for="cardNumber" class="block my-3">Card Number:</label>
        <input type="text" name="cardNumber" class="w-[600px] rounded-md p-3 shadow-lg border border-slate-400" required />

        <label for="cardName" class="block my-3">Card Holder's Name:</label>
        <input type="text" name="cardName" class="w-[600px] rounded-md p-3 shadow-lg border border-slate-400" required />

        <label for="expiryDate" class="block my-3">Expiry Date:</label>
        <input type="date" name="expiryDate" size="30" class="rounded-md p-3 shadow-lg border border-slate-400" required />

        <button type="submit" class="w-64 block bg-[#8e732d] font-['roboto'] mt-5 p-3 text-sm text-white font-semibold">Complete Your
          Reservation</button>
      </form>
    </div>
  </section>
@endsection

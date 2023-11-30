@extends('user.layouts.main')

@section('container')
  <section>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8">
      <div class="flex items-center gap-3">
        <div class="h-8 w-2 rounded-lg bg-primary"></div>
        <h2 class="text-3xl font-['Inter'] sm:text-3xl">Receipt</h2>
      </div>
      <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16 lg:mt-5">


        <div>


          <h1 class="mt-10 text-gray-600 text-2xl font-semibold">The Best Living</h1>
          <p class="mt-2">Sed in libero sit amet mi venenatis faucibus. Donec porttitor enim sem. Curabitur tempus
            dignissim mi, eget sodales orci facilisis ac. Nunc a nisi at lacus posuere scelerisque eleifend.</p>

          <div>
            <h1 class="mt-10 text-gray-600 text-xl font-semibold mb-2">Features</h1>
            <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
              <li>
                Luxury Room
              </li>
              <li>
                Memorable city and pool views
              </li>
              <li>
                Special bathroom
              </li>
            </ul>
          </div>
          <div>
            <h1 class="mt-10 text-gray-600 text-xl font-semibold mb-2">Amenities</h1>

            <div>
              <h1 class=" text-gray-600 text-lg font-semibold my-2">Bath & Personal Care</h1>
              <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                <li>
                  Pillow menu
                </li>
                <li>
                  Separate shower and bath
                </li>
                <li>
                  Signature bed linen
                </li>
                <li>
                  Shangri-La bath products
                </li>
                <li>
                  Plush towels
                </li>
              </ul>
            </div>

            <div>
              <h1 class=" text-gray-600 text-lg font-semibold mt-7 mb-2">Media & Entertainment</h1>
              <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                <li>
                  57-channel satellite television
                </li>
                <li>
                  Wi-Fi access (fixed LAN and Wi-Fi)
                </li>
              </ul>
            </div>

            <div>
              <h1 class=" text-gray-600 text-lg font-semibold mt-7 mb-2">Office Equipment & Stationery</h1>
              <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                <li>
                  Electronic safe
                </li>
                <li>
                  Full-size executive writing desk
                </li>
                <li>
                  Independent fax line
                </li>
                <li>
                  International Direct Dial telephone
                </li>
                <li>
                  Voice mail
                </li>
              </ul>
            </div>
            <div>
              <h1 class=" text-gray-600 text-lg font-semibold mt-7 mb-2">Refreshments</h1>
              <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                <li>
                  Coffee / tea-making facilities
                </li>
                <li>
                  Mini-bar
                </li>
                <li>
                  24-hour room service
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="relative overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full lg:py-10">
          <h1 class="text-2xl font-['sahitya'] bg-slate-100 p-2 text-center">Ready to Book?</h1>
          <div>
            <form action="">
              <div class="box flex flex-col justify-between p-5">
                <div class="flex justify-between">
                  <p class="font-['sahitya'] text-xl">Check In <span>*</span></p>
                  <input type="date" class="input font-['sahitya']">
                </div>

                <div class="h-[2px] w-full bg-slate-200 my-2"></div>
              </div>

              <div class="box flex flex-col justify-between px-5 mb-5">
                <div class="flex justify-between">
                  <p class="font-['sahitya'] text-xl">Check Out <span>*</span></p>
                  <input type="date" class="input font-['sahitya']">
                </div>
                <div class="h-[2px] w-full bg-slate-200 my-2"></div>
              </div>

              <div class="box flex-col justify-between px-5">
                <div class="flex justify-between">
                  <p class="font-['sahitya'] text-xl">Total Guest <span>*</span></p>
                  <select name="adults" id="" class="input font-['sahitya']">
                    <option value="" disabled selected>Select your option</option>
                    <option value="1">1 Person</option>
                    <option value="2">2 People</option>
                    <option value="3">3 People</option>
                    <option value="4">4 People</option>
                  </select>
                </div>
                <div class="h-[2px] w-full bg-slate-200 my-2"></div>
              </div>
              <input type="submit" value="Book Now" class="bg-primary text-white px-12 py-2 mx-auto block mt-5 rounded">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

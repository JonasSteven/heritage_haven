@extends('user.layouts.main')
@section('container')
  <section class="bg-gray-100">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8">
      <div class="mx-auto max-w-lg text-center">
        <h2 class="text-3xl font-bold sm:text-4xl text-primary">Room Availability</h2>

        <p class="mt-4 text-black">
          This is our availability room that you can book :)
        </p>
      </div>

      <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8 mt-10">
        <div class="block rounded-lg p-4 shadow-xl shadow-indigo-100">

          <img alt="Home" src="{{ asset('assets/king_room.png') }}" />

          <div class="mt-2">
            <dl>
              <div>
                <dt class="sr-only">Price</dt>
              </div>

              <div>
                <dt class="sr-only">Address</dt>

                <dd class="font-semibold text-dark font-['sahitya'] text-xl my-1">King Size</dd>
                <p class="text-[12px] font-['sahitya'] tracking-wide">Lorem ipsum dolor, sit amet consectetur
                  adipisicing elit. Ea corporis architecto dolorem! Ad modi, voluptatem omnis adipisci repudiandae
                  laboriosam dolores!</p>
                <dd class="text-md-center text-dark mt-2 font-bold">$240,000</dd>
              </div>
            </dl>

            <div class="mt-3 flex items-center gap-8 text-xs">
              <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                <svg class="h-4 w-4 text-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                </svg>

                <div class="mt-1.5 sm:mt-0">
                  <p class="text-gray-500">Parking</p>

                  <p class="font-medium text-dark">2 spaces</p>
                </div>
              </div>

              <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                <svg class="h-4 w-4 text-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                </svg>

                <div class="mt-1.5 sm:mt-0">
                  <p class="text-gray-500">Bathroom</p>

                  <p class="font-medium text-dark">2 rooms</p>
                </div>
              </div>

              <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                <svg class="h-4 w-4 text-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                </svg>

                <div class="mt-1.5 sm:mt-0">
                  <p class="text-gray-500">Bedroom</p>

                  <p class="font-medium text-dark">4 rooms</p>
                </div>
              </div>
            </div>
          </div>
          <div class="flex justify-between items-center mt-7">
            <!-- Success -->
            <span
              class="inline-flex items-center justify-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="-ms-1 me-1.5 h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>

              <p class="whitespace-nowrap text-sm">Available</p>
            </span>


            <a href=""
              class="w-40 rounded-sm hover:shadow-sm transition-all duration-300 active:scale-95 block px-6 py-2 bg-primary text-white font-['sahitya'] text-center mr-3">Book
              Now</a>
          </div>

        </div>

        <div class="block rounded-lg p-4 shadow-xl shadow-indigo-100">

          <img alt="Home" src="{{ asset('assets/queen_room.png') }}" class="h-56 w-full rounded-md object-cover" />

          <div class="mt-2">
            <dl>
              <div>
                <dt class="sr-only">Price</dt>
              </div>

              <div>
                <dt class="sr-only">Address</dt>

                <dd class="font-semibold text-dark font-['sahitya'] text-xl my-1">Queen Size</dd>
                <p class="text-[12px] font-['sahitya'] tracking-wide">Lorem ipsum dolor, sit amet consectetur
                  adipisicing elit. Ea corporis architecto dolorem! Ad modi, voluptatem omnis adipisci repudiandae
                  laboriosam dolores!</p>
                <dd class="text-md-center text-dark mt-2 font-bold">$160,000</dd>
              </div>
            </dl>

            <div class="mt-3 flex items-center gap-8 text-xs">
              <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                <svg class="h-4 w-4 text-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                </svg>

                <div class="mt-1.5 sm:mt-0">
                  <p class="text-gray-500">Parking</p>

                  <p class="font-medium text-dark">2 spaces</p>
                </div>
              </div>

              <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                <svg class="h-4 w-4 text-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                </svg>

                <div class="mt-1.5 sm:mt-0">
                  <p class="text-gray-500">Bathroom</p>

                  <p class="font-medium text-dark">2 rooms</p>
                </div>
              </div>

              <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                <svg class="h-4 w-4 text-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                </svg>

                <div class="mt-1.5 sm:mt-0">
                  <p class="text-gray-500">Bedroom</p>

                  <p class="font-medium text-dark">2 rooms</p>
                </div>
              </div>
            </div>
          </div>
          <div class="flex justify-between items-center mt-7">
            <span class="inline-flex items-center justify-center rounded-full bg-red-100 px-2.5 py-0.5 text-red-700">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="-ms-1 me-1.5 h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
              </svg>

              <p class="whitespace-nowrap text-sm">Not Available</p>
            </span>


            <a href=""
              class="w-40 rounded-sm hover:shadow-sm transition-all duration-300 active:scale-95 block px-6 py-2 bg-primary text-white font-['sahitya'] text-center mr-3">Book
              Now</a>
          </div>

        </div>

        <div class="block rounded-lg p-4 shadow-xl shadow-indigo-100">

          <img alt="Home" src="{{ asset('assets/about_bg.png') }}" class="h-56 w-full rounded-md object-cover" />

          <div class="mt-2">
            <dl>
              <div>
                <dt class="sr-only">Price</dt>
              </div>

              <div>
                <dt class="sr-only">Address</dt>

                <dd class="font-semibold text-dark font-['sahitya'] text-xl my-1">Standard Size</dd>
                <p class="text-[12px] font-['sahitya'] tracking-wide">Lorem ipsum dolor, sit amet consectetur
                  adipisicing elit. Ea corporis architecto dolorem! Ad modi, voluptatem omnis adipisci repudiandae
                  laboriosam dolores!</p>
                <dd class="text-md-center text-dark mt-2 font-bold tracking-wider">$100,000</dd>
              </div>
            </dl>

            <div class="mt-3 flex items-center gap-8 text-xs">
              <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                <svg class="h-4 w-4 text-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                </svg>

                <div class="mt-1.5 sm:mt-0">
                  <p class="text-gray-500">Parking</p>

                  <p class="font-medium text-dark">1 spaces</p>
                </div>
              </div>

              <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                <svg class="h-4 w-4 text-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                </svg>

                <div class="mt-1.5 sm:mt-0">
                  <p class="text-gray-500">Bathroom</p>

                  <p class="font-medium text-dark">1 rooms</p>
                </div>
              </div>

              <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                <svg class="h-4 w-4 text-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                </svg>

                <div class="mt-1.5 sm:mt-0">
                  <p class="text-gray-500">Bedroom</p>

                  <p class="font-medium text-dark">1 rooms</p>
                </div>
              </div>
            </div>
          </div>
          <div class="flex justify-between items-center mt-7">
            <!-- Success -->
            <span
              class="inline-flex items-center justify-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="-ms-1 me-1.5 h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>

              <p class="whitespace-nowrap text-sm">Available</p>
            </span>


            <a href=""
              class="w-40 rounded-sm hover:shadow-sm transition-all duration-300 active:scale-95 block px-6 py-2 bg-primary text-white font-['sahitya'] text-center mr-3">Book
              Now</a>
          </div>

        </div>

      </div>
    </div>
  </section>
@endsection

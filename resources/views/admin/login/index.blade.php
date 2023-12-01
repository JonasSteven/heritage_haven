<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heritage Haven</title>
    <link rel = "icon" href = "{{ asset('assets/logo.png') }}">
    @vite('resources/css/app.css')
</head>
<body>
 <!-- component -->
    <div class="bg-white lg:w-4/12 md:6/12 w-10/12 m-auto my-32 shadow-2xl">
        <div class="py-8 px-8 rounded-xl">
            <h1 class="font-medium text-2xl mt-3 text-center">Login</h1>
            <form action="/admin/login" method="POST" class="mt-6">
                @csrf

                <div class="my-5 text-sm">
                    <label for="username" class="block text-black">Username</label>
                    <input type="text" autofocus id="username" name="username" class="rounded-sm px-4 py-3 mt-3 focus:outline-none bg-gray-100 w-full" placeholder="Username" value="{{ old('username') }}">
                    @error('username')
                        <div class="text-red-600 font-bold font-['Poppins']">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="my-5 text-sm">
                    <label for="password" class="block text-black">Password</label>
                    <input type="password" id="password" name="password" class="rounded-sm px-4 py-3 mt-3 focus:outline-none bg-gray-100 w-full" placeholder="Password" value="{{ old('password') }}">
                    @error('password')
                        <div class="text-red-600 font-bold font-['Poppins']">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <button type="submit" class="block text-center text-white bg-red-500 p-3 duration-300 rounded-lg">Login</button>
                @if (session()->has('error'))
                    <div class="text-red-600 font-bold font-['Poppins']">
                        {{ session('error') }}
                    </div>
                @endif
            </form>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel = "icon" href = "{{ asset('assets/logo.png') }}">
    <script src="https://kit.fontawesome.com/99c2f1d2d2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Sahitya&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Kadwa&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>About Us</title>
</head>
<body>
    {{-- NAVBAR --}}
    @include('user.navbar.navbar')

    {{-- IMAGE --}}
    <div class="relative overflow-hidden h-screen bg-cover bg-no-repeat" style="background-position: 50%; background-image: url('assets/about_bg.png'); height: 636px; width: 100% background-size: cover; background-position: center; position: relative; justify-content: space-between; display: flex">
        <div class="absolute h-full w-full overflow-hidden">
            <div class="flex h-full items-center justify-center text-center">
                <div class="text-white" style="font-family: Sahitya">
                    <h4 class="text-3xl mb-8">Our History</h4>
                    <h2 class="text-5xl mb-16">Getting to Know Us Closer</h2>
                </div>
            </div>
        </div>
    </div>

    {{-- ABOUT US --}}
    <div class="flex justify-center mb-6 sm:mb-6 mt-15 md:mb-6 lg:mb-0 xl:mb-0 text-center mt-14">
        <div class="max-w-[700px] text-center">
            <h2 class="subtitle mb-6 text-center text-4xl font-bold" style="font-family: Sahitya">
                About Us
            </h2>
        </div>
    </div>

    <div class="about_section">
        <div class="container">
            <section class="about">
                <div class="about_content">
                    <h2>Heritage Haven</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mollis lorem in elit convallis, condimentum imperdiet diam rutrum. Etiam accumsan at dolor quis auctor. Mauris tincidunt tristique ex rutrum hendrerit. Phasellus mattis consectetur odio, non dictum dui tristique ac. Ut eu sagittis turpis. Fusce efficitur sapien sed ipsum dapibus, ut cursus diam gravida. Nulla facilisi. In ornare, lacus non sodales rhoncus, nulla mauris pulvinar mi, quis feugiat dolor tellus a tortor.<br><br>Sed in libero sit amet mi venenatis faucibus. Donec porttitor enim sem. Curabitur tempus dignissim mi, eget sodales orci facilisis ac. Nunc a nisi at lacus posuer scelerisque eleifend.
                    </p>
                </div>
                <div class="about_image">
                    <img src="assets/about1_2.png">
                </div>
            </section>
        </div>

        <div class="container">
            <section class="about">
                <div class="about_image">
                    <img src="assets/about2_2.png">
                </div>
                <div class="about_content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mollis lorem in elit convallis, condimentum imperdiet diam rutrum. Etiam accumsan at dolor quis auctor. Mauris tincidunt tristique ex rutrum hendrerit. Phasellus mattis consectetur odio, non dictum dui tristique ac. Ut eu sagittis turpis. Fusce efficitur sapien sed ipsum dapibus, ut cursus diam gravida. Nulla facilisi. In ornare, lacus non sodales rhoncus, nulla mauris pulvinar mi, quis feugiat dolor tellus a tortor.<br><br>Sed in libero sit amet mi venenatis faucibus. Donec porttitor enim sem. Curabitur tempus dignissim mi, eget sodales orci facilisis ac. Nunc a nisi at lacus posuer scelerisque eleifend.
                    </p>
                </div>
            </section>
        </div>
    </div>
    
    {{-- FOOTER --}}
    @include('user.navbar.footer')

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
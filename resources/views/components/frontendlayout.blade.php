<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SION</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        p {
            margin: 10px;
        }

        #controls-carousel div {
            min-height: 640px !important;

        }

        #controls-carousel img {
            width: 100%;
            min-height: 640px !important;
        }
    </style>
</head>

<body>
    {{-- Topbar --}}
    <x-topbar />
    {{-- Banner --}}
    <x-banner />
    {{-- Navbar --}}
    <x-navbar />
    {{-- Carousels --}}


    <main>
        {{ $slot }} <br>
    </main>
    <footer class=" bg-blue-200 py-10 h-80">
        <div class=" grid grid-cols-5 m-4 justify-center">
            <div class=" col-span-2 py-3">
                <div class="">
                    <h1 class=" text-1xl font-bold">Contact Us</h1>
                    <h1>
                        <i class="fa-solid fa-location-dot"></i>{{ $school->address }}
                    </h1>
                    <span class=" text-end">
                        <i class="fa-regular fa-envelope"></i>{{ $school->email }}
                    </span>
                    <span>
                        <h1>
                            <i class="fa-solid fa-address-book"></i> +977:<span>{{ $school->tel_1 }}</span>/
                            <span>+977:</span> <span>{{ $school->tel_2 }}</span>
                        </h1>
                    </span>
                    <span>
                        <i class="fa-regular fa-clock"></i> <span>Office Hour :</span>
                        <span>{{ $school->open_hours }}</span>
                    </span>
                </div>
            </div>
            <div class=" col-span-1 py-3">
                <h1 class=" font-bold text-1xl">Quick Links</h1>
                <div>
                    <a href="{{ route('notice') }}">Notice</a>
                </div>
                <div>
                    <a href="{{route('contact')}}">Message Us</a>
                </div>
            </div>
            <div class=" col-span-2 ">
                {{-- <h1 class=" font-bold text-1xl">Map</h1> --}}
             {{-- <img src="{{Storage::url($school->map)}}" alt="" width=""> --}}

        <div class="">
                    {!!$school->map!!}
                </div>
            </div>
        </div>


     </footer>
</body>

</html>

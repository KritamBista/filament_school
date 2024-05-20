<div class=" bg-blue-800 py-2 px-3 text-white ">
    <div class=" container grid grid-cols-2 ">
        <div>
            <span><i class="fa-solid fa-location-dot"></i>{{ $school->address }}</span>
            <span class=" mx-2 "><i class="fa-solid fa-envelope me-1 "></i>{{ $school->email }}</span>
        </div>
        <div class=" text-end px-6">
            <a href="{{ $school->facebook }}"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="{{ $school->linkedIn }}"><i class="fa-brands fa-linkedin mx-2"></i></a>
            <a href="{{ $school->youtube }}"><i class="fa-brands fa-youtube"></i></a>
            <span>|</span>
            <a href="https://sionschool.edu.np:2096/" class=" bg-blue-500 text-white px-2 py-2 rounded">Web Mail</a>
        </div>
    </div>

</div>

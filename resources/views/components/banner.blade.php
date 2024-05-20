<div class=" bg-blue-200 py-2">
    <div class=" container grid grid-cols-12 justify-center ">
        <div class="col-span-2 ">
            <img src="{{ Storage::url($school->logo) }}" alt="" class=" mx-1">
        </div>
        <div class="col-span-10 ">
            <h1 class=" text-4xl font-extrabold">{{ $school->name }}</h1>
            <div class=" font-bold mx-1">

                {{ $school->slogan }}

            </div>
        </div>

    </div>
</div>

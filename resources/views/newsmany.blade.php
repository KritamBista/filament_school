<x-frontendlayout>
    <section class=" container ">
        <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500  h-60 grid  justify-center items-center">
            <h1 class=" text-center font-bold text-3xl">News &Events</h1>
        </div>

    </section>

    <section class=" py-10">
        <div class=" container grid grid-cols-4 gap-3 mx-3 py-2 ">
            <div class=" col-span-3 py-4">

                <div class="">
                    <h1 class=" text-2xl font-bold">{{ $newsmany->tittle }}</h1>
                    <img src="{{ Storage::url($newsmany->image) }}" alt="" class=" w-4/5 ">
                </div>
                <div class="py-3">
                    {!! $newsmany->description !!}
                </div>


            </div>

            <div class=" col-span-1  py-4">
                <h1 class=" font-bold text-2xl text-center">Events</h1>
                @foreach ($news as $new)
                    <div class=" hover:shadow-md m-3">
                        <a href="{{ route('newsmany', $new->id) }}">

                            <img src="{{ Storage::url($new->image) }}" alt="" class=" object-cover">
                            <h1 class=" ">{{ $new->tittle }}</h1>
                        </a>

                    </div>
                @endforeach


            </div>
        </div>
    </section>
</x-frontendlayout>

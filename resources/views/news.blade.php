<x-frontendlayout>
    <section class=" container ">
        <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500  h-60 grid  justify-center items-center">
            <h1 class=" text-center font-bold text-3xl">News &Events</h1>
        </div>

    </section>

   <section class=" py-10">
    <div class=" container grid grid-cols-4 mx-3 py-3">
          <div class=" col-span-3">
            @foreach ($news as $new)
            <div class="">
                <h1 class=" text-2xl font-bold">{{$new->tittle}}</h1>
                <img src="{{Storage::url($new->image)}}" alt="" class="w-1/2 ">
            </div>
            <div class="py-3">
                {!!$new->description!!}
            </div>

            @endforeach
          </div>
        {{-- <div class=" col-span-1">
            @foreach ($news as $new )
            <div>
                <img src="{{Storage::url($new->image)}}" alt="">
                <h1>{{$new->tittle}}</h1>
            </div>


            @endforeach


        </div> --}}
    </div>
   </section>
</x-frontendlayout>

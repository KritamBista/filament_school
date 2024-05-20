<x-frontendlayout>
    <section class=" container  ">
        <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500  h-60 grid  justify-center items-center">
            <h1 class=" text-center font-bold text-3xl">Galleries</h1>
        </div>
    </section>

    <section class=" py-10">
        <div class=" container grid grid-cols-4 gap-2 bg-blue-50">
            @foreach ($galleries as $gallery)
                <div class=" border hover:shadow-lg m-2">
                  <a href="{{$gallery->url}}">
                    <img src="{{ Storage::url($gallery->image) }}" alt="" class=" w-80 h-52 object-fill">
                    <h1 class=" font-bold text-center">{{ Str::words($gallery->tittle, '7', '....') }}</h1>
                  </a>
                </div>
            @endforeach
        </div>
    </section>
</x-frontendlayout>

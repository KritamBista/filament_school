<x-frontendlayout>
    <section class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500  h-52 grid  justify-center items-center">
        <div>
            <h1 class=" text-3xl font-bold">{{ $about->tittle }}</h1>
            {{-- {!!$about->description!!} --}}
        </div>


    </section>
    <section>
        <div class="py-10 mx-3">
            {!! $about->description !!}
        </div>
        


    </section>
</x-frontendlayout>

<x-frontendlayout>
    <x-slides/><br>

    {{-- Message From Principal --}}
    <div class="  container grid grid-cols-3 py-10 mx-2 gap-10">
        <div class=" col-span-2 border-r">
            <h1 class=" font-extrabold text-3xl ">{{ $message->tittle }}</h1>
            <img src="{{ Storage::url($message->image) }}" alt="" class=" w-80 float-left pe-3 py-4 px-4">
            {!! Str::words($message->description, '85', '........') !!} <span class=" font-light"><a href="{{route('about',$message->slug)}}">Read more</a></span>
        </div>
        {{-- Notice Section --}}
        <div class=" col-span-1 ">
            <h1 class=" font-extrabold text-3xl">Notice</h1>
            <ul class=" bg-cyan-100 overflow-hidden ">
                @foreach ($notices as $notice)
                  <div class=" border-b">
                    <li class=" py-2 ">{{ $notice->tittle }}</li>
                    <span class="">{{ nepalidate($notice->created_at) }}</span>
                  </div>
                @endforeach
            </ul>

        </div>
    </div>

    {{-- Facillities Section --}}
    <section class="py-10 bg bg-blue-50 " id="facilty">
        <div>
            <h1 class=" font-bold text-3xl text-center">Our Facillities</h1>
        </div>
        <div class=" container grid grid-cols-4 gap-4 mx-5  py-5">
            @foreach ($facillities as $facillity)
                <div class=" hover:shadow-lg text-center">
                    <a href="#facilty" data-modal-target="defaultModal{{ $facillity->id }}"
                        data-modal-toggle="defaultModal{{ $facillity->id }}"><img
                            src="{{ Storage::url($facillity->image) }}" alt="" class=" w-72 h-60 object-cover">
                        <h5 class=" font-mono">{{ $facillity->tittle }}</h5>
                    </a>
                </div>
                {{-- Use of Modal --}}
                <div id="defaultModal{{ $facillity->id }}" tabindex="-1" aria-hidden="true"
                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    {{ $facillity->tittle }}
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="defaultModal{{ $facillity->id }}">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only"></span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                    <img src="{{ Storage::url($facillity->image) }}" alt="">
                                    {!! $facillity->description !!}
                                </p>

                            </div>


                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    {{-- Gallery Section --}}


    <section class=" py-10">
        <div class=" text-center text-3xl font-bold">
            <h1>Galleries</h1>
        </div>

        <div class="container grid grid-cols-4">
            @foreach ($galleries as $gallery)
                <div class=" mx-5 py-5 box-decoration-clone">
                    <a href="{{ $gallery->url }}">
                        <img src="{{ Storage::url($gallery->image) }}" alt="" class=" h-52">
                        <h4 class=" text-center font-medium ">{{ Str::words($gallery->tittle, '6', '...') }}</h4>
                    </a>
                </div>
            @endforeach


        </div>
    </section>
    {{-- News Events Section --}}

    <section class=" py-10 bg-blue-50">
        <div class=" text-center text-3xl font-bold">
            <h1>Events</h1>
        </div>

        <div class="container grid grid-cols-4">
            @foreach ($news as $news)
                <div class=" mx-5 py-5 box-decoration-clone">
                    <a href="{{route('newsmany',$news->id)}}">
                        <img src="{{ Storage::url($news->image) }}" alt="" class=" h-52">
                        <h4 class=" text-center font-medium ">{{$news->tittle}}</h4>
                    </a>
                </div>
            @endforeach


        </div>
    </section>



</x-frontendlayout>

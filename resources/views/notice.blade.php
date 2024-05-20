<x-frontendlayout>
    <Section
        class=" py-10 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500  h-60 grid  justify-center items-center">
        <div class=" font-bold">
            <h1 class=" text-2xl font-bold text-center">Notices</h1>
        </div>


    </Section>


    <section class=" py-10">



        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                            Published on
                        </th>
                        <th scope="col" class="px-6 py-3 bg-blue-50">
                            subject
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                            Notice Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notices as $notice)
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                {{ nepalidate($notice->created_at) }}
                            </th>
                            <td class="px-6 py-4 font-bold bg-blue-50">
                                {{ $notice->tittle }}
                            </td>
                            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                notice
                            </td>
                            <td class="px-6 py-4">


                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    <a href="{{ Storage::url($notice->notice) }}">Preview</a>
                                </button>



                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>



    </section>

</x-frontendlayout>

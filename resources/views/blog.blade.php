    @extends('frontend.layouts.app')
    @section('content')
        <section class="py-44">
            <div class="mx-auto container px-4 ">
                <div class="flex flex-col jusitfy-start items-start">
                    <div class="w-full px-4 pb-20">
                        <div class="mt-3">
                            <h1
                                class="text-3xl lg:text-4xl tracking-tight font-semibold leading-8 lg:leading-9 text-gray-800 ">
                                Favourites</h1>
                        </div>
                        <div class="mt-4">
                            <p class="text-2xl tracking-tight leading-6 text-gray-600 dark:text-white">03 items</p>
                        </div>
                        <div class="mt-6">
                            <a href="{{ route('blogfrom') }}" class="bg-green-500 px-6 py-3  inline-block">Create</a>
                        </div>
                    </div>
                    @if (session('SUCCESS'))
                        <div id="successMessage"
                            class="px-4 py-2 m-4 max-w-3xl mx-auto text-center text-gray-500 border border-green-600 bg-green-600">
                            {{ session('SUCCESS') }}
                        </div>
                    @endif

                    @if (session('ERROR'))
                        <div id="successMessage"
                            class="px-4 py-2 m-4 max-w-3xl mx-auto text-center text-white border border-red-600 bg-red-600">
                            {{ session('ERROR') }}
                        </div>
                    @endif
                    @if (!empty($createblogs))
                        <div class="flex flex-wrap">
                            @foreach ($createblogs as $createblog)
                                <div class="md:w-1/3 w-full px-4">
                                    <div class="">
                                        <div class="flex flex-col">
                                            <div class="relative">
                                                <img class=" object-contain w-full"
                                                    src="{{ asset('storage/' . $createblog->images) }}" alt="bag" />
                                                <div class="top-4 right-4 absolute space-y-2">
                                                    <a href="{{ route('copyblog', $createblog->id) }}"
                                                        class=" focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 block p-1.5 bg-green-600 hover:bg-green-400 text-white ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class=""
                                                            width="14" height="14" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                                                        </svg>
                                                    </a>
                                                    <a href="{{ route('editblog', $createblog->id) }}"
                                                        class=" focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 block p-1.5 bg-green-600 hover:bg-green-400 text-white ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class=""
                                                            width="14" height="14" viewBox="0 0 20 20" fill="currentColor">
                                                            <path
                                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                        </svg>
                                                    </a>
                                                    <a href="{{ route('deleteblog', $createblog->id) }}"
                                                        class=" focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 block p-1.5 bg-green-600 hover:bg-green-400 text-white ">
                                                        <svg class="fil-current" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13 1L1 13" stroke="currentColor" stroke-width="1.25"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M1 1L13 13" stroke="currentColor" stroke-width="1.25"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="mt-6 flex justify-between items-center">
                                                <div class="flex justify-center items-center">
                                                    <p
                                                        class="tracking-tight text-2xl font-semibold leading-6 text-gray-800 dark:text-white">
                                                        {{ $createblog->title }}</p>
                                                </div>
                                                <div class="flex justify-center items-center">
                                                    <button aria-label="show menu" onclick="handleClick1(true)"
                                                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-2.5 px-2 bg-green-600 hover:bg-green-400 text-white ">
                                                        <svg id="chevronUp1" class="fill-stroke" width="10" height="6"
                                                            viewBox="0 0 10 6" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9 5L5 1L1 5" stroke="currentColor" stroke-width="1.25"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <svg id="chevronDown1" class="hidden fill-stroke" width="10"
                                                            height="6" viewBox="0 0 10 6" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.25"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div id="menu1" class="flex flex-col jusitfy-start items-start mt-12">
                                                <div>
                                                    <p
                                                        class="tracking-tight text-xs leading-3 text-gray-800 dark:text-white">
                                                        {{ $createblog->code }}</p>
                                                </div>
                                                <div class="mt-2">
                                                    <p
                                                        class="tracking-tight text-base font-medium leading-4 text-gray-800 dark:text-white">
                                                        {{ $createblog->discription }}</p>
                                                </div>
                                                <div class="mt-2">
                                                    <p
                                                        class="tracking-tight text-base font-medium leading-4 text-gray-800 dark:text-white">
                                                        {{ $createblog->color }}</p>
                                                </div>
                                                <div class="mt-6">
                                                    <p
                                                        class="tracking-tight text-base font-medium leading-4 text-gray-800 dark:text-white">
                                                        {{ $createblog->size }}</p>
                                                </div>
                                                <div class="mt-6">
                                                    <p
                                                        class="tracking-tight text-base font-medium leading-4 text-gray-800 dark:text-white">
                                                        $
                                                        {{ $createblog->price }}</p>
                                                </div>
                                                <div
                                                    class="flex jusitfy-between flex-col lg:flex-row items-center mt-10 w-full space-y-4 lg:space-y-0 lg:space-x-4 xl:space-x-8">
                                                    <div class="w-full">
                                                        <button
                                                            class="focus:outline-none focus:ring-gray-800 focus:ring-offset-2 focus:ring-2 text-gray-800   w-full tracking-tight py-4 text-lg leading-4 hover:bg-green-600 hover:text-white  bg-white border border-gray-800 dark:hover:text-white">More
                                                            information</button>
                                                    </div>
                                                    <div class="w-full">
                                                        <button
                                                            class="focus:outline-none focus:ring-gray-800 focus:ring-offset-2 focus:ring-2 text-white w-full tracking-tight py-4 text-lg leading-4 bg-green-600 hover:bg-green-400  border border-gray-800 ">Add
                                                            to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endsection

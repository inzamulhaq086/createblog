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
                    </div>
                    {{-- @if (!empty($roadmaps)) --}}
                        {{-- @foreach ($roadmaps as $roadmap) --}}
                            <div class="md:w-1/3 w-full px-4">
                                <div class="">
                                    <div class="flex flex-col">
                                        <div class="relative">
                                            <img class="hidden object-contain w-full lg:block"
                                                src="{{ asset('images/Rectangle-23.png') }}" alt="bag" />
                                            <button aria-label="close"
                                                class="top-4 right-4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 absolute p-1.5 bg-green-600 hover:bg-green-400 text-white ">
                                                <svg class="fil-current" width="14" height="14" viewBox="0 0 14 14"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13 1L1 13" stroke="currentColor" stroke-width="1.25"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M1 1L13 13" stroke="currentColor" stroke-width="1.25"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="mt-6 flex justify-between items-center">
                                            <div class="flex justify-center items-center">
                                                <p
                                                    class="tracking-tight text-2xl font-semibold leading-6 text-gray-800 dark:text-white">
                                                    New York Streak</p>
                                            </div>
                                            <div class="flex justify-center items-center">
                                                <button aria-label="show menu" onclick="handleClick1(true)"
                                                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-2.5 px-2 bg-green-600 hover:bg-green-400 text-white ">
                                                    <svg id="chevronUp1" class="fill-stroke" width="10" height="6"
                                                        viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9 5L5 1L1 5" stroke="currentColor" stroke-width="1.25"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <svg id="chevronDown1" class="hidden fill-stroke" width="10" height="6"
                                                        viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.25"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="menu1" class="flex flex-col jusitfy-start items-start mt-12">
                                            <div>
                                                <p class="tracking-tight text-xs leading-3 text-gray-800 dark:text-white">
                                                    MK617</p>
                                            </div>
                                            <div class="mt-2">
                                                <p
                                                    class="tracking-tight text-base font-medium leading-4 text-gray-800 dark:text-white">
                                                    Beige brown</p>
                                            </div>
                                            <div class="mt-6">
                                                <p
                                                    class="tracking-tight text-base font-medium leading-4 text-gray-800 dark:text-white">
                                                    42 size</p>
                                            </div>
                                            <div class="mt-6">
                                                <p
                                                    class="tracking-tight text-base font-medium leading-4 text-gray-800 dark:text-white">
                                                    $1,000</p>
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
                        {{-- @endforeach
                    @endif --}}
                </div>
            </div>
        </section>
    @endsection

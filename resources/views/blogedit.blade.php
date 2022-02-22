@extends('backend.layouts.app')
@section('content')
    <div class="container mx-auto  py-24">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="bg-white-500 flex-1 p-3 overflow-hidden">
                    <div class="flex flex-col">
                        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                            <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                                <div
                                    class="bg-green-600 py-8  px-4 font-semibold text-2xl  text-white border-solid border-gray-200 border-b">
                                    Update Blog
                                </div>
                                <div class="p-3">
                                    <form class="w-full" method="POST"
                                        action="{{ route('updateblog', $blogpostedit->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-4">
                                                <div class="mt-1">
                                                    <label
                                                        class="py-2 block uppercase tracking-wide text-gray-700 text-xs font-light mb-1">
                                                        Title
                                                    </label>
                                                    <input
                                                        class="appearance-none block w-full  text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                                        name="title" type="text" placeholder="Please write here your title"
                                                        value="{{ $blogpostedit->title }}">
                                                    @error('title')
                                                        <div class="text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mt-1">
                                                    <label
                                                        class="py-2 block uppercase tracking-wide text-gray-700 text-xs font-light mb-1">
                                                        Colors
                                                    </label>
                                                    <input
                                                        class="appearance-none block w-full  text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                                        name="color" type="text" placeholder="Please write here your color"
                                                        value="{{ $blogpostedit->color }}">
                                                    @error('color')
                                                        <div class="text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mt-1">
                                                    <label
                                                        class="py-2 block uppercase tracking-wide text-gray-700 text-xs font-light mb-1">
                                                        Code
                                                    </label>
                                                    <input
                                                        class="appearance-none block w-full  text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                                        name="code" type="text" placeholder="Please write here your code"
                                                        value="{{ $blogpostedit->code }}">
                                                    @error('code')
                                                        <div class="text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mt-1">
                                                    <label
                                                        class="py-2 block uppercase tracking-wide text-gray-700 text-xs font-light mb-1">
                                                        Price
                                                    </label>
                                                    <input
                                                        class="appearance-none block w-full  text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                                        name="price" type="text" placeholder="Please write here your price"
                                                        value="{{ $blogpostedit->price }}">
                                                    @error('price')
                                                        <div class="text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mt-1">
                                                    <label
                                                        class="py-2 block uppercase tracking-wide text-gray-700 text-xs font-light mb-1">
                                                        Size
                                                    </label>
                                                    <input
                                                        class="appearance-none block w-full  text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                                        name="size" type="text" placeholder="Please write here your size"
                                                        value="{{ $blogpostedit->size }}">
                                                    @error('size')
                                                        <div class="text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mt-1">
                                                    <label
                                                        class="py-2 block uppercase tracking-wide text-gray-700 text-xs font-light mb-1">
                                                        Discriptions
                                                    </label>
                                                    <textarea id="about" name="discription" rows="6"
                                                        class="appearance-none block w-full  text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                                        placeholder="Please write here your discription">{{ $blogpostedit->discription }}</textarea>
                                                    @error('discription')
                                                        <div class="text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div>
                                                    <label class="py-2 block text-sm font-medium text-gray-700">
                                                        Cover photo
                                                    </label>
                                                    <img class="w-20"
                                                        src="{{ asset('storage/' . $blogpostedit->images) }}" alt="">
                                                    <div
                                                        class="mt-1 flex justify-center px-6 pt-7 pb-8 border-2 border-gray-300 border-dashed rounded-md">
                                                        <div class="space-y-1 text-center">
                                                            <svg class="mx-auto h-12 w-12 text-gray-400"
                                                                stroke="currentColor" fill="none" viewBox="0 0 48 48"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                                    stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                            <div class="flex text-sm text-gray-600">
                                                                <label for="file-upload"
                                                                    class="relative cursor-pointer bg-white rounded-md font-medium text-green-600 hover:text-green-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-green-500">
                                                                    <span>Upload a file</span>
                                                                    <input id="file-upload" name="images" type="file"
                                                                        class="sr-only">
                                                                    @error('images')
                                                                        <div class="text-red-600">{{ $message }}</div>
                                                                    @enderror
                                                                </label>
                                                                <p class="pl-1">or drag and drop</p>
                                                            </div>
                                                            <p class="text-xs text-gray-500">
                                                                PNG, JPG, GIF up to 10MB
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit"
                                                    class="w-full my-4 inline-flex justify-center py-4 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('add Blogs') }}
        </h2>
    </x-slot>


    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="max-w-7x2 mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-2 bg-indigo-50 border-b border-gray-200 card">
                        <div class="card-body">
                            <form action="{{ Route('blogAdd') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <a href="{{ Route('blogs') }}"
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">{{ __('back') }}
                                </a>

                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <x-label for="name" :value="__('Name')" />
                                        <x-input id="name"
                                            class="block mt-1 w-full @error('name') is-invalid @enderror" type="text"
                                            name="name" autocomplete="name" />
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <x-label for="category" :value="__('Category')" />
                                        <select
                                            class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('category') is-invalid @enderror"
                                            name="category">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        @error('category')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <x-label for="title" :value="__('Sub Title')" />
                                        <x-input id="title"
                                            class="block mt-1 w-full @error('title') is-invalid @enderror"
                                            type="text" name="title" autocomplete="title" />
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-3">
                                        <x-label for="description" :value="__('Description')" />
                                        <textarea name="description"
                                            class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('title') is-invalid @enderror"></textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <x-label for="image" :value="__('Image')" />
                                        <input type="file" name="image" id="image"
                                            class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 fileupload">
                                        @error('image')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-4">
                                        <x-label for="ref1" :value="__('Refrens 1')" />
                                        <textarea name="ref1"
                                            class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('title') is-invalid @enderror"></textarea>
                                        @error('ref1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="flex items-center justify-center mt-4 ">
                                        <x-button class="ml-3">
                                            {{ __('submit') }}
                                        </x-button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('add Pages') }}
        </h2>
    </x-slot>


    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="max-w-7x2 mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-2 bg-indigo-50 border-b border-gray-200 card">
                        <div class="card-body">
                            <form action="{{ Route('addEdit', ['id' => $data->id]) }}" method="post">
                                @csrf
                                <a href="{{ Route('pages') }}"
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">{{ __('back') }}
                                </a>
                                <div class="row mt-4">
                                    <div class="col-md-4">
                                        <x-label for="name" :value="__('Name')" />
                                        <x-input id="name"
                                            class="block mt-1 w-full @error('name') is-invalid @enderror" type="text"
                                            name="name" autocomplete="name" value="{{ $data->name }}" />
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <x-label for="status" :value="__('Status')" />
                                        <select
                                            class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                            name="status">
                                            <option value="active" {{ $data->status == 'active' ? 'selected' : '' }}>
                                                Active</option>
                                            <option value="inActive"
                                                {{ $data->status == 'inActive' ? 'selected' : '' }}>In Active</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <x-label for="menu" :value="__('Show Main Menu')" />
                                        <select
                                            class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                            name="show_front">
                                            <option value="1"
                                                {{ $data->show_front == 'active' ? 'selected' : '' }}> Yes</option>
                                            <option value="0" {{ $data->show_front == '0' ? 'selected' : '' }}>No
                                            </option>
                                        </select>
                                    </div>
                                    <div
                                        class="flex
                                            items-center justify-center mt-4 ">
                                        <x-button class="ml-3">
                                            {{ __('update') }}
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

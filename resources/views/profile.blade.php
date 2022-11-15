<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="max-w-7x2 mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-2 bg-indigo-50 border-b border-gray-200 card">
                        <div class="card-body">
                            <form action="{{ Route('profile') }}" method="post">
                                @csrf
                                <a href="{{ Route('dashboard') }}"
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">{{ __('back') }}
                                </a>
                                <div class="row mt-4">
                                    <div class="col-md-4">
                                        <x-label for="name" :value="__('Name')" />
                                        <x-input id="name"
                                            class="block mt-1 w-full @error('name') is-invalid @enderror" type="text"
                                            name="name" autocomplete="name" value="{{ Auth::user()->name }}" />
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <x-label for="email" :value="__('Email')" />
                                        <x-input id="email"
                                            class="block mt-1 w-full @error('email') is-invalid @enderror"
                                            type="text" name="email" autocomplete="email"
                                            value="{{ Auth::user()->email }}" />
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-4">
                                        <x-label for="password" :value="__('Password')" />
                                        <x-input id="password"
                                            class="block mt-1 w-full @error('password') is-invalid @enderror"
                                            type="password" name="password" autocomplete="password" />
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <x-label for="ConfirmPassword" :value="__('Confirm Password ')" />
                                        <x-input id="ConfirmPassword"
                                            class="block mt-1 w-full @error('confirmPassword') is-invalid @enderror"
                                            type="password" name="confirmPassword" autocomplete="password" />
                                        @error('confirmPassword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div
                                        class="flex
                                            items-center justify-center mt-4 ">
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

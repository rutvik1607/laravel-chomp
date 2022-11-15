<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x2 mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-indigo-50 border-b border-gray-200 text-center text-danger">
                    <?php print_r(Session::all()); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="max-w-7x2 mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg card">
                    <div class="card-heade">
                        Featured
                    </div>
                    <div class="card-body">
                    </div>
                    <div class="card-footer text-muted">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

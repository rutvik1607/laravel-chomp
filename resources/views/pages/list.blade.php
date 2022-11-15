<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pages') }}
        </h2>
    </x-slot>

    {{-- msg --}}
    {{-- <x-alert type="danger" message="Rutvik" /> --}}

    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="max-w-7x2 mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-2 bg-indigo-50 border-b border-gray-200 text-center text-danger card">
                        <div class="card-heade text-end p-2">
                            <x-form.button
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3 p-4"
                                name="Add New Page" id="newPagesAdd" action="{{ Route('addPages') }}" />
                        </div>
                       
                        <div class="card-body">
                            <x-form.table :label="$labels" :data="$datas['data']" :unsetFields="$filedNotShow" :action="$action"
                                tableId="addPagesTable" />
                        </div>

                        {!! $paginate->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>

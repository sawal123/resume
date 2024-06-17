<div>
    {{-- <x-app-layout> --}}
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        @if (session()->has('message'))
                            <div class="alert alert-success mt-2">
                                {{ session('message') }}
                            </div>
                        @endif
                        <a href="/add-project" class="btn btn-primary" wire:navigate>Add Project</a>
                        {{-- <livewire:project /> --}}
                        <div>
                            <table id="myPro" class="table  table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Tools</th>
                                        <th>Link</th>
                                        <th>Thumbnail</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </x-app-layout> --}}
    
</div>

<div>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                @if (request()->routeIs('edit-project'))
                    {{ __('Edit Project') }}
                @else
                    {{ __('Add Project') }}
                @endif
            </h2>
        </x-slot>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <form class="row g-3" wire:submit.prevent="save" enctype="">
                            @csrf
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text rounded-lg" class="form-control" value="{{$pro->name}}" id="name" wire:model='name'>
                            </div>
                            <div class="col-md-6">
                                <label for="link" class="form-label">Link</label>
                                <input type="url rounded-lg" class="form-control" value="{{$pro->link}}" id="link" wire:model='link'>
                            </div>
                    
                            <div class="col-md-6">
                                <label for="link" class="form-label">Thumbnail</label>
                                <input type="file" class="form-control rounded-lg border p-2" wire:model='thumbnail'>
                            </div>
                            <div class="col-md-6 p-2">
                                <label for="link" class="form-label">Select</label>
                                <select class="rounded-lg form-select js-example-basic-multiple" id="tools" wire:model="select"
                                    multiple="multiple">
                                    @foreach ($tools as $tool)
                                    <option value="{{ $tool->uuid }}" 
                                        @if(in_array($tool->uuid, json_decode($pro->tools, true))) selected @endif>
                                        {{ $tool->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                    
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-full">Submit</button>
                            </div>
                        </form>
    
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    
   

</div>

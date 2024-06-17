<div>
    
    <form class="row g-3" wire:submit.prevent="save" enctype="">
        @csrf
        <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="text rounded-lg" class="form-control" id="name" wire:model='name'>
        </div>
        <div class="col-md-6">
            <label for="link" class="form-label">Link</label>
            <input type="url rounded-lg" class="form-control" id="link" wire:model='link'>
        </div>
       
        <div class="col-md-6">
            <label for="link" class="form-label">Thumbnail</label>
            <input type="file" class="form-control rounded-lg border p-2" wire:model='thumbnail' >
        </div>
        <div class="col-md-6 p-2">
            <label for="link" class="form-label">Select</label>
            <select class="rounded-lg form-select js-example-basic-multiple" id="tools" wire:model="select" multiple="multiple">
                @foreach ($tools as $tool)
                    <option value="{{ $tool->uuid }}">{{ $tool->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary w-full">Submit</button>
        </div>
    </form>

</div>

<a class="btn btn-primary" href="{{route('edit', $uuid)}}">Edit</a>
<button class="btn btn-danger" wire:confirm="Are you sure you want to delete this post?" wire:click="delete('{{ $uuid }}')">Delete</button>

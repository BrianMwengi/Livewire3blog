<form wire:submit.prevent="save">
    <input type="text" wire:model="title" placeholder="Title">
    @error('title') <span class="error">{{ $message }}</span> @enderror

    <textarea wire:model="content" placeholder="Content"></textarea>
    @error('content') <span class="error">{{ $message }}</span> @enderror

    @foreach($photos as $photo)
        <img src="{{ $photo->temporaryUrl() }}" width="100">
    @endforeach

    <input type="file" wire:model="photos" multiple>
    @error('photos.*') <span class="error">{{ $message }}</span> @enderror

    <button type="submit">Save Post</button>
</form>

@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<div>
    <input type="text" wire:model.live="search" placeholder="Search users...">
    <ul>
        @if(count($users) > 0)
            @foreach($users as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        @else
            <li>No user found with the given title</li>
        @endif
    </ul>
</div>

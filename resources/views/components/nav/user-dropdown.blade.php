@props([
    'avatar' => null,
    'name' => 'User',
])

<div class="dropdown dropdown-end">
    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
            @if($avatar)
            <img
                    alt="User avatar"
                    src="{{ $avatar }}" />
            @else
                {{ strtoupper($name[0]) }}
            @endif
        </div>
    </div>
    <ul tabindex="0"
        class="menu menu-sm dropdown-content bg-primary rounded-box mt-3 w-52 p-2 z-50 drop-shadow-xl">
        {{ $slot }}
    </ul>
</div>
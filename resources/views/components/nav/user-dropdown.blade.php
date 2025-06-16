@props([
    'avatar' => null,
    'name' => 'User',
])

@php
    $colors = [
        '#F44336', '#E91E63', '#9C27B0', '#673AB7',
        '#3F51B5', '#2196F3', '#03A9F4', '#00BCD4',
        '#009688', '#4CAF50', '#8BC34A', '#CDDC39',
        '#FFC107', '#FF9800', '#FF5722', '#795548',
    ];

    $hash = crc32($name);
    $color = $colors[$hash % count($colors)];

@endphp

<div
        class="dropdown dropdown-end"
       >
    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar @if(!$avatar) avatar-placeholder @endif">
        <div class="w-10 rounded-full bg-secondary text-white flex items-center
        justify-center text-xl font-semibold overflow-hidden"
             style="background-color: {{ $avatar ? 'transparent' : $color }}">
            @if($avatar)
            <img
                    alt="User avatar"
                    src="{{ $avatar }}" />
            @else
                <span>
                    {{ strtoupper($name[0]) }}
                </span>
            @endif
        </div>
    </div>
    <ul
        class="menu menu-sm dropdown-content bg-primary rounded-box mt-3 w-52 p-2 z-50 drop-shadow-xl">
        {{ $slot }}
    </ul>

</div>


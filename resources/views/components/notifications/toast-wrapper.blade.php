@props([

    'timeout' => 5000,
    'id' => uniqid('toast-'),
    'position' => 'toast-top toast-center',
])

<div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, {{ $timeout }})"
        x-show="show"
        x-transition
        id="{{ $id }}"
        class="toast {{ $position }} z-50"
>
    {{ $slot }}
</div>
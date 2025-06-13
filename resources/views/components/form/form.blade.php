@props([
    'method' => 'post',
    'action' => null,
])

@php
    $spoofed = in_array(strtolower($method), ['put', 'patch', 'delete']);
@endphp

<form method="{{ strtolower($method) === 'get' ? 'get' : 'post' }}"
      action="{{ $action }}"
        {{ $attributes }}>

    @if(strtolower($method) !== 'get')
        @csrf
    @endif

    @if($spoofed)
        @method($method)
    @endif

    {{ $slot }}
</form>
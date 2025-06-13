@props([
    'label' => '',
    'link' => null,
])

<li><a class="whitespace-nowrap" @if($link) href="{{ $link }}" @endif>{{ $label }}</a></li>

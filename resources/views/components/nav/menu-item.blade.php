@props([
    'label' => '',
    'link' => null,
    'useNavigate' => true
])

<li>
    <a
        class="whitespace-nowrap"
        @if($link) href="{{ $link }}" @endif
        @if($useNavigate) wire:navigate @endif
    >{{ $label }}</a>
</li>

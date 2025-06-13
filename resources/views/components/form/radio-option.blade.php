@props([
    'id',
    'name',
    'value',
    'label',
    'isLivewire',
    'checked' => false,
    'inline' => false,
    'error' => false,
])

<label
        for="{{ $id }}"
        class="cursor-pointer {{ $inline ? 'inline-flex items-center gap-2' : 'flex items-center gap-2 mb-1' }}"
>
    <input
            type="radio"
            id="{{ $id }}"
            name="{{ $name }}"
            value="{{ $value }}"
            @if(!$isLivewire)
                @checked($checked)
            @else
                wire:model="{{ $name }}"
            @endif
            @disabled($disabled ?? false)
            @readonly($readonly ?? false)
            @required($required ?? false)
            {{ $attributes->merge(['class' => 'radio' . ($error ? ' radio-error' : '')]) }}
    >
    <span>{{ $label }}</span>
</label>
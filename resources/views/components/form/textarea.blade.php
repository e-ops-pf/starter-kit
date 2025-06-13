@php
    $isLivewire = sk_is_livewire($attributes);
@endphp

<div class="form-control w-full mb-4 {{ $gridLayout }} @if($readonly) cursor-not-allowed @endif"">
    @if ($label)
        <x-sk::form.label :for="$id" :required="$required">{{ $label }}</x-sk::form.label>
    @endif

    <textarea
            id="{{ $id }}"
            name="{{ $name }}"
            placeholder="{{ $placeholder }}"
            rows="{{ $rows }}"
            @if($required) required @endif
            @if($disabled && $isLivewire) readonly
            @elseif($disabled) disabled @endif
            @if($readonly) readonly @endif
            {{ $attributes->merge(['class' => $inputClasses]) }}
    >@unless($isLivewire){{ $resolvedValue }}@endunless</textarea>

    @if ($help)
        <x-sk::form.help>{{ $help }}</x-sk::form.help>
    @endif

    <x-sk::form.error :name="$name" />
</div>

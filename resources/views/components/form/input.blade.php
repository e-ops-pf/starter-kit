@php($isLivewire = sk_is_livewire($attributes))

<div class="form-control {{ $gridLayout }} @if($readonly) cursor-not-allowed @endif">
    @if ($label)
        <x-sk::form.label :for="$id" :required="$required">{{ $label }}</x-sk::form.label>
    @endif
        <input
            id="{{ $id }}"
            name="{{ $name }}"
            type="{{ $type }}"
            placeholder="{{ $placeholder }}"
            @if($required) required @endif
            @if($disabled) disabled @endif
            @if (! $isLivewire)
                value="{{ $resolvedValue }}"
            @endif

            {{ $attributes->merge(['class' => $inputClasses]) }}
    />

    @if ($help)
        <x-sk::form.help>{{ $help }}</x-sk::form.help>
    @endif

    <x-sk::form.error :name="$name" />
</div>
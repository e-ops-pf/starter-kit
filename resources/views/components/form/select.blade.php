@php
$isLivewire = sk_is_livewire($attributes);

if($readonly)
{
    $inputClasses .= ' pointer-events-none opacity-50';
}
@endphp

<div class="form-control w-full {{ $gridLayout }} @if($readonly) cursor-not-allowed @endif">
    @if ($label)
        <x-sk::form.label :for="$id" :required="$required">{{ $label }}</x-sk::form.label>
    @endif

    <select
            id="{{ $id }}"
            name="{{ $name }}"
            @if($required) required @endif
            @if($disabled) disabled @endif

            {{ $attributes->merge(['class' => $inputClasses]) }}
    >
        @if ($placeholder)
            <option value="" hidden @selected(empty($resolvedValue))>
                {{ $placeholder }}
            </option>
        @endif

        @foreach ($options as $key => $text)
            <option value="{{ $key }}" @selected((string) $resolvedValue === (string) $key)>
                {{ $text }}
            </option>
        @endforeach
    </select>

    @if ($help)
        <x-sk::form.help>{{ $help }}</x-sk::form.help>
    @endif

    <x-sk::form.error :name="$name" />
</div>

@php($isLivewire = sk_is_livewire($attributes))

<div
        @unless($isLivewire) x-data="{ checked: Boolean(@json($checked)) }" @endunless
        class="form-control {{ $gridLayout }} @if($readonly) cursor-not-allowed @endif"
>
    @unless($isLivewire)
    <input
            type="hidden"
            name="{{ $name }}"
            x-bind:value="checked ? 1 : 0"

    />
    @endunless

    <div class="flex items-center space-x-2">
        <input
                id="{{ $id }}"
                type="checkbox"
                @unless($isLivewire) x-model="checked" @endunless
                @if($disabled) disabled @endif
                @if($readonly) readonly @endif
                @if($required) required @endif
                {{ $attributes->merge(['class' => $inputClasses]) }}
        />

        @if ($label)
            <x-sk::form.label
                    for="{{ $id }}"
                    :required="$required"
            >
                {{ $label }}
            </x-sk::form.label>
        @endif
    </div>

    @if ($help)
        <x-sk::form.help>{{ $help }}</x-sk::form.help>
    @endif

    <x-sk::form.error :name="$name" />
</div>

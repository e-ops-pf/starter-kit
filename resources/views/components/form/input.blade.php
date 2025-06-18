@php($isLivewire = sk_is_livewire($attributes))

<div class="form-control {{ $gridLayout }} @if($readonly) cursor-not-allowed @endif">
    @if ($label)
        <x-sk::form.label :for="$id" :required="$required">{{ $label }}</x-sk::form.label>
    @endif
        <input
            id="{{ $id }}"
            name="{{ $name }}"
            type="{{ $type }}"
            @if($placeholder)
            placeholder="{{ $placeholder}}"
            @endif
            @if($required) required @endif
            @if($disabled) disabled @endif
            @if (! $isLivewire && ! empty($resolvedValue))
                value="{{ $resolvedValue }}"
            @endif

            {{ $attributes->merge(['class' => $inputClasses]) }}
    />

    @if ($help)
        <x-sk::form.help>{{ $help }}</x-sk::form.help>
    @endif

        @if($type === 'file' && $multiple)
            @foreach ($errors->get( rtrim($name, []) . '.*') as $messages)
                @foreach ($messages as $message)
                    <p class="text-sm text-error mt-1">
                        {{ $message }}
                    </p>
                @endforeach
            @endforeach
        @else
            <x-sk::form.input-error :name="$name" />
        @endif

</div>
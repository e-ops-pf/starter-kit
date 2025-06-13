@php($isLivewire = sk_is_livewire($attributes))

<fieldset class="form-control {{ $gridLayout }} @if($readonly) cursor-not-allowed @endif">
    @if($title)
        <legend class="label-text font-semibold mb-2">
            {{ $title }}
            @if ($required)
                <span class="text-error">*</span>
            @endif
            @if($help)
                <x-sk::form.help>{{ $help }}</x-sk::form.help>
            @endif
        </legend>
    @endif

    @php($hasError = $errors->has($name))


    <div class="space-y-2">
        @foreach($options as $option => $optionLabel)
            <x-sk::form.radio-option
                    :name="$name"
                    :value="$option"
                    :label="$optionLabel"
                    :inline="$inline"
                    :id="$getOptionId($option)"
                    :checked="$resolvedValue === $option"
                    :error="$hasError"
                    :$isLivewire
            />
        @endforeach
    </div>

    <x-sk::form.error :name="$name" />
</fieldset>
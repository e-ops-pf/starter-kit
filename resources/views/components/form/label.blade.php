@props([
    'for',
    'required' => false,
])

<label for="{{ $for }}" class="label">
    <span class="label-text">
        {{ $slot }}
        @if ($required)
            <span class="text-error">*</span>
        @endif
    </span>
</label>
@props([
    'label' => 'Submit',
    'cancel' => null,
    'cancelLabel' => 'Cancel',
])

@if ($cancel)
    <div class="flex flex-col md:flex-row mt-3 gap-3">
        <a href="{{ $cancel }}" class="btn btn-ghost w-full md:w-1/2">
            {{ $cancelLabel }}
        </a>

        <button type="submit" class="btn btn-primary w-full md:w-1/2">
            {{ $label }}
        </button>
    </div>
@else
    <div class="mt-3">
        <button type="submit" class="btn btn-primary w-full">
            {{ $label }}
        </button>
    </div>
@endif
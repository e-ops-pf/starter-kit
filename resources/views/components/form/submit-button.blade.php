@props([
    'label' => 'Submit',
    'cancel' => null,
    'cancelLabel' => 'Cancel',
    'showMobileErrorHint' => true,
])

@if ($cancel)
    <div class="flex flex-col md:flex-row mt-3 gap-3">
        <a href="{{ $cancel }}" class="btn btn-ghost w-full md:w-1/2">
            {{ $cancelLabel }}
        </a>

        <div class="w-full md:w-1/2">
            <button type="submit" class="btn btn-{{ $errors->any() && $showMobileErrorHint ? 'error' : 'primary' }} w-full">
                {{ $label }}
            </button>
            @if($errors->any())
                <div class="text-error lg:hidden">
                    *Des erreurs ont été constatées, veuillez scroller vers le haut si vous ne les voyez pas.
                </div>
            @endif
        </div>
    </div>
@else
    <div class="mt-3">
        <button type="submit" class="btn btn-{{ $errors->any() && $showMobileErrorHint ? 'error' : 'primary' }} w-full">
            {{ $label }}
        </button>
        @if($errors->any())
            <div class="text-error lg:hidden">
                *Des erreurs ont été constatées, veuillez scroller vers le haut si vous ne les voyez pas.
            </div>
        @endif
    </div>
@endif
@props([
    'title' => null,
    'gridLayout' => 'col-span-12 md:col-span-6',
    'required' => false
    ])
<fieldset class="form-control {{ $gridLayout }}">
    @if($title)
        <legend class="label-text font-semibold mb-2">
            {{ $title }}
            @if ($required)
                <span class="text-error">*</span>
            @endif
        </legend>
    @endif
    <div class="space-y-2">
        {{ $slot }}
    </div>
</fieldset>
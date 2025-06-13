@props([
    'title' => null,
    'description' => null,
])

<div class="border-b border-base-300 pb-6 mt-3">
    @if ($title)
        <x-sk::form.section-title :title="$title" :description="$description" class="mb-4" />
    @endif

    <div class="grid grid-cols-12 gap-4">
        {{ $slot }}
    </div>
</div>
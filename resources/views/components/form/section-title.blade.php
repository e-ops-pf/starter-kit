@props([
    'title',
    'description' => null,
])

<h3 class="text-xl font-semibold mb-1">{{ $title }}</h3>

@isset($description)
<p class="text-sm text-base-content/70 mb-4">
    {{ $description }}
</p>
@endisset
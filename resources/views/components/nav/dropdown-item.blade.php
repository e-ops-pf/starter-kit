@props([
    'title' => '',
])

<li class="z-10">
    <details>
        <summary>{{ $title }}</summary>
        <ul class="p-2 bg-primary">
            {{ $slot }}
        </ul>
    </details>
</li>
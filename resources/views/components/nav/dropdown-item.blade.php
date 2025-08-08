@props([
    'title' => '',
])

<li class="z-10">
    <details
            x-data
            x-ref="dropdown"
            @click.outside="$refs.dropdown.open = false">
        <summary>{{ $title }}</summary>
        <ul class="p-2 bg-primary">
            {{ $slot }}
        </ul>
    </details>
</li>
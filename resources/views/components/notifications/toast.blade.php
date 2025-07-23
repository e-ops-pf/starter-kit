@props([
    'type' => 'info',
    'title' => null,
    'message' => null,
])

<div class="alert alert-{{ $type }} shadow-lg" x-data="{ show: true }" x-show="show">
    <div class="flex-1">
        @if($title)
            <h3 class="font-bold">{{ $title }}</h3>
        @endif
        <span>{{ $message }}</span>
    </div>
    <button @click="show = false" class="btn btn-sm btn-ghost text-xl">&times;</button>
</div>
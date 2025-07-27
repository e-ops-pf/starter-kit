@props([
    'type' => 'bars'
])

<div id="loading-overlay" wire:loading.flex>
    <div>
        <span class="loading loading-{{ $type }} text-primary loading-xl"></span>
    </div>
</div>
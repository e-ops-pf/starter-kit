<?php

use Illuminate\View\ComponentAttributeBag;

if (! function_exists('sk_is_livewire')) {
    function sk_is_livewire(?ComponentAttributeBag $attributes): bool
    {
        return collect($attributes?->getAttributes() ?? [])
            ->keys()
            ->contains(fn ($attr) => str($attr)->startsWith('wire:model'));
    }
}
<?php

namespace Eops\StarterKit\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class StarterKitServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Blade::componentNamespace('Eops\\StarterKit\\View\\Components', 'sk');

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'sk');

        Blade::directive('detectLivewire', function () {
            return <<<'BLADE'
                            @php
                                $isLivewire = collect($attributes->getAttributes())
                                    ->keys()
                                    ->contains(fn ($key) => str($key)->startsWith('wire:model'));
                            @endphp
                        BLADE;
        });

        $this->publishes([
                __DIR__.'/../../public/js/e-ops-pf/starter-kit' => resource_path('js/vendor/e-ops-pf/starter-kit'),
                __DIR__.'/../../public/css/e-ops-pf/starter-kit' => resource_path('css/vendor/e-ops-pf/starter-kit')
        ], 'e-ops-pf-sk');
        
    }
}
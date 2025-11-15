<?php

namespace Transistor\FilamentLayoutBuilder;

use Illuminate\Support\ServiceProvider;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;

class LayoutBuilderServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Load views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'filament-layout-builder');

        // Publish config
        $this->publishes([
            __DIR__ . '/../config/filament-layout-builder.php' => config_path('filament-layout-builder.php'),
        ], 'filament-layout-builder-config');
    }
}

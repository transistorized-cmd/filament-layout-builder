<?php

namespace Transistor\FilamentLayoutBuilder\Forms\Components;

use Filament\Forms\Components\Field;

class LayoutBuilder extends Field
{
    protected string $view = 'filament-layout-builder::forms.components.layout-builder';

    /**
     * Enable/disable undo/redo functionality
     */
    protected bool $undoRedo = true;

    /**
     * Enable/disable keyboard shortcuts
     */
    protected bool $keyboardShortcuts = true;

    /**
     * Enable/disable settings (background customization)
     */
    protected bool $settings = true;

    /**
     * Maximum file size for image uploads (in MB)
     */
    protected int $maxImageSize = 2;

    /**
     * Enable/disable specific block types
     */
    protected array $enabledBlocks = [
        'text',
        'image',
        'button',
        'divider',
        'spacer',
        'columns-2',
        'columns-3',
        'columns-1-2',
        'columns-2-1',
        'video',
        'social',
        'html',
    ];

    /**
     * Configure undo/redo functionality
     */
    public function undoRedo(bool $enabled = true): static
    {
        $this->undoRedo = $enabled;

        return $this;
    }

    /**
     * Configure keyboard shortcuts
     */
    public function keyboardShortcuts(bool $enabled = true): static
    {
        $this->keyboardShortcuts = $enabled;

        return $this;
    }

    /**
     * Configure settings panel
     */
    public function settings(bool $enabled = true): static
    {
        $this->settings = $enabled;

        return $this;
    }

    /**
     * Set maximum image upload size
     */
    public function maxImageSize(int $megabytes): static
    {
        $this->maxImageSize = $megabytes;

        return $this;
    }

    /**
     * Set enabled block types
     */
    public function enabledBlocks(array $blocks): static
    {
        $this->enabledBlocks = $blocks;

        return $this;
    }

    /**
     * Disable specific block types
     */
    public function disableBlocks(array $blocks): static
    {
        $this->enabledBlocks = array_diff($this->enabledBlocks, $blocks);

        return $this;
    }

    /**
     * Get the configuration for the component
     */
    public function getConfiguration(): array
    {
        return [
            'undoRedo' => $this->undoRedo,
            'keyboardShortcuts' => $this->keyboardShortcuts,
            'settings' => $this->settings,
            'maxImageSize' => $this->maxImageSize,
            'enabledBlocks' => $this->enabledBlocks,
        ];
    }

    /**
     * Get the state (data) for the field
     */
    public function getState(): mixed
    {
        $state = parent::getState();

        // If state is a string, try to decode it as JSON
        if (is_string($state)) {
            $decoded = json_decode($state, true);
            return $decoded ?? $state;
        }

        return $state;
    }

    /**
     * Set the state and ensure it's properly formatted
     */
    public function state($state): static
    {
        // If state is an array, encode it as JSON
        if (is_array($state)) {
            $state = json_encode($state);
        }

        return parent::state($state);
    }
}

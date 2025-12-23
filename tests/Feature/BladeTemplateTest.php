<?php

namespace Transistor\FilamentLayoutBuilder\Tests\Feature;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the blade template to prevent drag-and-drop regressions.
 *
 * These tests verify the blade template contains critical elements that
 * ensure drag-and-drop works correctly when multiple LayoutBuilder
 * instances are on the same page.
 */
class BladeTemplateTest extends TestCase
{
    protected string $bladeContent;

    protected function setUp(): void
    {
        parent::setUp();

        $bladePath = __DIR__.'/../../resources/views/forms/components/layout-builder.blade.php';
        $this->bladeContent = file_get_contents($bladePath);
    }

    /**
     * @test
     *
     * The canvas wrapper MUST have wire:ignore to prevent Livewire from
     * re-rendering the canvas and destroying dropped blocks.
     */
    public function canvas_wrapper_has_wire_ignore_directive(): void
    {
        $this->assertStringContainsString(
            'class="layout-builder-canvas-wrapper" wire:ignore',
            $this->bladeContent,
            'Canvas wrapper must have wire:ignore to prevent Livewire re-rendering'
        );
    }

    /**
     * @test
     *
     * The canvas element MUST have a unique ID based on statePath to ensure
     * each instance has its own canvas.
     */
    public function canvas_has_unique_id_based_on_state_path(): void
    {
        $this->assertStringContainsString(
            'id="layout-builder-canvas-{{ $getStatePath() }}"',
            $this->bladeContent,
            'Canvas must have unique ID based on statePath'
        );
    }

    /**
     * @test
     *
     * The statePath MUST be passed as an option to the Alpine component,
     * not hardcoded in the function definition. This prevents the scoping
     * bug where multiple instances would all use the last statePath.
     */
    public function state_path_is_passed_as_option_to_alpine_component(): void
    {
        // The x-data call must include statePath as an option with Blade syntax
        $this->assertStringContainsString(
            "statePath: '{{ \$getStatePath() }}'",
            $this->bladeContent,
            'statePath must be passed as option in x-data call'
        );
    }

    /**
     * @test
     *
     * The layoutBuilderComponent function must use options.statePath,
     * not a hardcoded Blade expression.
     */
    public function layout_builder_component_uses_options_state_path(): void
    {
        $this->assertStringContainsString(
            'statePath: options.statePath',
            $this->bladeContent,
            'layoutBuilderComponent must use options.statePath, not hardcoded value'
        );
    }

    /**
     * @test
     *
     * The layoutBuilderComponent function MUST be wrapped in a conditional
     * to prevent it from being redefined when multiple instances are rendered.
     */
    public function layout_builder_component_has_redefinition_guard(): void
    {
        $this->assertStringContainsString(
            "if (typeof window.layoutBuilderComponent === 'undefined')",
            $this->bladeContent,
            'layoutBuilderComponent must have a guard to prevent redefinition'
        );
    }

    /**
     * @test
     *
     * The drop event handler must exist on the canvas.
     */
    public function canvas_has_drop_event_handler(): void
    {
        $this->assertStringContainsString(
            "canvas.addEventListener('drop'",
            $this->bladeContent,
            'Canvas must have drop event handler'
        );
    }

    /**
     * @test
     *
     * The dragover event handler must exist on the canvas with preventDefault.
     */
    public function canvas_has_dragover_event_handler_with_prevent_default(): void
    {
        $this->assertStringContainsString(
            "canvas.addEventListener('dragover'",
            $this->bladeContent,
            'Canvas must have dragover event handler'
        );

        // The dragover handler must call preventDefault to allow dropping
        $this->assertMatchesRegularExpression(
            "/canvas\.addEventListener\('dragover'[^}]+e\.preventDefault\(\)/s",
            $this->bladeContent,
            'Dragover handler must call preventDefault'
        );
    }

    /**
     * @test
     *
     * Draggable blocks must have the draggable attribute and data-block-type.
     */
    public function block_items_are_draggable(): void
    {
        $this->assertStringContainsString(
            'data-block-type="text" draggable="true"',
            $this->bladeContent,
            'Text block must be draggable'
        );

        $this->assertStringContainsString(
            'data-block-type="image" draggable="true"',
            $this->bladeContent,
            'Image block must be draggable'
        );
    }

    /**
     * @test
     *
     * The dragstart event handler must set the block type in dataTransfer.
     */
    public function dragstart_handler_sets_block_type_in_data_transfer(): void
    {
        $this->assertStringContainsString(
            "e.dataTransfer.setData('text/plain', blockType)",
            $this->bladeContent,
            'Dragstart must set block type in dataTransfer'
        );
    }

    /**
     * @test
     *
     * Block creation functions must exist for each block type.
     */
    public function block_creation_functions_exist(): void
    {
        $blockTypes = [
            'createTextBlockAtPosition',
            'createImageBlockAtPosition',
            'createButtonBlockAtPosition',
            'createDividerBlockAtPosition',
        ];

        foreach ($blockTypes as $functionName) {
            $this->assertStringContainsString(
                "function {$functionName}",
                $this->bladeContent,
                "Block creation function {$functionName} must exist"
            );
        }
    }

    /**
     * @test
     *
     * The Alpine component must have $wire.entangle for Livewire state sync.
     */
    public function alpine_component_has_wire_entangle(): void
    {
        $this->assertMatchesRegularExpression(
            '/\$wire\.\$?entangle/',
            $this->bladeContent,
            'Alpine component must use $wire.entangle for state sync'
        );
    }
}

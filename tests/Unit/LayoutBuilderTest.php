<?php

namespace Transistor\FilamentLayoutBuilder\Tests\Unit;

use Transistor\FilamentLayoutBuilder\Forms\Components\LayoutBuilder;
use Transistor\FilamentLayoutBuilder\Tests\TestCase;

class LayoutBuilderTest extends TestCase
{
    /** @test */
    public function it_can_be_instantiated(): void
    {
        $component = LayoutBuilder::make('body');

        $this->assertInstanceOf(LayoutBuilder::class, $component);
    }

    /** @test */
    public function it_has_correct_default_configuration(): void
    {
        $component = LayoutBuilder::make('body');
        $config = $component->getConfiguration();

        $this->assertTrue($config['undoRedo']);
        $this->assertTrue($config['keyboardShortcuts']);
        $this->assertTrue($config['settings']);
        $this->assertEquals(2, $config['maxImageSize']);
        $this->assertContains('text', $config['enabledBlocks']);
        $this->assertContains('image', $config['enabledBlocks']);
        $this->assertContains('button', $config['enabledBlocks']);
    }

    /** @test */
    public function it_can_disable_undo_redo(): void
    {
        $component = LayoutBuilder::make('body')->undoRedo(false);
        $config = $component->getConfiguration();

        $this->assertFalse($config['undoRedo']);
    }

    /** @test */
    public function it_can_set_max_image_size(): void
    {
        $component = LayoutBuilder::make('body')->maxImageSize(5);
        $config = $component->getConfiguration();

        $this->assertEquals(5, $config['maxImageSize']);
    }

    /** @test */
    public function it_can_disable_specific_blocks(): void
    {
        $component = LayoutBuilder::make('body')->disableBlocks(['video', 'social']);
        $config = $component->getConfiguration();

        $this->assertNotContains('video', $config['enabledBlocks']);
        $this->assertNotContains('social', $config['enabledBlocks']);
        $this->assertContains('text', $config['enabledBlocks']);
    }

    /** @test */
    public function it_can_set_custom_enabled_blocks(): void
    {
        $component = LayoutBuilder::make('body')->enabledBlocks(['text', 'image']);
        $config = $component->getConfiguration();

        $this->assertEquals(['text', 'image'], $config['enabledBlocks']);
    }
}

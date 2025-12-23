<?php

namespace Transistor\FilamentLayoutBuilder\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Transistor\FilamentLayoutBuilder\Helpers\EmailExporter;

/**
 * Tests for EmailExporter to ensure backward compatibility
 * with both old and new block content formats.
 *
 * Old format: properties directly on block (e.g., $block['src'])
 * New format: properties inside content object (e.g., $block['content']['src'])
 */
class EmailExporterTest extends TestCase
{
    // ==========================================
    // Text Block Tests
    // ==========================================

    /** @test */
    public function it_generates_text_html_from_new_format(): void
    {
        $json = [
            'blocks' => [
                [
                    'type' => 'text',
                    'content' => [
                        'html' => '<p>Hello World</p>',
                        'fontFamily' => 'Georgia, serif',
                        'fontSize' => '18px',
                        'color' => '#333333',
                        'textAlign' => 'center',
                        'lineHeight' => '1.6',
                    ],
                ],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringContainsString('<p>Hello World</p>', $html);
        $this->assertStringContainsString('font-family: Georgia, serif', $html);
        $this->assertStringContainsString('font-size: 18px', $html);
        $this->assertStringContainsString('color: #333333', $html);
        $this->assertStringContainsString('text-align: center', $html);
    }

    /** @test */
    public function it_generates_text_html_from_old_format(): void
    {
        $json = [
            'blocks' => [
                [
                    'type' => 'text',
                    'content' => 'Simple text content',
                    'fontFamily' => 'Verdana, sans-serif',
                    'fontSize' => '14px',
                    'color' => '#000000',
                    'textAlign' => 'left',
                ],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringContainsString('Simple text content', $html);
        $this->assertStringContainsString('font-family: Verdana, sans-serif', $html);
    }

    // ==========================================
    // Image Block Tests
    // ==========================================

    /** @test */
    public function it_generates_image_html_from_new_format(): void
    {
        $json = [
            'blocks' => [
                [
                    'type' => 'image',
                    'content' => [
                        'src' => 'https://example.com/image.jpg',
                        'alt' => 'Test Image',
                        'width' => '80%',
                        'alignment' => 'center',
                        'url' => 'https://example.com',
                    ],
                ],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringContainsString('src="https://example.com/image.jpg"', $html);
        $this->assertStringContainsString('alt="Test Image"', $html);
        $this->assertStringContainsString('width: 80%', $html);
        $this->assertStringContainsString('href="https://example.com"', $html);
    }

    /** @test */
    public function it_generates_image_html_from_old_format(): void
    {
        $json = [
            'blocks' => [
                [
                    'type' => 'image',
                    'src' => 'https://example.com/old-image.jpg',
                    'alt' => 'Old Format Image',
                    'width' => '100%',
                    'textAlign' => 'left',
                ],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringContainsString('src="https://example.com/old-image.jpg"', $html);
        $this->assertStringContainsString('alt="Old Format Image"', $html);
    }

    /** @test */
    public function it_skips_placeholder_images(): void
    {
        $json = [
            'blocks' => [
                [
                    'type' => 'image',
                    'content' => [
                        'src' => 'https://placeholder.com/image.jpg',
                    ],
                ],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringNotContainsString('placeholder.com', $html);
    }

    // ==========================================
    // Button Block Tests
    // ==========================================

    /** @test */
    public function it_generates_button_html_from_new_format(): void
    {
        $json = [
            'blocks' => [
                [
                    'type' => 'button',
                    'content' => [
                        'text' => 'Click Me',
                        'url' => 'https://example.com/action',
                        'backgroundColor' => '#ff5500',
                        'textColor' => '#ffffff',
                        'alignment' => 'center',
                        'borderRadius' => '8px',
                    ],
                ],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringContainsString('Click Me', $html);
        $this->assertStringContainsString('href="https://example.com/action"', $html);
        $this->assertStringContainsString('background-color: #ff5500', $html);
        $this->assertStringContainsString('border-radius: 8px', $html);
    }

    /** @test */
    public function it_generates_button_html_from_old_format(): void
    {
        $json = [
            'blocks' => [
                [
                    'type' => 'button',
                    'text' => 'Old Button',
                    'href' => 'https://example.com/old',
                    'backgroundColor' => '#3498db',
                    'color' => '#ffffff',
                ],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringContainsString('Old Button', $html);
        $this->assertStringContainsString('href="https://example.com/old"', $html);
    }

    // ==========================================
    // Divider Block Tests
    // ==========================================

    /** @test */
    public function it_generates_divider_html_from_new_format(): void
    {
        $json = [
            'blocks' => [
                [
                    'type' => 'divider',
                    'content' => [
                        'style' => 'dashed',
                        'color' => '#e74c3c',
                        'thickness' => '2px',
                    ],
                ],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringContainsString('border-top: 2px dashed #e74c3c', $html);
    }

    /** @test */
    public function it_generates_divider_html_from_old_format(): void
    {
        $json = [
            'blocks' => [
                [
                    'type' => 'divider',
                    'borderColor' => '#cccccc',
                    'borderWidth' => '1px',
                    'borderStyle' => 'solid',
                ],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringContainsString('border-top: 1px solid #cccccc', $html);
    }

    // ==========================================
    // Spacer Block Tests
    // ==========================================

    /** @test */
    public function it_generates_spacer_html_from_new_format(): void
    {
        $json = [
            'blocks' => [
                [
                    'type' => 'spacer',
                    'content' => [
                        'height' => '40px',
                    ],
                ],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringContainsString('height="40"', $html);
    }

    /** @test */
    public function it_generates_spacer_html_from_old_format(): void
    {
        $json = [
            'blocks' => [
                [
                    'type' => 'spacer',
                    'height' => '30px',
                ],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringContainsString('height="30"', $html);
    }

    // ==========================================
    // Video Block Tests
    // ==========================================

    /** @test */
    public function it_generates_video_html_from_new_format(): void
    {
        $json = [
            'blocks' => [
                [
                    'type' => 'video',
                    'content' => [
                        'url' => 'https://youtube.com/watch?v=abc123',
                        'thumbnail' => 'https://example.com/thumb.jpg',
                    ],
                ],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringContainsString('href="https://youtube.com/watch?v=abc123"', $html);
        $this->assertStringContainsString('src="https://example.com/thumb.jpg"', $html);
    }

    /** @test */
    public function it_generates_video_html_from_old_format(): void
    {
        $json = [
            'blocks' => [
                [
                    'type' => 'video',
                    'videoUrl' => 'https://vimeo.com/123456',
                    'thumbnailUrl' => 'https://example.com/old-thumb.jpg',
                ],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringContainsString('href="https://vimeo.com/123456"', $html);
    }

    /** @test */
    public function it_returns_empty_for_video_without_url(): void
    {
        $json = [
            'blocks' => [
                [
                    'type' => 'video',
                    'content' => [],
                ],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        // Should only contain the wrapper HTML, no video content
        $this->assertStringNotContainsString('Video', $html);
    }

    // ==========================================
    // Social Block Tests
    // ==========================================

    /** @test */
    public function it_generates_social_html_from_new_format(): void
    {
        $json = [
            'blocks' => [
                [
                    'type' => 'social',
                    'content' => [
                        'links' => [
                            [
                                'platform' => 'facebook',
                                'url' => 'https://facebook.com/mypage',
                                'show' => true,
                            ],
                            [
                                'platform' => 'instagram',
                                'url' => 'https://instagram.com/mypage',
                                'show' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringContainsString('href="https://facebook.com/mypage"', $html);
        $this->assertStringContainsString('href="https://instagram.com/mypage"', $html);
    }

    /** @test */
    public function it_generates_social_html_from_old_format(): void
    {
        $json = [
            'blocks' => [
                [
                    'type' => 'social',
                    'icons' => [
                        [
                            'platform' => 'linkedin',
                            'url' => 'https://linkedin.com/in/myprofile',
                        ],
                    ],
                ],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringContainsString('href="https://linkedin.com/in/myprofile"', $html);
    }

    /** @test */
    public function it_skips_disabled_social_icons(): void
    {
        $json = [
            'blocks' => [
                [
                    'type' => 'social',
                    'content' => [
                        'links' => [
                            [
                                'platform' => 'facebook',
                                'url' => 'https://facebook.com/mypage',
                                'show' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringNotContainsString('facebook.com/mypage', $html);
    }

    // ==========================================
    // Columns Block Tests
    // ==========================================

    /** @test */
    public function it_generates_columns_html_from_new_format(): void
    {
        $json = [
            'blocks' => [
                [
                    'type' => 'columns',
                    'content' => [
                        'columns' => [
                            [
                                'blocks' => [
                                    ['type' => 'text', 'content' => ['html' => '<p>Column 1</p>']],
                                ],
                            ],
                            [
                                'blocks' => [
                                    ['type' => 'text', 'content' => ['html' => '<p>Column 2</p>']],
                                ],
                            ],
                        ],
                        'columnType' => '2-equal',
                    ],
                ],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringContainsString('<p>Column 1</p>', $html);
        $this->assertStringContainsString('<p>Column 2</p>', $html);
    }

    /** @test */
    public function it_generates_columns_html_from_old_format(): void
    {
        $json = [
            'blocks' => [
                [
                    'type' => 'columns',
                    'columnCount' => 2,
                    'columns' => [
                        [
                            'blocks' => [
                                ['type' => 'text', 'content' => 'Left column'],
                            ],
                        ],
                        [
                            'blocks' => [
                                ['type' => 'text', 'content' => 'Right column'],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringContainsString('Left column', $html);
        $this->assertStringContainsString('Right column', $html);
    }

    // ==========================================
    // General Tests
    // ==========================================

    /** @test */
    public function it_handles_empty_blocks_array(): void
    {
        $json = [
            'blocks' => [],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringContainsString('<!DOCTYPE html', $html);
        $this->assertStringContainsString('</html>', $html);
    }

    /** @test */
    public function it_handles_missing_blocks_key(): void
    {
        $json = [
            'settings' => ['backgroundColor' => '#ffffff'],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertEmpty($html);
    }

    /** @test */
    public function it_handles_json_string_input(): void
    {
        $jsonString = json_encode([
            'blocks' => [
                [
                    'type' => 'text',
                    'content' => ['html' => '<p>From JSON string</p>'],
                ],
            ],
        ]);

        $html = EmailExporter::toHtml($jsonString);

        $this->assertStringContainsString('<p>From JSON string</p>', $html);
    }

    /** @test */
    public function it_applies_background_settings(): void
    {
        $json = [
            'blocks' => [
                ['type' => 'text', 'content' => ['html' => '<p>Test</p>']],
            ],
            'settings' => [
                'backgroundColor' => '#f5f5f5',
                'backgroundImage' => 'https://example.com/bg.jpg',
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringContainsString('background-color: #f5f5f5', $html);
        $this->assertStringContainsString("background-image: url('https://example.com/bg.jpg')", $html);
    }

    /** @test */
    public function it_ignores_unknown_block_types(): void
    {
        $json = [
            'blocks' => [
                ['type' => 'unknown_type', 'content' => 'Should be ignored'],
                ['type' => 'text', 'content' => ['html' => '<p>Valid text</p>']],
            ],
        ];

        $html = EmailExporter::toHtml($json);

        $this->assertStringNotContainsString('Should be ignored', $html);
        $this->assertStringContainsString('<p>Valid text</p>', $html);
    }
}

<?php

namespace Transistor\FilamentLayoutBuilder\Helpers;

class EmailExporter
{
    /**
     * Convert JSON layout to email-compatible HTML
     *
     * @param string|array $json The JSON layout data
     * @return string The HTML email
     */
    public static function toHtml(string|array $json): string
    {
        $data = is_string($json) ? json_decode($json, true) : $json;

        if (!$data || !isset($data['blocks'])) {
            return '';
        }

        $blocks = $data['blocks'];
        $settings = $data['settings'] ?? [];

        $bodyContent = '';
        foreach ($blocks as $blockData) {
            $bodyContent .= self::generateBlockHTML($blockData);
        }

        // Get background settings
        $bgColor = $settings['backgroundColor'] ?? '#ffffff';
        $bgImage = $settings['backgroundImage'] ?? '';
        $bgSize = $settings['backgroundSize'] ?? 'cover';
        $bgPosition = $settings['backgroundPosition'] ?? 'center';
        $bgRepeat = $settings['backgroundRepeat'] ?? 'no-repeat';

        // Build background style for content area
        $contentBackgroundStyle = "background-color: {$bgColor};";
        if (!empty($bgImage)) {
            $contentBackgroundStyle .= " background-image: url('{$bgImage}'); background-size: {$bgSize}; background-position: {$bgPosition}; background-repeat: {$bgRepeat};";
        }

        // Create full HTML document with email-compatible structure
        return <<<HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Email</title>
    <style type="text/css">
        /* Client-specific Styles */
        body { margin: 0; padding: 0; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
        table { border-collapse: collapse !important; }
        .ReadMsgBody { width: 100%; }
        .ExternalClass { width: 100%; }
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
    </style>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f4f4;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f4f4f4;">
        <tr>
            <td align="center" style="padding: 20px 0;">
                <table border="0" cellpadding="0" cellspacing="0" width="600" style="{$contentBackgroundStyle} max-width: 600px;">
                    <tr>
                        <td>
                            {$bodyContent}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
HTML;
    }

    /**
     * Generate HTML for a single block
     */
    protected static function generateBlockHTML(array $blockData): string
    {
        $type = $blockData['type'] ?? 'text';

        return match ($type) {
            'text' => self::generateTextHTML($blockData),
            'image' => self::generateImageHTML($blockData),
            'button' => self::generateButtonHTML($blockData),
            'divider' => self::generateDividerHTML($blockData),
            'spacer' => self::generateSpacerHTML($blockData),
            'columns' => self::generateColumnsHTML($blockData),
            'video' => self::generateVideoHTML($blockData),
            'social' => self::generateSocialHTML($blockData),
            'html' => self::generateCustomHTML($blockData),
            default => '',
        };
    }

    /**
     * Generate text block HTML
     */
    protected static function generateTextHTML(array $blockData): string
    {
        // Handle new format where properties are inside content object
        $content = $blockData['content'] ?? null;
        if (is_array($content) && isset($content['html'])) {
            // New format: content is object with html, fontFamily, etc.
            $html = $content['html'] ?? '';
            $fontFamily = $content['fontFamily'] ?? 'Arial, sans-serif';
            $fontSize = $content['fontSize'] ?? '16px';
            $color = $content['color'] ?? '#000000';
            $textAlign = $content['textAlign'] ?? 'left';
            $lineHeight = $content['lineHeight'] ?? '1.5';
            $fontWeight = $blockData['fontWeight'] ?? 'normal';
            $fontStyle = $blockData['fontStyle'] ?? 'normal';
            $padding = $blockData['padding'] ?? '10px';
            $backgroundColor = $blockData['backgroundColor'] ?? 'transparent';
        } else {
            // Old format: properties directly on blockData
            $fontSize = self::getEffectiveFontSize($blockData);
            $fontFamily = $blockData['fontFamily'] ?? 'Arial, sans-serif';
            $fontWeight = $blockData['fontWeight'] ?? 'normal';
            $fontStyle = $blockData['fontStyle'] ?? 'normal';
            $color = $blockData['color'] ?? '#000000';
            $textAlign = $blockData['textAlign'] ?? 'left';
            $lineHeight = '1.5';
            $padding = $blockData['padding'] ?? '10px';
            $backgroundColor = $blockData['backgroundColor'] ?? 'transparent';
            $html = is_string($content) ? $content : ($blockData['content'] ?? 'Enter your text here');
        }

        return <<<HTML
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td style="
                    font-family: {$fontFamily};
                    font-size: {$fontSize};
                    font-weight: {$fontWeight};
                    font-style: {$fontStyle};
                    color: {$color};
                    text-align: {$textAlign};
                    line-height: {$lineHeight};
                    padding: {$padding};
                    background-color: {$backgroundColor};
                ">
                    {$html}
                </td>
            </tr>
        </table>
HTML;
    }

    /**
     * Generate image block HTML
     */
    protected static function generateImageHTML(array $blockData): string
    {
        // Handle new format where properties are inside content object
        $content = $blockData['content'] ?? $blockData;
        if (is_array($content) && isset($content['src'])) {
            $src = $content['src'] ?? '';
            $alt = $content['alt'] ?? 'Image';
            $width = $content['width'] ?? '100%';
            $textAlign = $content['alignment'] ?? $content['textAlign'] ?? 'center';
            $linkUrl = $content['url'] ?? $content['linkUrl'] ?? '';
        } else {
            $src = $blockData['src'] ?? '';
            $alt = $blockData['alt'] ?? 'Image';
            $width = $blockData['width'] ?? '100%';
            $textAlign = $blockData['textAlign'] ?? 'center';
            $linkUrl = $blockData['linkUrl'] ?? '';
        }
        $padding = $blockData['padding'] ?? '10px';

        if (empty($src) || str_contains($src, 'placeholder')) {
            return '';
        }

        $imageTag = "<img src=\"{$src}\" alt=\"{$alt}\" style=\"display: block; width: {$width}; max-width: 100%; height: auto; border: 0;\" />";
        $imageContent = $linkUrl
            ? "<a href=\"{$linkUrl}\" target=\"_blank\" style=\"display: inline-block; border: 0;\">{$imageTag}</a>"
            : $imageTag;

        return <<<HTML
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td align="{$textAlign}" style="padding: {$padding};">
                    {$imageContent}
                </td>
            </tr>
        </table>
HTML;
    }

    /**
     * Generate button block HTML
     */
    protected static function generateButtonHTML(array $blockData): string
    {
        // Handle new format where properties are inside content object
        $content = $blockData['content'] ?? $blockData;
        if (is_array($content) && isset($content['text'])) {
            $text = $content['text'] ?? 'Click Here';
            $href = $content['url'] ?? $content['href'] ?? '#';
            $backgroundColor = $content['backgroundColor'] ?? '#3498db';
            $color = $content['textColor'] ?? $content['color'] ?? '#ffffff';
            $textAlign = $content['alignment'] ?? $content['textAlign'] ?? 'center';
            $borderRadius = $content['borderRadius'] ?? '4px';
        } else {
            $text = $blockData['text'] ?? 'Click Here';
            $href = $blockData['href'] ?? '#';
            $backgroundColor = $blockData['backgroundColor'] ?? '#3498db';
            $color = $blockData['color'] ?? '#ffffff';
            $textAlign = $blockData['textAlign'] ?? 'center';
            $borderRadius = $blockData['borderRadius'] ?? '4px';
        }
        $fontSize = $blockData['fontSize'] ?? '16px';
        $padding = $blockData['padding'] ?? '12px 30px';
        $fontFamily = $blockData['fontFamily'] ?? 'Arial, sans-serif';

        return <<<HTML
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td align="{$textAlign}" style="padding: 10px;">
                    <!--[if mso]>
                    <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{$href}" style="height:40px;v-text-anchor:middle;width:200px;" arcsize="10%" stroke="f" fillcolor="{$backgroundColor}">
                        <w:anchorlock/>
                        <center style="color:{$color};font-family:{$fontFamily};font-size:{$fontSize};">
                            {$text}
                        </center>
                    </v:roundrect>
                    <![endif]-->
                    <!--[if !mso]><!-->
                    <a href="{$href}" style="
                        background-color: {$backgroundColor};
                        border-radius: {$borderRadius};
                        color: {$color};
                        display: inline-block;
                        font-family: {$fontFamily};
                        font-size: {$fontSize};
                        font-weight: normal;
                        line-height: 1.5;
                        text-align: center;
                        text-decoration: none;
                        padding: {$padding};
                        -webkit-text-size-adjust: none;
                        mso-hide: all;
                    ">
                        {$text}
                    </a>
                    <!--<![endif]-->
                </td>
            </tr>
        </table>
HTML;
    }

    /**
     * Generate divider block HTML
     */
    protected static function generateDividerHTML(array $blockData): string
    {
        // Handle new format where properties are inside content object
        $content = $blockData['content'] ?? $blockData;
        if (is_array($content) && (isset($content['style']) || isset($content['color']))) {
            $borderColor = $content['color'] ?? '#cccccc';
            $borderWidth = $content['thickness'] ?? '1px';
            $borderStyle = $content['style'] ?? 'solid';
        } else {
            $borderColor = $blockData['borderColor'] ?? '#cccccc';
            $borderWidth = $blockData['borderWidth'] ?? '1px';
            $borderStyle = $blockData['borderStyle'] ?? 'solid';
        }
        $padding = $blockData['padding'] ?? '10px';

        return <<<HTML
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td style="padding: {$padding};">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td style="
                                border-top: {$borderWidth} {$borderStyle} {$borderColor};
                                font-size: 0;
                                line-height: 0;
                            ">
                                &nbsp;
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
HTML;
    }

    /**
     * Generate spacer block HTML
     */
    protected static function generateSpacerHTML(array $blockData): string
    {
        // Handle new format where properties are inside content object
        $content = $blockData['content'] ?? $blockData;
        $height = is_array($content) && isset($content['height'])
            ? $content['height']
            : ($blockData['height'] ?? '20px');
        $height = str_replace('px', '', $height);

        return <<<HTML
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td height="{$height}" style="font-size: 0; line-height: 0;">
                    &nbsp;
                </td>
            </tr>
        </table>
HTML;
    }

    /**
     * Generate columns block HTML
     */
    protected static function generateColumnsHTML(array $blockData): string
    {
        // Handle new format where properties are inside content object
        $content = $blockData['content'] ?? $blockData;
        if (is_array($content) && isset($content['columns'])) {
            $columns = $content['columns'] ?? [];
            $columnType = $content['columnType'] ?? '2-equal';
            $columnCount = count($columns);
        } else {
            $columnCount = $blockData['columnCount'] ?? 2;
            $columns = $blockData['columns'] ?? [];
            $columnType = $blockData['columnType'] ?? '2-equal';
        }

        $emailWidth = 600;

        // Calculate column widths based on columnType
        $columnWidths = $blockData['columnWidths'] ?? match ($columnType) {
            '1-2' => [33, 67],
            '2-1' => [67, 33],
            '3-equal' => [33, 33, 34],
            default => array_fill(0, $columnCount, 100 / max($columnCount, 1)),
        };

        $columnsHTML = '';
        for ($i = 0; $i < $columnCount; $i++) {
            // Calculate actual width for email compatibility - handle percentage strings
            $widthValue = $columnWidths[$i] ?? (100 / max($columnCount, 1));
            if (is_string($widthValue)) {
                $widthValue = (float) str_replace('%', '', $widthValue);
            }
            $columnWidth = floor(($widthValue / 100) * $emailWidth);

            // Get column blocks - handle both array and object structures
            $columnBlocks = $columns[$i]['blocks'] ?? $columns[$i] ?? [];
            if (is_object($columnBlocks)) {
                $columnBlocks = (array) $columnBlocks;
            }

            $columnContent = '';
            foreach ($columnBlocks as $nestedBlock) {
                if (is_array($nestedBlock)) {
                    $columnContent .= self::generateBlockHTML($nestedBlock);
                }
            }

            if (empty($columnContent)) {
                $columnContent = '&nbsp;';
            }

            // Use proper email-compatible styling for columns
            $columnsHTML .= <<<HTML
                <td width="{$columnWidth}" valign="top" style="
                    padding: 10px;
                    width: {$widthValue}%;
                    vertical-align: top;
                    mso-table-lspace: 0pt;
                    mso-table-rspace: 0pt;
                ">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td>
                                {$columnContent}
                            </td>
                        </tr>
                    </table>
                </td>
HTML;
        }

        return <<<HTML
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
            <tr>
                {$columnsHTML}
            </tr>
        </table>
HTML;
    }

    /**
     * Generate video block HTML
     */
    protected static function generateVideoHTML(array $blockData): string
    {
        // Handle new format where properties are inside content object
        $content = $blockData['content'] ?? $blockData;
        if (is_array($content) && isset($content['url'])) {
            $videoUrl = $content['url'] ?? '';
            $thumbnailUrl = $content['thumbnail'] ?? '';
        } else {
            $videoUrl = $blockData['videoUrl'] ?? $blockData['url'] ?? '';
            $thumbnailUrl = $blockData['thumbnailUrl'] ?? $blockData['thumbnail'] ?? '';
        }
        $textAlign = $blockData['textAlign'] ?? 'center';
        $padding = $blockData['padding'] ?? '10px';

        if (empty($videoUrl)) {
            return '';
        }

        return <<<HTML
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td align="{$textAlign}" style="padding: {$padding};">
                    <a href="{$videoUrl}" target="_blank">
                        <img src="{$thumbnailUrl}" alt="Video" style="display: block; max-width: 100%; height: auto; border: 0;" />
                    </a>
                </td>
            </tr>
        </table>
HTML;
    }

    /**
     * Generate social icons block HTML
     */
    protected static function generateSocialHTML(array $blockData): string
    {
        // Handle new format where properties are inside content object
        $content = $blockData['content'] ?? $blockData;
        if (is_array($content) && isset($content['links'])) {
            $icons = $content['links'] ?? [];
        } else {
            $icons = $blockData['icons'] ?? $blockData['links'] ?? [];
        }
        $iconSize = $blockData['iconSize'] ?? '32px';
        $textAlign = $blockData['align'] ?? 'center';
        $padding = $blockData['padding'] ?? '16px';
        $iconSpacing = $blockData['iconSpacing'] ?? '12px';
        $style = $blockData['style'] ?? 'color';

        // Social platform definitions with SVG icons
        $socialPlatforms = [
            'facebook' => [
                'icon' => '<svg viewBox="0 0 24 24" style="width: {iconSize}; height: {iconSize};"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" fill="{color}"/></svg>',
                'color' => '#1877F2'
            ],
            'x' => [
                'icon' => '<svg viewBox="0 0 24 24" style="width: {iconSize}; height: {iconSize};"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" fill="{color}"/></svg>',
                'color' => '#000000'
            ],
            'instagram' => [
                'icon' => '<svg viewBox="0 0 24 24" style="width: {iconSize}; height: {iconSize};"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" fill="{color}"/></svg>',
                'color' => '#E4405F'
            ],
            'linkedin' => [
                'icon' => '<svg viewBox="0 0 24 24" style="width: {iconSize}; height: {iconSize};"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" fill="{color}"/></svg>',
                'color' => '#0077B5'
            ],
            'youtube' => [
                'icon' => '<svg viewBox="0 0 24 24" style="width: {iconSize}; height: {iconSize};"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" fill="{color}"/></svg>',
                'color' => '#FF0000'
            ]
        ];

        $iconsHTML = '';
        foreach ($icons as $icon) {
            // Skip if not enabled
            if (isset($icon['show']) && !$icon['show']) {
                continue;
            }

            $platform = $icon['platform'] ?? '';
            $url = $icon['url'] ?? '#';

            if (!isset($socialPlatforms[$platform])) {
                continue;
            }

            $platformData = $socialPlatforms[$platform];
            $iconColor = ($style === 'color') ? $platformData['color'] : '#666666';

            // Replace placeholders in icon SVG
            $iconSvg = str_replace(['{iconSize}', '{color}'], [$iconSize, $iconColor], $platformData['icon']);

            $iconsHTML .= "<a href=\"{$url}\" style=\"display: inline-block; margin: 0 {$iconSpacing}; text-decoration: none;\">{$iconSvg}</a>";
        }

        if (empty($iconsHTML)) {
            return '<div style="text-align: center; color: #999; padding: 20px;">No social icons enabled</div>';
        }

        return <<<HTML
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td align="{$textAlign}" style="padding: {$padding};">
                    {$iconsHTML}
                </td>
            </tr>
        </table>
HTML;
    }

    /**
     * Generate custom HTML block HTML
     */
    protected static function generateCustomHTML(array $blockData): string
    {
        $content = $blockData['content'] ?? '';
        $padding = $blockData['padding'] ?? '10px';

        return <<<HTML
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td style="padding: {$padding};">
                    {$content}
                </td>
            </tr>
        </table>
HTML;
    }

    /**
     * Get effective font size based on text style
     */
    protected static function getEffectiveFontSize(array $blockData): string
    {
        $textStyle = $blockData['textStyle'] ?? 'normal';

        return match ($textStyle) {
            'h1' => '32px',
            'h2' => '28px',
            'h3' => '24px',
            'h4' => '20px',
            default => $blockData['fontSize'] ?? '16px',
        };
    }
}

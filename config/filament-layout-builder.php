<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Configuration
    |--------------------------------------------------------------------------
    |
    | These are the default configuration values for the Layout Builder field.
    | You can override these on a per-field basis using the field methods.
    |
    */

    'undo_redo' => true,

    'keyboard_shortcuts' => true,

    'settings' => true,

    'max_image_size' => 2, // MB

    'enabled_blocks' => [
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
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Email Settings
    |--------------------------------------------------------------------------
    |
    | These are the default email template settings that will be applied
    | when creating a new template.
    |
    */

    'default_settings' => [
        'backgroundColor' => '#ffffff',
        'backgroundImage' => '',
        'backgroundSize' => 'cover',
        'backgroundPosition' => 'center',
        'backgroundRepeat' => 'no-repeat',
    ],
];

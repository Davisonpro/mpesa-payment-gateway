<?php
/**
 * Asset dependencies for Blocks integration
 * 
 * @package WooMpesa
 */

return [
    'dependencies' => [
        'wc-blocks-registry',
        'wc-settings',
        'wp-element',
        'wp-html-entities',
        'wp-i18n',
    ],
    'version' => defined('WOO_MPESA_VERSION') ? WOO_MPESA_VERSION : '2.0.0',
];


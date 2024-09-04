<?php

return [
    'currency' => [
        'default' => 'CNY',  // Set Chinese Yuan as the default currency
        'supported' => ['CNY', 'USD', 'EUR', 'AED'],  // Add any other currencies you need
        'api_key' => env('CURRENCY_API_KEY', ''),
    ],

    'shipping' => [
        'fast_rate' => 10, // Example rate per kg/CBM in CNY
        'normal_rate' => 5,
    ],

    'languages' => [
        'default' => 'en',  // English as default language
        'available' => ['en', 'ar'],  // Arabic as additional language
    ],
];

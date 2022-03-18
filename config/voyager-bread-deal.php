<?php

return [

    /*
     * If enabled for voyager-bread-deal package.
     */
    'enabled' => env('VOYAGER_BREAD_DEAL_ENABLED', true),

    /*
     * The config_key for voyager-bread-deal package.
     */
    'config_key' => env('VOYAGER_BREAD_DEAL_CONFIG_KEY', 'joy-voyager-bread-deal'),

    /*
     * The route_prefix for voyager-bread-deal package.
     */
    'route_prefix' => env('VOYAGER_BREAD_DEAL_ROUTE_PREFIX', 'joy-voyager-bread-deal'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadDeal\\Http\\Controllers',
    ],
];

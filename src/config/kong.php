<?php
/**
 * @Author yaangvu
 * @Date   Jun 14, 2022
 */

return [
    /*
   |--------------------------------------------------------------------------
   | KongEntity admin api url
   |--------------------------------------------------------------------------
   |
   | Here you may specify which of the kong admin api url
   |
   */
    'kong_url'         => env('KONG_URL', '127.0.0.1:8001'),
    'kong_service'     => env('APP_NAME') . '-SERVICE',
    'kong_route_name'  => env('APP_NAME') . '-ROUTE',
    'kong_route_paths' => explode(',', env('KONG_ROUTES', '/')),
    'kong_upstream'    => env('APP_NAME') . '-UPSTREAM',
    'kong_targets'     => explode(',', env('KONG_TARGET', '127.0.0.1:8000')),
    'kong_options'     => [
        'timeout' => 2.0
    ]
];
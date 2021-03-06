<?php
return [

    /*
    |--------------------------------------------------------------------------
    | appid length , default 16
    |--------------------------------------------------------------------------
    |
    |
    */
    'appid_length'  => env('API_KEY_APPID_LENGTH', '16'),

    /*
    |--------------------------------------------------------------------------
    | secret length , default 64
    |--------------------------------------------------------------------------
    |
    |
    */
    'secret_length' => env('API_KEY_SECRET_LENGTH', '64'),

    /*
    |--------------------------------------------------------------------------
    | token timeout , default 0, 0 is unlimited
    |--------------------------------------------------------------------------
    |
    |
    */
    'token_timeout' => env('API_KEY_TOKEN_TIMEOUT', 0),

    /*
    |--------------------------------------------------------------------------
    | Logger Setting
    |--------------------------------------------------------------------------
    |
    | Available Drivers: "datebase", "file"
    |
    */
    'logger'        => [
        'is_taken' => env('API_KEY_LOGGER', false),
        'driver'   => env('API_KEY_LOGGER_DRIVER', 'database'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Cache Setting
    |--------------------------------------------------------------------------
    |
    | Cache Setting.
    |
    */
    'cache'         => [
        'is_taken'  => env('API_KEY_CACHE', false),
        'cache_key' => env('API_KEY_CACHE_KEY', 'apikey:clients:'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Table Name
    |--------------------------------------------------------------------------
    |
    | Table Name, if this tablename exists can change.
    |
    */
    'table_name'    => [
        /**
         * APP clients table name
         */
        'app_clients'            => env('APP_CLIENTS_NAME', 'api_auth_app_clients'),

        /**
         * Api_auth access events table name
         */
        'api_auth_access_events' => env('API_AUTH_ACCESS_EVENTS_NAME', 'api_auth_access_events'),

        /**
         * Api_auth oprate events table name
         */
        'api_auth_oprate_events' => env('API_AUTH_OPRATE_EVENTS_NAME', 'api_auth_oprate_events'),
    ],


];
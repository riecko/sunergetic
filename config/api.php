<?php

use Illuminate\Support\Facades\Facade;

return [

    /*
    |--------------------------------------------------------------------------
    | API URL
    |--------------------------------------------------------------------------
    |
    | This value is the url of the third party API.
    |
    */
    'api_url' => env('API_URL'),
    
    /*
    |--------------------------------------------------------------------------
    | API TOKEN
    |--------------------------------------------------------------------------
    |
    | This value is the token of your third party api. This value is used when the
    | framework needs to makes a request to the external api
    |
    */
    'api_token' => env('API_TOKEN'),
];
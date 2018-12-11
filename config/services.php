<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID'),         // Your GitHub Client ID
        'client_secret' => env('GITHUB_CLIENT_SECRET'), // Your GitHub Client Secret
        'redirect' => 'http://localhost/larasocia/public/login/github/callback',
    ],

    'facebook' => [
        'client_id' => '540830099698433',         // Your Facebook  Client ID
        'client_secret' => '0bd8d620971d9ba46f070d965070f746', // Your Facebook Client Secret
        'redirect' => 'http://localhost/larasocia/public/login/facebook/callback',
    ],

    'twitter' => [
        'client_id' => '540830099698433',         // Your Facebook  Client ID
        'client_secret' => '0bd8d620971d9ba46f070d965070f746', // Your Facebook Client Secret
        'redirect' => 'http://localhost/larasocia/public/login/twitter/callback',
    ],

    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => 'http://localhost/larasocia/public/login/twitter/callback',
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

 ];

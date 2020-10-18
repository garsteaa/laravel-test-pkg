<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Send Email To
    |--------------------------------------------------------------------------
    |
    | This key is used for, on which email address to send emails
    |
    */

    'send_email_to' => env('SEND_EMAIL', 'test@test.com'),



    /*
    |--------------------------------------------------------------------------
    | Redirect To
    |--------------------------------------------------------------------------
    |
    | Specifies here after successfully email sent, where to redirect user on which Route
    |
    */

    'redirect_to' => env('REDIRECT_ROUTE', 'garstea.contact')
];

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Mailer
    |--------------------------------------------------------------------------
    |
    | This option controls the default mailer that is used to send any email
    | messages sent by your application. Alternative mailers may be setup
    | and used as needed; however, this mailer will be used by default.
    |
    */

    'default' => env('MAIL_MAILER', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | Mailer Configurations
    |--------------------------------------------------------------------------
    |
    | Here you may configure all of the mailers used by your application plus
    | their respective settings. Several examples have been configured for
    | you and you are free to add your own as your application requires.
    |
    | Laravel supports a variety of mail "transport" drivers to be used while
    | sending an e-mail. You will specify which one you are using for your
    | mailers below. You are free to add additional mailers as required.
    |
    | Supported: "smtp", "sendmail", "mailgun", "ses",
    |            "postmark", "log", "array"
    |
    */

    'mailers' => [
        'smtp' => [
            // 'transport' => 'smtp',
            // 'host' => 'smtp.mailtrap.io',
            // 'port' => '2525',
            // 'encryption' => 'tls',
            // 'username' => 'd6737e2387e45b',
            // 'password' => '0270328bf7ac26',
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'smtp.mailtrap.io'),
            'port' => env('MAIL_PORT', 2525),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),

            'dkim_selector' => 'default', // for example: 'Selector123'
            'dkim_domain' => 'saycheers.com', // for example: 'myblog.com'
            'dkim_private_key' => '-----BEGIN RSA PRIVATE KEY-----
            MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvtGr5E4hFbetcLm3iUHWT1R/8FYxwHBMRaKoDj/9g2UlMnFGMpaJmip6C1d+cGuw152hr0v5VCiWiQ6Y7moAoO+QX1E8bO6yu53bd3SleM1xfBgL43aNKFvTaxc7v/nJ6PvJSJyygpg2e1qRnRh/5CrcSkdQ0Mo5ykorKG1mWqmxwpqzXPP36D4+eP7YjyJU7" "ZnnkiJk5Vnz49T2fhNyk0ckSEzFAqcXTJes+q3Ux9dQdH1+wahIYTZDpANC41DwmFhFBDEQG0F811Ot+6wb/La9FVerckDa7eNwB5TJ/iQW+AP+GOwxuIVdt+Y2e+Xahu2I7fm81Zn3JAkJsGHz9QIDAQAB
            -----END RSA PRIVATE KEY-----',

            'timeout' => null,
            'auth_mode' => null,
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'mailgun' => [
            'transport' => 'mailgun',
        ],

        'postmark' => [
            'transport' => 'postmark',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => '/usr/sbin/sendmail -bs',
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    |
    | You may wish for all e-mails sent by your application to be sent from
    | the same address. Here, you may specify a name and address that is
    | used globally for all e-mails that are sent by your application.
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Markdown Mail Settings
    |--------------------------------------------------------------------------
    |
    | If you are using Markdown based email rendering, you may configure your
    | theme and component paths here, allowing you to customize the design
    | of the emails. Or, you may simply stick with the Laravel defaults!
    |
    */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];

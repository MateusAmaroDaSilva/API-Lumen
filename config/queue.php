<?php

return [
    'default' => env('QUEUE_CONNECTION', 'database'),

    'connections' => [
        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver'      => 'database',
            'table'       => 'jobs',
            'queue'       => 'default',
            'retry_after' => 90,
        ],

        'sqs' => [
            'driver'  => 'sqs',
            'key'     => env('AWS_ACCESS_KEY_ID'),
            'secret'  => env('AWS_SECRET_ACCESS_KEY'),
            'prefix'  => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/sua_conta'),
            'queue'   => env('SQS_QUEUE', 'ticket-purchase-queue'),
            'suffix'  => env('SQS_SUFFIX'),
            'region'  => env('AWS_DEFAULT_REGION', 'us-east-1'),
        ],
    ],

    'failed' => [
        'driver'   => 'database',
        'database' => env('DB_CONNECTION', 'mysql'),
        'table'    => 'failed_jobs',
    ],
];

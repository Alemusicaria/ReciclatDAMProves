<?php
return [
    'driver' => env('SCOUT_DRIVER', 'algolia'),

    'prefix' => env('SCOUT_PREFIX', ''),

    'queue' => env('SCOUT_QUEUE', false),

    'after_commit' => false,

    'chunk' => [
        'searchable' => 500,
        'unsearchable' => 500,
    ],

    'soft_delete' => false,

    'identify' => env('SCOUT_IDENTIFY', false),

    'algolia' => [
        'id' => env('ALGOLIA_APP_ID', '4JU9PG98CF'),
        'secret' => env('ALGOLIA_SECRET', 'd37ffd358dca40447584fb2ffdc28e03'),
    ],
];
<?php

return [
    'path' => 'docs/oas',

    'default_version' => 'v1',

    'urls' => [
        'v1' => [
            'url' => '/api-docs/v1/index.yaml',
            'name' => 'API v1',
        ],
    ],

    'config' => [
        /*
        |--------------------------------------------------------------------------
        | Router Mode
        |--------------------------------------------------------------------------
        |
        | Determines how navigation should work.
        |
        | Supported: "hash", "history", "memory"
        |
        | Hash: Uses the hash portion of the URL (i.e. window.location.hash) to keep the UI in sync with the URL.
        | History: Uses the HTML5 history API to keep the UI in sync with the URL.
        | Memory: Keeps the history of your “URL” in memory (does not read or write to the address bar)
        |
        */
        'router' => "hash",

        /*
        |--------------------------------------------------------------------------
        | Layout
        |--------------------------------------------------------------------------
        |
        | There are two layouts for Elements.
        |
        | Supported: "sidebar", "stacked"
        |
        | Sidebar: Three-column design.
        | Stacked: Everything in a single column, making integrations with
        |          existing websites that have their own sidebar or other columns already.
        |
        */
        'layout' => "sidebar",
    ]
];

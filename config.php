<?php

return [
    'baseUrl' => '',
    'production' => false,
    'company' => 'Tighten Co',
    'contact_email' => 'support@tighten.co',
    'collections' => [
        'posts' => [
            'path' => 'blog/{date|Y-m-d}/{filename}',
            'sort' => '-date',
            'author' => 'Tighten Co.',
        ],
    ],
];

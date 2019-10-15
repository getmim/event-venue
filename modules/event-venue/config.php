<?php

return [
    '__name' => 'event-venue',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/event-venue.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/event-venue' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'venue' => NULL
            ],
            [
                'event' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'event' => [
                'organizer' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'Venue\\Model\\Venue',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'venue'
                ]
            ]
        ]
    ]
];
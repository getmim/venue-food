<?php

return [
    '__name' => 'venue-food',
    '__version' => '0.0.2',
    '__git' => 'git@github.com:getmim/venue-food.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/venue-food' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'venue' => NULL
            ],
            [
                'lib-model' => NULL
            ],
            [
                'lib-formatter' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'VenueFood\\Model' => [
                'type' => 'file',
                'base' => 'modules/venue-food/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'venue-food-chain' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'user'
                ],
                'vanue_food' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'VenueFood\\Library\\VenueFood',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'venue-food'
                ],
                'venue' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'Venue\\Model\\Venue',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'venue'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'venue-food' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'user'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'venue' => [
                'food' => [
                    'type' => 'chain',
                    'chain' => [
                        'model' => [
                            'name' => 'VenueFood\\Model\\VenueFoodChain',
                            'field' => 'venue'
                        ],
                        'identity' => 'venue_food'
                    ],
                    'model' => [
                        'name' => 'VenueFood\\Model\\VenueFood',
                        'field' => 'id'
                    ],
                    'format' => 'venue-food'
                ]
            ]
        ]
    ]
];
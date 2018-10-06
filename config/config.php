<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'litecms',

    /*
     * Package.
     */
    'package'   => 'portfolio',

    /*
     * Modules.
     */
    'modules'   => ['portfolio', 
'category'],

    'portfolio'       => [
        'model' => [
            'model'                 => \Litecms\Portfolio\Models\Portfolio::class,
            'table'                 => 'portfolios',
            'presenter'             => \Litecms\Portfolio\Repositories\Presenter\PortfolioPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'title'],
            'dates'                 => ['deleted_at', 'created_at', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'title',  'details',  'category_id',  'image',  'images',  'slug',  'subtitle',  'url',  'published',  'status',  'user_id',  'user_type',  'upload_folder',  'deleted_at',  'created_at',  'updated_at'],
            'translatables'         => [],
            'upload_folder'         => 'portfolio/portfolio',
            'uploads'               => [
            
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'image' => [
                        'count' => 1,
                        'type'  => 'image',
                    ],

                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            
            ],

            'casts'                 => [
            
                'images'    => 'array',
                'image'    => 'array',
                'file'      => 'array',
            
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litecms',
            'package'   => 'Portfolio',
            'module'    => 'Portfolio',
        ],

    ],

    'category'       => [
        'model' => [
            'model'                 => \Litecms\Portfolio\Models\Category::class,
            'table'                 => 'portfolio_categories',
            'presenter'             => \Litecms\Portfolio\Repositories\Presenter\CategoryPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'created_at', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'name',  'slug',  'status',  'user_id',  'user_type',  'upload_folder',  'deleted_at',  'created_at',  'updated_at'],
            'translatables'         => [],
            'upload_folder'         => 'portfolio/category',
            'uploads'               => [
            
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            
            ],

            'casts'                 => [
            
                'images'    => 'array',
                'file'      => 'array',
            
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litecms',
            'package'   => 'Portfolio',
            'module'    => 'Category',
        ],

    ],
];

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

    'portfolio' => [
        'model'         => 'Litecms\Portfolio\Models\Portfolio',
        'table'         => 'portfolios',
        'presenter'     => \Litecms\Portfolio\Repositories\Presenter\PortfolioItemPresenter::class,
        'hidden'        => [],
        'visible'       => [],
        'guarded'       => ['*'],
        'slugs'         => ['slug' => 'name'],
        'dates'         => ['deleted_at'],
        'appends'       => [],
        'fillable'      => ['user_id', 'title', 'details', 'category_id', 'image', 'images', 'status'],
        'translate'     => ['title', 'details', 'category_id', 'image', 'images', 'status'],

        'upload-folder' => '/uploads/portfolio/portfolio',
        'uploads'       => [
            'single'   => [],
            'multiple' => [],
        ],
        'casts'         => [
        ],
        'revision'      => [],
        'perPage'       => '20',
        'search'        => [
            'name' => 'like',
            'status',
        ],
    ],
    'category'  => [
        'model'         => 'Litecms\Portfolio\Models\Category',
        'table'         => 'portfolio_categories',
        'presenter'     => \Litecms\Portfolio\Repositories\Presenter\CategoryItemPresenter::class,
        'hidden'        => [],
        'visible'       => [],
        'guarded'       => ['*'],
        'slugs'         => ['slug' => 'name'],
        'dates'         => ['deleted_at'],
        'appends'       => [],
        'fillable'      => ['user_id', 'name', 'status'],
        'translate'     => ['name', 'status'],

        'upload-folder' => '/uploads/portfolio/category',
        'uploads'       => [
            'single'   => [],
            'multiple' => [],
        ],
        'casts'         => [
        ],
        'revision'      => [],
        'perPage'       => '20',
        'search'        => [
            'name' => 'like',
            'status',
        ],
    ],
];

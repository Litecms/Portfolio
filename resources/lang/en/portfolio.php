<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for portfolio in portfolio package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  portfolio module in portfolio package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Portfolio',
    'names'         => 'Portfolios',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Portfolios',
        'sub'   => 'Portfolios',
        'list'  => 'List of portfolios',
        'edit'  => 'Edit portfolio',
        'create'    => 'Create new portfolio'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'published'           => ['Yes'=>'Yes','No'=>'No'],
            'status'              => ['Show'=>'Show','Hide'=>'Hide'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'title'                      => 'Please enter title',
        'details'                    => 'Please enter details',
        'category_id'                => 'Please enter category',
        'image'                      => 'Please enter image',
        'images'                     => 'Please enter images',
        'slug'                       => 'Please enter slug',
        'subtitle'                   => 'Please enter subtitle',
        'url'                        => 'Please enter url',
        'published'                  => 'Please select published',
        'status'                     => 'Please select status',
        'user_id'                    => 'Please enter user id',
        'user_type'                  => 'Please enter user type',
        'upload_folder'              => 'Please enter upload folder',
        'deleted_at'                 => 'Please select deleted at',
        'created_at'                 => 'Please select created at',
        'updated_at'                 => 'Please select updated at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'title'                      => 'Title',
        'details'                    => 'Details',
        'category_id'                => 'Category',
        'image'                      => 'Image',
        'images'                     => 'Images',
        'slug'                       => 'Slug',
        'subtitle'                   => 'Subtitle',
        'url'                        => 'Url',
        'published'                  => 'Published',
        'status'                     => 'Status',
        'user_id'                    => 'User id',
        'user_type'                  => 'User type',
        'upload_folder'              => 'Upload folder',
        'deleted_at'                 => 'Deleted at',
        'created_at'                 => 'Created',
        'updated_at'                 => 'Updated',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'title'                      => ['name' => 'Title', 'data-column' => 1, 'checked'],
        'category_id'                => ['name' => 'Category id', 'data-column' => 2, 'checked'],
        'published'                  => ['name' => 'Published', 'data-column' => 3, 'checked'],
        'status'                     => ['name' => 'Status', 'data-column' => 4, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Portfolios',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];

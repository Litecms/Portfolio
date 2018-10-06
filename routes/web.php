<?php

// Resource routes  for portfolio
Route::group(['prefix' => set_route_guard('web').'/portfolio'], function () {
    Route::resource('portfolio', 'PortfolioResourceController');
});

// Public  routes for portfolio
Route::get('portfolio/popular/{period?}', 'PortfolioPublicController@popular');
Route::get('portfolios/', 'PortfolioPublicController@index');
Route::get('portfolios/{slug?}', 'PortfolioPublicController@show');


// Resource routes  for category
Route::group(['prefix' => set_route_guard('web').'/portfolio'], function () {
    Route::resource('category', 'CategoryResourceController');
});

// Public  routes for category
// Route::get('category/popular/{period?}', 'CategoryPublicController@popular');
// Route::get('portfolios/', 'CategoryPublicController@index');
// Route::get('portfolios/{slug?}', 'CategoryPublicController@show');


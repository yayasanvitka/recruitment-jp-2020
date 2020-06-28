<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => [
        config('backpack.base.web_middleware', 'web'),
        config('backpack.base.middleware_key', 'admin'),
    ],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('customer', 'CustomerCrudController');
    Route::crud('settings/segment', 'SegmentCrudController');
    Route::post('settings/segment/inline/create', 'SegmentCrudController@storeInlineCreate')
        ->name('segment-inline-create-save');
    Route::post('settings/segment/inline/create/modal', 'SegmentCrudController@getInlineCreateModal')
        ->name('segment-inline-create');

    Route::crud('settings/segment-type', 'TypeCrudController');
    Route::get('settings/segment-type/ajaxFind', 'TypeCrudController@ajaxFind');
}); // this should be the absolute last line of this file

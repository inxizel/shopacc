<?php

/*
|--------------------------------------------------------------------------
| Routes Lienquan
|--------------------------------------------------------------------------
|
*/

Route::group(['namespace' => 'Zent\Lienquan\Http\Controllers', 'middleware' => ['locale', 'activity']], function () {

    /**
     * Group route admin.
     */
    Route::group(['prefix' => 'admin'], function () {

        Route::prefix('lienquan')->group(function () {

             Route::post('get_list_lienquan', 'LienquanController@getListLienquan')->name('lienquan.getListLienquan');
        });

        Route::get('/lienquan/images/{id}', 'LienquanController@images');

        Route::post('/lienquan/images', 'LienquanController@uploadImages')->name('lienquan.uploadImages');

        Route::resource('lienquan', 'LienquanController');



    });

});






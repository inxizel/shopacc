<?php

/*
|--------------------------------------------------------------------------
| Routes Member
|--------------------------------------------------------------------------
|
*/

Route::group(['namespace' => 'Zent\Member\Http\Controllers', 'middleware' => ['locale', 'activity']], function () {

    /**
     * Group route admin.
     */
    Route::group(['prefix' => 'admin'], function () {
        Route::resource('member', 'MemberController');

        Route::prefix('member')->group(function () {
            Route::post('get_list_member', 'MemberController@getListMember')->name('member.getListMember');
        });
    });

    /**
     * Group route customer.
     */
    Route::group(['prefix' => 'home'], function () {
        Route::get('member', 'MemberController@home')->name('member.home');
    });

});




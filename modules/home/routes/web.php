<?php

/*
|--------------------------------------------------------------------------
| Routes Home
|--------------------------------------------------------------------------
|
*/

Route::group(['namespace' => 'Zent\Home\Http\Controllers', 'middleware' => ['locale', 'activity']], function () {

    Route::get('/', 'HomeController@home');

    Route::get('/bkaver', 'HomeController@bkaver');

    Route::get('lien-quan.html', 'HomeController@home')->name('lienquan.home');
    
    Route::get('lien-quan/acc-{id}.html', 'HomeController@single')->name('lienquan.single');

    Route::get('lien-quan/nap-tien.html', 'HomeController@naptien')->name('lienquan.naptien');

    Route::get('lien-quan/lich-su-mua.html', 'HomeController@lichsumua')->name('lienquan.lichsumua');

    Route::get('lien-quan/huong-dan-mua.html', 'HomeController@huongdanmua')->name('lienquan.huongdanmua');

    Route::get('lien-quan/dieu-khoan.html', 'HomeController@dieukhoan')->name('lienquan.dieukhoan');

    // Ajax
    Route::post('lien-quan/ajax/filter', 'HomeController@filter')->name('lienquan.filter');
    Route::post('lien-quan/ajax/charing', 'HomeController@charing')->name('lienquan.charing');
    Route::post('lien-quan/ajax/buy', 'HomeController@buy')->name('lienquan.buy');

});




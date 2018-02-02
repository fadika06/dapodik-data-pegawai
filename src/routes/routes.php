<?php

Route::group(['prefix' => 'dd-pegawai'], function() {
    Route::get('demo', 'Bantenprov\DDPegawai\Http\Controllers\DDPegawaiController@demo');
});

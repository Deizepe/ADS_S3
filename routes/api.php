<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Cliente
    Route::post('clientes/media', 'ClienteApiController@storeMedia')->name('clientes.storeMedia');
    Route::apiResource('clientes', 'ClienteApiController');
});

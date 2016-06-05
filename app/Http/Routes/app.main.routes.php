<?php
/**
 * Created by PhpStorm.
 * User: Nikhil
 * Date: 04-06-2016
 * Time: 08:10 PM
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin-check', function () {
    return view('pages.app.homepage2');
});
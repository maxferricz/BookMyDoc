<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

if(trim(env('APP_DOMAIN_NAME'))==trim(env('DOMAIN_NAME'))){
    $route_match_type = 'name';
    $route_match_value = 'Backend';
}else{
    $route_match_type = 'domain';
    $route_match_value = trim(env('APP_DOMAIN_NAME'));
}



Route::group([$route_match_type => $route_match_value, 'namespace' => 'App', /*'middleware' => 'Authorize'*/], function()
{

    require "Routes/app.main.routes.php";

});
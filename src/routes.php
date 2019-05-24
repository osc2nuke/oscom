<?php
Route::resource('/oscom', 'Osc2nuke\OSCOM\ProductController');
Route::get('/oscom/{param}', 'Osc2nuke\OSCOM\ProductController@show');

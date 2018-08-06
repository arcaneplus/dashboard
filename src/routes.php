<?php

Route::prefix('dashboard')
	->name('arcaneplus.dashboard.')
	->group(function(){
		Route::get('/' , 'ArcanePlus\Dashboard\DashboardController@index');
	});
<?php

namespace Naranjatec\Adminer;

use Illuminate\Support\ServiceProvider;

class AdminerServiceProvider extends ServiceProvider
{

	public function boot()
	{
		$this->loadRoutesFrom(__DIR__ . '/routes/web.php');
		/*
        $this->loadTranslationsFrom(__DIR__ . '/lang', 'login');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'login');
        //$this->loadMigrationsFrom(__DIR__.'/path/to/migrations');
        */
	}

	public function register()
	{
		/*
        $this->mergeConfigFrom(__DIR__ . '/config/login.php', 'login');
        */
	}
}

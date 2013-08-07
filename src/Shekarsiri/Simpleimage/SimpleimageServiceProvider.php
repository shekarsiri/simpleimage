<?php namespace Shekarsiri\Simpleimage;

use Illuminate\Support\ServiceProvider;

class SimpleimageServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('shekarsiri/simpleimage');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['simpleimage'] = $this->app->share(function($app)
		{
			return new SimpleImage;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('simpleimage');
	}

}
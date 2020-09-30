<?php

namespace Mrpritchett\NotificationSubscriptions;

use Illuminate\Support\ServiceProvider;

class NotificationSubscriptionsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/notification-subscriptions.php' => config_path('notification-subscriptions.php'),
        ]);
        
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
    
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/notification-subscriptions.php', 'notification-subscriptions'
        );
        
    	$this->app->register(\Mrpritchett\NotificationSubscriptions\Providers\EventServiceProvider::class);
    }
}

<?php

namespace Mrpritchett\NotificationSubscriptions\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
	protected $listen = [
	    'Illuminate\Notifications\Events\NotificationSending' => [
	        'Mrpritchett\NotificationSubscriptions\Listeners\NotificationSendingListener',
	    ],
    ];

    public function boot()
    {
        parent::boot();
    }
    
    public function register()
    {
    }
}

<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Models\Portfolio;
Use App\Observers\PortfolioObserver;
use App\Models\Doc_gobierno;
use App\Observers\Doc_gobiernoObserver;
use App\Models\Post_document;
use App\Observers\Post_documentObserver;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Portfolio::observe(PortfolioObserver::class);
        Doc_gobierno::observe(Doc_gobiernoObserver::class);
        Post_document::observe(Post_documentObserver::class);
    }
}

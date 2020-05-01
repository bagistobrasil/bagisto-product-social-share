<?php
namespace BagistoBrasil\ProductSocialShare\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

/**
 * EventServiceProvider
 *
 * @copyright Copyright © 2020 Bagisto Brasil. All rights reserved.
 * @author    Carlos Gartner <contato@carlosgartner.com.br>
 */

class EventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Shop
        Event::listen('bagisto.shop.products.view.description.before', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('social_share::share');
        });
    }
}
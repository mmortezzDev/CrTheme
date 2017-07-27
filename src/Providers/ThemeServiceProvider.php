<?php

namespace CrTheme\Providers;

use IO\Extensions\Functions\Partial;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;


class ThemeServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */
    public function register()
    {

    }


    public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {

        $eventDispatcher->listen('IO.tpl.basket', function(TemplateContainer $container, $templateData)
        {
            $container->setTemplate('CrTheme::content.ThemeBasket');

        }, 0);
        return false;
    }

}
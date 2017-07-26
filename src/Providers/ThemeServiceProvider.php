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

    /**
     * Boot a template for the footer that will be displayed in the template plugin instead of the original footer.
     */
    public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {

        $eventDispatcher->listen('IO.tpl.basket', function(TemplateContainer $container, templateData)
        {
            $container->setTemplate('CrTheme::content.ThemeBasket');
            return false;
        }, 0);

    }

}
<?php

namespace CrTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class ThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('CrTheme::content.Theme');
    }
}
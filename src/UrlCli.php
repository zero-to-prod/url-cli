<?php

namespace Zerotoprod\UrlCli;

use Symfony\Component\Console\Application;

class UrlCli
{
    public static function register(Application $Application): void
    {
        $Application->add(new SrcCommand());
        $Application->add(new UrlCommand());
        $Application->add(new ParseCommand());
    }
}
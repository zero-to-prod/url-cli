<?php

namespace Zerotoprod\UrlCli;

use Symfony\Component\Console\Application;
use Zerotoprod\UrlCli\Parse\ParseCommand;
use Zerotoprod\UrlCli\Src\SrcCommand;
use Zerotoprod\UrlCli\Url\UrlCommand;

class UrlCli
{
    public static function register(Application $Application): void
    {
        $Application->add(new SrcCommand());
        $Application->add(new UrlCommand());
        $Application->add(new ParseCommand());
    }
}
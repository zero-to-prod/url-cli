<?php

namespace Zerotoprod\UrlCli;

use Zerotoprod\DataModel\DataModel;

class ParseOptions
{
    use DataModel;

    public const url = 'url';
    public string $url;

    public const default_protocol = 'default_protocol';
    public string $default_protocol = 'https://';

    public const protocols = 'protocols';
    public array $protocols = [];

}
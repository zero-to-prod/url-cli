<?php

namespace Zerotoprod\UrlCli\Parse;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/url-cli
 */
class ParseOptions
{
    use DataModel;

    /**
     * @link https://github.com/zero-to-prod/url-cli
     */
    public const url = 'url';
    /**
     * @link https://github.com/zero-to-prod/url-cli
     */
    public string $url;

    /**
     * @link https://github.com/zero-to-prod/url-cli
     */
    public const default_protocol = 'default_protocol';
    /**
     * @link https://github.com/zero-to-prod/url-cli
     */
    public string $default_protocol = 'https://';

    /**
     * @link https://github.com/zero-to-prod/url-cli
     */
    public const protocols = 'protocols';
    /**
     * @link https://github.com/zero-to-prod/url-cli
     */
    public array $protocols = [];

}
<?php

namespace Hemarao\LaravelCdn\Contracts;

/**
 * Interface CdnHelperInterface.
 *
 * @author   Hemarao Dugana <hemsbapu9644@gmail.com>
 */
interface CdnHelperInterface
{
    public function getConfigurations();

    public function validate($configuration, $required);

    public function parseUrl($url);

    public function startsWith($haystack, $needle);

    public function cleanPath($path);
}
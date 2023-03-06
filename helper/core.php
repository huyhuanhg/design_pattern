<?php

use DesignPattern\Config;
use DesignPattern\Registry;

function registry() {
    return Registry::instance();
}

function config()
{
    $args = func_get_args();

    if(2 < count($args)) {
        throw new \Error('The number of parameters exceeded the limit!');
    }

    if (0 === count($args)) {
        return Config::getConfig();
    }

    return Config::get(...$args);
}

function base()
{
    # code...
}
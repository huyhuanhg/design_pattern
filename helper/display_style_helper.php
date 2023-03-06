<?php

function dump(mixed $value, ...$values)
{
    $args = func_get_args();

    foreach($args as $arg) {
        var_dump($arg);
    }
}

function dd(mixed $value, ...$values)
{
    $args = func_get_args();

    foreach($args as $arg) {
        var_dump($arg);
    }
    die();
}

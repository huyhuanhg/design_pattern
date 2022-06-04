<?php

function writeln(string $line_in = '')
{
    echo "{$line_in}<br/>";
}

function d_strong(string $content, $hasNewLine = true)
{
    echo sprintf('%s%s', "<strong>{$content}</strong>", $hasNewLine ? '<br />' : '');
}

function d_json($object)
{
    echo json_encode($object);
}

function dump($object)
{
    var_dump($object);
}

function d_arr($arr, $hasMultiLine = true)
{
    echo sprintf(
        '%s%s%s',
        $hasMultiLine ? '<pre>' : '',
        print_r($arr, true),
        $hasMultiLine ? '</pre>' : ''
    );
}

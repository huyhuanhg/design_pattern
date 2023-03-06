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

function d_arr($arr, $hasMultiLine = true)
{
    echo sprintf(
        '%s%s%s',
        $hasMultiLine ? '<pre>' : '',
        print_r($arr, true),
        $hasMultiLine ? '</pre>' : ''
    );
}

function d_htmlspecialchars (string $htmlString, string $head = '')
{
    if (!empty($head)) {
        echo "<strong>{$head}</strong><hr>";
    }

    echo '<pre>';
    echo htmlspecialchars($htmlString);
    echo '</pre><br>';
}

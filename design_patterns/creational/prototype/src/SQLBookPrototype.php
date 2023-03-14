<?php

namespace DesignPatterns\Creational\Prototype;

class SQLBookPrototype extends BookPrototype {
    function __construct() {
        $this->topic = 'SQL';
    }
    function __clone() {
        // $this->title = clone $this->title;
    }
}

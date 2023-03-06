<?php

namespace DesignPattern\CreationalPattern\Prototype;

class PHPBookPrototype extends BookPrototype {
    function __construct() {
        $this->topic = 'PHP';
    }
    function __clone() {
        // $this->title = clone $this->title;
    }
}

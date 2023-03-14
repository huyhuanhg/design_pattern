<?php

namespace DesignPatterns\Creational\AbstractFactory;

class FormatCreator extends AbstractFactory
{
    public function setData($mode, $content)
    {
        switch (strtolower($mode)) {
            case 'json':
                return new Json($content);
                break;
            case 'xml':
                return new Xml($content);
                break;
            default:
                throw new \Error('Format mode is not exist!');
                break;
        }
    }
}
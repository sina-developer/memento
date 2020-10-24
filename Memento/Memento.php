<?php

namespace Memento;

class Memento{
    private static $state;

    public static function setState($state){
        self::$state = $state;
    }

    public static function getState(){
        return self::$state;
    }
}
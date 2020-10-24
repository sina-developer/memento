<?php

namespace Memento;

use Memento\Memento;

class Organizor{
    private $state;

    public function setState($state){
        $this->state = $state;
    }

    public function getState(){
        return $this->state;
    }

    public function saveToMemento(){
        Memento::setState($this->state);
        echo "State saved\n";
    }

    public function restoreFromMemento(){
        $this->state = Memento::getState();
        echo "State Restored\n";
    }
}
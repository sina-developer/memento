<?php

require("./autoload.php");

use Memento\Organizor;

$organizor = new Organizor();

$organizor->setState("state 1");
$organizor->setState("state 2");
$organizor->saveToMemento();
$organizor->setState("state 3");
$organizor->restoreFromMemento();
echo $organizor->getState();
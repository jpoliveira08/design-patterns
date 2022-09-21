<?php

require "Singleton.php";

// Testing the pattern
$instance = Singleton::getInstance();

$instance2 = Singleton::getInstance();

if ($instance === $instance2) {
    echo 'Same instance' . PHP_EOL;
} else {
    echo 'Singleton is not working' . PHP_EOL;
}
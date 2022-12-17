<?php
namespace Landersaki\Belajar;

class Customer {
    public function __construct(private string $name) {
        
    }
    function sayHello(string $name) {
        return "Hi $name, my name is $this->name";
    }
}
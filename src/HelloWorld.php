<?php

namespace Rachaelhogan\DatabaseExample;

class HelloWorld
{
    private $tempName;

    public function __construct()
    {
        $this->tempName = 'World';
    }

    public function sayHello($input): string
    {
        if ($input == null){
            $input = $this->tempName;
        }
        return "Hello $input!";
    }
}

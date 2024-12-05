<?php

use PHPUnit\Framework\TestCase;
use Rachaelhogan\ShopifyInterview\HelloWorld;

class HelloWorldTest extends TestCase
{
    public function testSayHello()
    {
        $helloWorld = new HelloWorld();
        $this->assertEquals('Hello World!', $helloWorld->sayHello('World'));
    }
}
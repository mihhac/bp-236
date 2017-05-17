<?php

namespace Test\IncorrectNamespace;

use PHPUnit_Framework_TestCase;

class Foo extends PHPUnit_Framework_TestCase
{
    public function testSomething()
    {
        $this->assertTrue(true);
    }
}

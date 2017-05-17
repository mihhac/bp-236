<?php

namespace Test\IncorrectNamespace;

use PHPUnit_Framework_TestCase;

class IrrelevantTest extends PHPUnit_Framework_TestCase
{
    public function testSomething()
    {
        $this->assertTrue(true);
    }
}

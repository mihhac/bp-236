<?php

namespace Test\IncorrectNamespace;

class BarTest extends Foo
{
    public function testSomething()
    {
        $this->assertTrue(true);
    }
}

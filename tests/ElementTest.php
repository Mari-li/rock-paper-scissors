<?php

namespace Tests;

use App\Element;
use PHPUnit\Framework\TestCase;

class ElementTest extends TestCase
{

    public function testName(): void
    {
        $element1 = new Element('rock');
        $this->assertEquals('rock', $element1->getName());

        $element2 = new Element('paper');
        $this->assertEquals('paper', $element2->getName());

        $element3 = new Element('scissors');
        $this->assertEquals('scissors', $element3->getName());
    }

}
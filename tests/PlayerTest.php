<?php

namespace Tests;

use App\Models\Element;
use App\Models\Player;
use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{

    public function testChoice(): void
    {
        $player = new Player;
        $this->assertInstanceOf(Element::class, $player->getChoice());
    }

}
<?php
declare(strict_types=1);

namespace Tests;

use App\Game;
use App\Models\Element;
use PHPUnit\Framework\TestCase;


class GameTest extends TestCase
{
    public function testElementsAmount(): void
    {
        $game = new Game;
        $this->assertCount(3, $game->getGameElements()->getAll());
    }

    public function testComputersChoice(): void
    {
        $game = new Game;
        $game->makeComputerChoice();
        $this->assertInstanceOf(Element::class, $game->getComputerChoice());
    }

    public function testWinCombinations(): void
    {
        $game = new Game;
        $this->assertEquals([['rock', 'scissors'], ['scissors', 'paper'], ['paper', 'rock']], $game->getWinCombination());
    }


}

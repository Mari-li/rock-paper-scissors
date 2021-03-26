<?php

namespace App;

use App\Models\Element;
use App\Models\ElementCollection;
use App\Models\Messages;
use App\Models\Player;

class Game
{
    private ElementCollection $gameElements;
    private Player $player;
    private Element $computerChoice;
    private Messages $message;
    private array $gameCombination = [];
    private array $winCombination = [
        ['rock', 'scissors'],
        ['scissors', 'paper'],
        ['paper', 'rock']
    ];

    public function __construct()
    {
        $this->gameElements = new ElementCollection();
        $this->gameElements->addElement(new Element('rock'));
        $this->gameElements->addElement(new Element('paper'));
        $this->gameElements->addElement(new Element('scissors'));
        $this->player = new Player();
        $this->message = new Messages();
    }

    public function getGameElements(): ElementCollection
    {
        return $this->gameElements;
    }

    public function makeComputerChoice(): void
    {
        $this->computerChoice = $this->getGameElements()->getRandom();
    }

    public function getGameCombination(): array
    {
        return $this->gameCombination;
    }

    public function getComputerChoice(): Element
    {
        return $this->computerChoice;
    }

    public function getWinCombination(): array
    {
        return $this->winCombination;
    }


    public function getPlayerChoice(): Element
    {
        return $this->player->getChoice();
    }

    public function checkResult(): string
    {
        if ($this->getPlayerChoice()->getName() === $this->getComputerChoice()->getName()) {
            return $this->message->printTieMessage();
        } elseif (in_array($this->getGameCombination(), $this->getWinCombination())) {
            return $this->message->printPlayerWinMessage();
        } else {
            return $this->message->printComputerWinMessage();
        }
    }

    public function play($playerChoice): void
    {
        foreach ($this->getGameElements()->getAll() as $element) {
            if ($playerChoice === $element->getName()) {
                $this->player->makeChoice($element);
            }
        }
        $this->makeComputerChoice();
        $this->gameCombination = [$this->getPlayerChoice()->getName(), $this->getComputerChoice()->getName()];
    }

}
<?php

namespace App\Models;


class Player implements Playing
{
    private Element $playerChoice;


    public function getChoice(): Element
    {
        return $this->playerChoice;
    }

    public function makeChoice($choice): void
    {
        $this->playerChoice = $choice;
    }


}
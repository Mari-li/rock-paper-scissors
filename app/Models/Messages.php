<?php


namespace App\Models;


class Messages
{
    private string $message;

    public function getMessage(): string
    {
        return $this->message;
    }

    public function printTieMessage(): string
    {
        return $this->message = 'Tie!';
    }

    public function printPlayerWinMessage(): string
    {
        return $this->message = 'You won!';
    }

    public function printComputerWinMessage(): string
    {
        return $this->message = 'Computer won. Try again!';
    }

}
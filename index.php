<?php

use App\Game;

require_once 'vendor/autoload.php';
require_once 'app/Views/ChoiceView.php';

$playerChoice = $_POST['playerChoice'];

$game = new Game();
$game->play($playerChoice);

echo '<h3>You chose: ' . $game->getPlayerChoice()->getName() . '</h3>';
echo '<h3>Computer chose: ' . $game->getComputerChoice()->getName() . '</h3>';

echo '<h2 style="color:red;">' . $game->checkResult() . '</h2>';




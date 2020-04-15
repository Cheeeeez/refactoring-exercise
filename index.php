<?php
include('TennisGame.php');

$tennisGame = new TennisGame('player1', 'player2');
$tennisGame->getScore(0, 0);
echo $tennisGame . "<br>";
$tennisGame->getScore(1, 1);
echo $tennisGame . "<br>";
$tennisGame->getScore(2, 2);
echo $tennisGame . "<br>";
$tennisGame->getScore(3, 3);
echo $tennisGame . "<br>";
$tennisGame->getScore(4, 4);
echo $tennisGame . "<br>";
$tennisGame->getScore(4, 3);
echo $tennisGame . "<br>";
$tennisGame->getScore(5, 3);
echo $tennisGame . "<br>";
$tennisGame->getScore(4, 5);
echo $tennisGame . "<br>";
$tennisGame->getScore(5, 7);
echo $tennisGame . "<br>";
<?php


class TennisGame
{
    const PLAYER1_TURN = 1;
    const PLAYER2_TURN = 2;
    const ZERO_POINT = 0;
    const ONE_POINT = 1;
    const TWO_POINT = 2;
    const THREE_POINT = 3;
    const FOUR_POINT = 4;
    public $score = '';
    public $player1Name;
    public $player2Name;

    public function __construct($player1Name, $player2Name)
    {
        $this->player1Name = $player1Name;
        $this->player2Name = $player2Name;
    }

    public function getScore($player1Score, $player2Score)
    {
        if ($player1Score == $player2Score) {
            return $this->getScoreWhenSamePoint($player1Score);
        } elseif ($player1Score >= self::FOUR_POINT || $player2Score >= self::FOUR_POINT) {
            return $this->getScoreWhenPointBiggerThan4($player1Score, $player2Score);
        } else {
            return $this->getScoreWhenPointSmallerThan4($player1Score, $player2Score);
        }
    }

    public function getScoreWhenSamePoint($playerScore)
    {
        switch ($playerScore) {
            case self::ZERO_POINT:
                $this->score = "Love-All";
                break;
            case self::ONE_POINT:
                $this->score = "Fifteen-All";
                break;
            case self::TWO_POINT:
                $this->score = "Thirty-All";
                break;
            case self::THREE_POINT:
                $this->score = "Forty-All";
                break;
            default:
                $this->score = "Deuce";
                break;
        }
        return $this->score;
    }

    public function getScoreWhenPointBiggerThan4($player1Score, $player2Score)
    {
        if ($player1Score - $player2Score == 1) {
            $this->score = "Advantage player1";
        } elseif ($player2Score - $player1Score == 1) {
            $this->score = "Advantage player2";
        } elseif ($player1Score - $player2Score >= 2) {
            $this->score = "Win for player1";
        } else {
            $this->score = "Win for player2";
        }
        return $this->score;
    }

    public function getScoreWhenPointSmallerThan4($player1Score, $player2Score)
    {
        for ($i = self::PLAYER1_TURN; $i <= self::PLAYER2_TURN; $i++) {
            if ($i == self::PLAYER1_TURN) {
                $tempScore = $player1Score;
            } else {
                $this->score .= "-";
                $tempScore = $player2Score;
            }
            switch ($tempScore) {
                case self::ZERO_POINT:
                    $this->score .= "Love";
                    break;
                case self::ONE_POINT:
                    $this->score .= "Fifteen";
                    break;
                case self::TWO_POINT:
                    $this->score .= "Thirty";
                    break;
                case self::THREE_POINT:
                    $this->score .= "Forty";
                    break;
            }
        }
        return $this->score;
    }

    public function __toString()
    {
        return $this->score;
    }
}
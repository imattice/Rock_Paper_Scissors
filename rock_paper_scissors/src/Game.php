<?php

    class Game
    {
        function makeGame($user, $comp)
        {

            if ($user == "rock" && $comp == "paper") {
                return "paper wins";
            } elseif ($user == "scissors" && $comp == "rock"){
                return "rock wins";
            } elseif ($user == "paper" && $comp == "scissors"){
                return "scissors wins";
            } elseif ($user == "rock" && $comp == "scissors") {
                return "rock wins";
            } elseif ($user == "scissors" && $comp == "paper") {
                return "scissors wins";
            } elseif ($user == "paper" && $comp == "rock") {
                return "paper wins";
            }
        }
    }

?>

<?php

    class Game
    {
        function makeGame($user, $comp, $is_random)
        {
            //$comp_choices = array("rock", "paper", "scissors");
            // $comp = array_rand($comp_choices, 1);
            // var_dump($comp_choices[$comp]);

            if ($is_random) {
                $comp_number = rand(1, 3);
                if ($comp_number == 1) {
                    $comp = "rock";
                } elseif ($comp_number == 2) {
                    $comp = "paper";
                } elseif ($comp_number == 3) {
                    $comp = "scissors";
                }
            }

            var_dump($comp);

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
            } elseif ($user = $comp) {
                return "no one wins";
            }
        }
    }

?>

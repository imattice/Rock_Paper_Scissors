<?php

    class Game
    {
        private $user;
        private $comp;

        function setUser($user) {
            $this->user = (string) $new_user;
        }

        function getUser() {
            return $this->user;
        }


        function makeGame($user, $comp)//, $is_random)
        {
            //$is_random = true;

        //    if ($is_random) {
                // $comp_number = rand(1, 3);
                // if ($comp_number == 1) {
                //     $comp = "rock";
                // } elseif ($comp_number == 2) {
                //     $comp = "paper";
                // } elseif ($comp_number == 3) {
                //     $comp = "scissors";
                // }
    //        }

        //    var_dump($comp);

            if ($user == "rock" && $comp == "paper") {
                return "You lose.";
            } elseif ($user == "scissors" && $comp == "rock"){
                return "You lose.";
            } elseif ($user == "paper" && $comp == "scissors"){
                return "You lose.";
            } elseif ($user == "rock" && $comp == "scissors") {
                return "You win!";
            } elseif ($user == "scissors" && $comp == "paper") {
                return "You win!";
            } elseif ($user == "paper" && $comp == "rock") {
                return "You win!";
            } elseif ($user = $comp) {
                return "It's a tie!";
            }
        }
    }

?>

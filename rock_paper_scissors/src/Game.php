<?php

    class Game
    {
        function makeGame($user, $comp)
        {
                if ($user == "rock" && $comp == "paper") {
                    return "paper wins";
                } elseif ($user == "scissors" && $comp == "rock"){
                    return "rock wins";
                } else {

                }
        }
    }

?>

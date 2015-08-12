<?php

    class Game
    {
        function makeGame($user, $comp)
        {
            if ($user == "rock" && $comp == "paper") {
                return "paper wins";
            } else {
                return "rock wins";
            }
        }
    }

?>

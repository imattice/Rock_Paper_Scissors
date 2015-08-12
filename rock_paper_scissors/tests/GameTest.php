<?php

    require_once "src/Game.php";

    class GameTest extends PHPUnit_Framework_TestCase
    {

        //User inputs rock, computer inputs paper; paper wins
        //input-> rock, paper
        //output-> paper wins
        function test_makeGame_compPaperWins()
        {
            //Arrange
            $test_Game = new Game;
            $user = "rock";
            $comp = "paper";
            $is_random = false;

            //Act
            $result = $test_Game->makeGame($user, $comp, $is_random);

            //Assert
            $this->assertEquals("You lose.", $result);
        }

        //User inputs scissors, computer inputs rock; rock wins
        //input->scissors, rock
        //output-> rock wins
        function test_makeGame_compRockWins()
        {
            //Arrange
            $test_Game = new Game;
            $user = "scissors";
            $comp = "rock";
            $is_random = false;

            //Act
            $result = $test_Game->makeGame($user, $comp, $is_random);

            //Assert
            $this->assertEquals("You lose.", $result);
        }

        //User inputs paper, computer inputs scissors; scissors wins
        //input-> paper, scissors
        //output-> scissor wins
        function test_makeGame_compScissorsWins()
        {
            //Arrange
            $test_Game = new Game;
            $user = "paper";
            $comp = "scissors";
            $is_random = false;

            //Act
            $result = $test_Game->makeGame($user, $comp, $is_random);

            //Assert
            $this->assertEquals("You lose.", $result);
        }

        //User inputs rock, computer inputs scissors; rock wins
        //input-> rock, scissors
        //output-> rock
        function test_makeGame_userRockWins()
        {
            //Arrange
            $test_Game = new Game;
            $user = "rock";
            $comp = "scissors";
            $is_random = false;

            //Act
            $result = $test_Game->makeGame($user, $comp, $is_random);

            //Assert
            $this->assertEquals("You win!", $result);
        }

        //User inputs scissors, computer inputs paper; scissors wins
        //input-> scissors, paper
        //output-> scissors wins
        function test_makeGame_userScissorsWins()
        {
            //Arrange
            $test_Game = new Game;
            $user = "scissors";
            $comp = "paper";
            $is_random = false;

            //Act
            $result = $test_Game->makeGame($user, $comp, $is_random);

            //Assert
            $this->assertEquals("You win!", $result);


        }

        //User inputs paper, computer inputs rock; paper wins
        //input-> paper, rock
        //output-> paper wins
        function test_makeGame_userPaperWins()
        {
            //Arrange
            $test_Game = new Game;
            $user = "paper";
            $comp = "rock";
            $is_random = false;

            //Act
            $result = $test_Game->makeGame($user, $comp, $is_random);

            //Assert
            $this->assertEquals("You win!", $result);
        }

        //User inputs matches computer input; tie -> no winner
        //input-> user = comp
        //output-> nobody wins
        function test_makeGame_noWin()
        {
            //Arrange
            $test_Game = new Game;
            $user = "rock";
            $comp = "rock";
            $is_random = false;

            //Act
            $result = $test_Game->makeGame($user, $comp, $is_random);

            //Assert
            $this->assertEquals("It's a tie!", $result);
        }
        //Computer pulls random number to decide computer choice
        //input->
        //output->
        function test_makeGame_random()
        {
            //Arrange
            $test_Game = new Game;
            $user = "rock";
            $comp = "rock";
            $is_random = true;

            //Act
            $result = $test_Game->makeGame($user, $comp, $is_random);

            //Assert
            $this->assertTrue($result == "You win!" || $result == "You lose" ||
                               $result == "It's a tie!");
        }
    }
?>

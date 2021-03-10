<!DOCTYPE html>

<html>

<head>
    <title>RPS Game</title>
</head>

<body>
    <div>

        <?php
        $roundCount = 1;
        $playerA_Score = 0;
        $playerB_Score = 0;
        $draw_count = 0;

        function generate_computer_choice()
        {
            $computer = rand(0, 90);
            // $computer < 29
            if ($computer < 30) {
                $computer_choice = "Rock";
                return $computer_choice;
            }

            // $computer > 29 && $computer < 60
            elseif ($computer > 29 && $computer < 60) {
                $computer_choice = "Paper";
                return $computer_choice;
            } else {
                $computer_choice = "Scissors";
                return $computer_choice;
            }
        }

        function compare_choices($player_choice, $computer_choice)
        {
            global $roundCount;
            global $playerA_Score;
            global $playerB_Score;
            global $draw_count;
            $roundCount++;
            // -1 = player a wins
            //  0 = draw
            //  1 = player b wins
            if ($player_choice == $computer_choice) {
                echo "Draw";
                $draw_count++;
                return 0;
            } elseif ($player_choice == "Rock" && $computer_choice == "Scissors") {
                echo "Rock crushes Scissors:" . " Player A wins...";
                $playerA_Score++;
                return -1;
            } elseif ($player_choice == "Scissors" && $computer_choice == "Paper") {
                echo "Scissors cuts Paper" . " Player A wins...";
                $playerA_Score++;
                return -1;
            } elseif ($player_choice == "Paper" && $computer_choice == "Rock") {
                echo "Paper covers Rock" . " Player A wins...";
                $playerA_Score++;
                return -1;
            } elseif ($computer_choice == "Rock" && $player_choice == "Scissors") {
                echo "Rock crushes Scissors" . " Player B wins...";
                $playerB_Score++;
                return 1;
            } elseif ($computer_choice == "Scissors" && $player_choice == "Paper") {
                echo "Scissors cuts Paper" . " Player B wins...";
                $playerB_Score++;
                return 1;
            } elseif ($computer_choice == "Paper" && $player_choice == "Rock") {
                echo "Paper covers Rock" . " Player B wins...";
                $playerB_Score++;
                return 1;
            } else {
                return 0;
            }
        }

        function Game()
        {
            global $roundCount;
            $player_choice = generate_computer_choice();
            $computer_choice = generate_computer_choice();
            $message = "";
            echo 'Round ' . $roundCount;
            echo '<br>';
            echo 'Player A:' . $player_choice;
            echo '<br>';
            echo 'Player B:' . $computer_choice;
            echo '<br>';

            compare_choices($player_choice, $computer_choice);
        }
        for ($i = 0; $i < 10; $i++) {
            Game();
            echo '<br>';
            echo '<br>';
            echo '<br>';
        }
        echo 'Player A:' . $playerA_Score . ' wins' . '<br>';
        echo 'Player B:' . $playerB_Score . ' wins' . '<br>';
        echo $draw_count . ' Games were a draw.' . '<br>';

        ?>

    </div>

</body>

</html>
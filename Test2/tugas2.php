<?php

$players = array();
$scores = array();

echo "Enter the number of players: ";
$num_players = (int)fgets(STDIN);

for ($i = 0; $i < $num_players; $i++) {
    echo "Enter the name of player " . ($i + 1) . ": ";
    $name = trim(fgets(STDIN));
    echo "Enter the score of player " . ($i + 1) . ": ";
    $score = (int)fgets(STDIN);
    $players[] = $name;
    $scores[] = $score;
}

$rankings = array_combine($players, $scores);
arsort($rankings);

echo "\nRankings:\n";
$i = 1;
foreach ($rankings as $player => $score) {
    echo $i . ". " . $player . ": " . $score . "\n";
    $i++;
}

?>

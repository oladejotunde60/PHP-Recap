<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $player = new stdClass();

    $player->name = "Olad";
    $player->score = 100;
    $player->score++;

    print_r($player);

    class Player {
        public $name = "Shade";
        public $score = 0;
    }
    $p2 = new Player();
    $p2->score++

    echo $p2;
    ?>
</body>
</html>
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
    class PartyAnimal {
        function __construct() {
            echo('Constructed \n <br>');
        }
        function something() {
            echo("Something \n <br>");
        }
        function __destruct() {
            echo("Destructed \n <br>");
        }
    }
    echo("--One \n <br>");
    $x = new PartyAnimal();
    echo("--Two \n <br>");
    $y = new PartyAnimal();
    echo("--Three \n <br>");
    $x->something();
    $y->something();
    echo("--The End? \n <br>")
    ?>
</body>
</html>
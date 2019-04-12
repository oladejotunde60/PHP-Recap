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
    echo DateTime:: RFC822. "\n <br>";
    echo DateTime:: ATOM. "\n <br>";

    $x = new DateTime('2009-10-31');
    $oops = DateTime::getLastErrors();
    print_r($oops). '\n <br>'

    
    

    
    ?>
</body>
</html>
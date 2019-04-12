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
    class Hello {
        protected $lang;
        function __construct($lang) {
            $this->lang = $lang;
        }
        function greet() {
            if ($this->lang == 'fr') return 'Bonjour';
            if ($this->lang == 'es') return 'Hola';
            if ($this->lang == 'yr') return 'E pele o';
            if ($this->lang == 'hs') return 'San nu';
            if ($this->lang == 'ig') return 'Ndewo';
            
        }
    }

    $hi = new Hello('ig');
    echo $hi->greet(). "\n <br>"
    
    ?>
</body>
</html>
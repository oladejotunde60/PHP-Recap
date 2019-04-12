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
    class MyClass {
        public $pub = "Public";
        protected $pro = "Protected";
        private $priv = "Private";

        function printHello() {
            echo $this->pub. "\n <br>";
            echo $this->pro. "\n <br>";
            echo $this->priv. "\n <br>";
        }
    }

    $obj = new MyClass();
    echo $obj->pub."\n <br>";
    echo $obj->pro."\n <br>";
    echo $obj->priv."\n <br>";
    
    $obj->printHello();
    ?>
</body>
</html>
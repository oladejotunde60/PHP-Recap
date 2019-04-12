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
    class Grad {
        public $fullname = false;
        public $givenname = false;
        public $familyname = false;
        public $othername = false;
        public $location = false;
        function get_name() {
            if ($this->fullname !== false) {
                return $this->fullname;
            }
            if ($this->familyname !== false && $this->givenname !== false && $this->othername !== false) {
                return $this->givenname. ' '. $this->familyname. ' '.$this->othername;
            }
            return false;
        }
    }
    $ola = new Grad();
    $ola->fullname = "Oladejo Tunde Oluwatosin";
    $ola->location = "Lagos";

    $frank = new Grad();
    $frank->familyname = "Idogho";
    $frank->givenname = "Franklyn";
    $frank->othername = "Onajite";
    $frank->location = "Lagos";

    print $ola->get_name(). "\n <br>";
    echo $frank->get_name(). "\n <br>";


    ?>
</body>
</html>
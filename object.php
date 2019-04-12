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
    $ola = array("fullname" => "Oladejo Tunde",
                    'loction' => "Lagos"
);
$frank = array("familyname" => "Idogho",
               'givenname' => "Frank",
               "location" => "Lagos"
);

function get_name($name) {
    if (isset($name['fullname'])) {
        return $name['fullname'];
    }
    if (isset($name['familyname']) && isset($name['givenname'])) {
        return $name['givenname']. ' '. $name['familyname'];
    }
    return false;
}
print get_name($ola). "\n <br>";
echo get_name($frank). "\n <br>";
    ?>
</body>
</html>
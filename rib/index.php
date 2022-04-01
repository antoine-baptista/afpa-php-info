<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Introduction au PHP Objet</h1>

    <h2>Instanciation</h2>

    <?php

        function my_var_dump($var) {
            echo "<pre style='background-color : pink; border: 1px solid red'>";
            //printf($var);
            var_dump($var);
            echo "</pre>";
        }
        
        // $bankCode = new bankCode("123456789");
        
        include_once("rib.class.php");

        $validator = new RIBValidator("12345", "2590", "ARE123456987e", "64");

        echo "<pre style='background-color : cyan; border: 1px solid blue'>";
        // var_dump($user1);
        var_dump($validator);
        if ($validator->isValid())  {
            echo "<p style='background-color : pink'>ce RIB est valide</p>";
        } else {
            echo "<p style='background-color : pink'>ce rib est invalide</p>";
        }        
        echo "</pre>";

        

    ?>

</body>
</html>


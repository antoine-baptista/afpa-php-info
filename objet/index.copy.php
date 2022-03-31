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
        include_once("user.class.php");
        $user1 = new User();
        $user2 = new User();
        $user3 = new User();
        $user4 = new User();

        // $user1->pseudo = "Dupont";   // Si la propriété avait été publique
        $user1->setPseudo('Dupont');    // on passe par un setter car la propriété est private
        $user1->setEmail('antoine@gmail.com');
        $user2->setPseudo('Dupond');
        $user3->setPseudo('Tintin');
        $user4->setPseudo('Castafiore');

        // adresses mail
        // $user1->envoyerEMail("Le titre", "Le texte du mail");

        if ($user1->envoyerEMail("Le titre", "Le texte du mail")) {
            echo "<p>Mail envoyé !!</p>";
        } else {
            echo "<p>Mail non envoyé !!</p>";
        }
        // var_dump($user1);
        echo "<pre style='background-color : yellow; border: 1px solid red'>";
        var_dump($user1);
        echo "</pre>";
        $user1->bloquer();

        echo "<pre style='background-color : cyan; border: 1px solid blue'>";
        // var_dump($user1);
        print_r($user1);
        echo "</pre>";

        // my_var_dump($user1);

    ?>

</body>
</html>
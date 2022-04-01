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
        $user1 = new User("Tintin", "email1@toto.fr", "pif p1f");
        $user2 = new User("Dupond", "email2@toto.fr", "pif p2f");
        $user3 = new User("Milou", "email3@toto.fr", "pif p3f");
        $user4 = new User("Rouletabille", "email4@titi.fr", "pif p4f");

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

        echo "<pre style='background-color : cyan; border: 1px solid blue'>";
        // var_dump($user1);
        print_r($user2);
        echo "</pre>";

        echo "<pre style='background-color : cyan; border: 1px solid blue'>";
        // var_dump($user1);
        print_r($user3);
        echo "</pre>";

        echo "<pre style='background-color : cyan; border: 1px solid blue'>";
        // var_dump($user1);
        print_r($user4);
        echo "</pre>";
        // my_var_dump($user1);

    ?>

    <h2>Héritage</h2>

    <?php

        include_once("admin.class.php");
        $admin = new Admin("ADMIN1", "admin@mail.com", "ADM");
        echo "<pre style='background-color : cyan; border: 1px solid blue'>";
        // var_dump($user1);
        print_r($admin);
        $admin->supprimerUser($user1);
        echo "</pre>";
        // my_var_dump($user1);

    ?>

</body>
</html>
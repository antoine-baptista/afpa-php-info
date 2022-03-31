<?php

class User 
{
    // Propriétés
    private $pseudo;
    private $email;
    private $signature;
    private $actif;

    // Méthodes
    public function __construct()
    {
        echo "construct !";
    }

    public function __destruct()
    {
        echo "destruct !";
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($newPseudo)
    {
        if (!empty($newPseudo) and strlen($newPseudo) < 11) {
        $this->pseudo = $newPseudo;
    } else {
        echo "<p>Pseudo vide ou trop long !</p>";
    }
    }
   
    public function setEmail($newEmail)
    {
        if (!empty($newEmail) and strlen($newEmail) < 100) {
            $this->email = $newEmail;
    } else {
            echo "<p>Email vide ou trop long !</p>";
    }
    }

    public function envoyerEMail ($titre, $message="Texte par défaut ...")
    {
        return mail($this->email, $titre, $message);
        // var_dump($this);
    }

    public function bloquer()
    {
        $this->actif = false;
        $this->envoyerEMail('Alerte User!', 'Vous êtes bloqué !');
    }
}

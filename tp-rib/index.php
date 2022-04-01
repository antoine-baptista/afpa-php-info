<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cohérence clef RIB</title>
</head>
<body>
    
<form action="verif.rib.php" method="POST">
  <div>
      <?php
      if (isset($_GET["erreur"])) {
        echo("Ressaisissez les informations !");
            }
        ?>
  </div>

  <div>
    <label for="codebanque">Code banque (obligatoire)</label>
    <input type="text" id="codebanque" name="codebanque" required
       minlength="5" maxlength="5" size="20">

    <br>
    <br>

    <label for="codeguichet">Code guichet (obligatoire)</label>
    <input type="text" id="codeguichet" name="codeguichet" required
    minlength="5" maxlength="5" size="20">

    <br>
    <br>

    <label for="compte">Numéro de compte (obligatoire)</label>
    <input type="text" id="compte" name="compte" required
    minlength="11" maxlength="11" size="20">

    <br>
    <br>

    <label for="clef">Clef RIB (obligatoire)</label>
    <input type="text" id="clef" name="clef" required
    minlength="2" maxlength="2" size="20">

    <br>
    <br>

    </div>
    <div>
        <input type="submit" value="Soumettre les informations">
    </div>
</form>

</body>
</html>
<?php
   $nomVal= $prenomVal= $telephoneVal= $professionVal=  $villeVal= $cpostalVal= $adresseVal= $dateNaissanceVal=$sexeVal= $descriptionVal="";
  
   if (isset($_POST)) {
    
           if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['telephone']) ) {
            $nomVal=$_POST['nom'];
            $prenomVal=$_POST['prenom'];
            $telephoneVal=$_POST['telephone'];
            $professionVal=$_POST['profession'];
            $villeVal=$_POST['ville'];
            $cpostalVal=$_POST['cpostal'];
            $adresseVal=$_POST['adresse'];
            $dateNaissanceVal=$_POST['dateNaissance'];
            $sexeVal=$_POST['sexe'];
            $descriptionVal=$_POST['description'];

            echo "Vous avez saisie:<br>";
            echo "Nom: ".$nomVal."<br>";
            echo "Prenom: ".$prenomVal."<br>";
            echo "Telephone: ".$telephoneVal."<br>";
            echo "Proffession: ".$professionVal."<br>";
            echo "Ville: ".$villeVal."<br>";
            echo "Code postal: ".$cpostalVal."<br>";
            echo "Adresse: ".$adresseVal."<br>";
            echo "Date de naissance: ".$dateNaissanceVal."<br>";
            echo "Sexe: ".$_POST['sexe']."<br>";
            echo "Description: ".$descriptionVal."<br>";
           }
           $conx= mysqli_connect('localhost','root','','repertoire');
           $sql= "insert into annuaire values(null,'$nomVal','$prenomVal','$telephoneVal','$professionVal','$villeVal','$cpostalVal','$adresseVal','$dateNaissanceVal','$sexeVal','$descriptionVal')";
           $resultat= mysqli_query($conx,$sql);
   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset width = '10%'>
<legend><h3>Informations</h3></legend>  
    <form action="" method="post">
        <table >
            <tr> <td><label for="nom">Nom(*)</label></td> </tr>
            <tr> <td><input type="text" name="nom" id="nom"></td> </tr>
            <tr> <td><label for="prenom">Prenom(*)</label></td> </tr>
            <tr> <td><input type="text" name="prenom" id="prenom"></td> </tr>
            <tr> <td><label for="telephone">Telephone(*)</label></td> </tr>
            <tr> <td><input type="number" name="telephone" id="telephone"></td> </tr>
            <tr> <td><label for="profession">Profession</label></td> </tr>
            <tr><td> <input type="text" name="profession" id="profession"> </td></tr>
            <tr> <td><label for="ville">Ville</label></td> </tr>
            <tr><td> <input type="text" name="ville" id="ville"> </td></tr>
            <tr> <td><label for="cpostal">Code postal</label></td> </tr>
            <tr><td> <input type="number" name="cpostal" id="cpostal"> </td></tr>
            <tr> <td><label for="adresse">Adresse</label></td> </tr>
            <tr><td> <textarea name="adresse" id="adresse" cols="20"></textarea> </td></tr>
            <tr> <td><label for="dateNaissance">Date de Naissance</label></td> </tr>
            <tr><td> <input type="date" name="dateNaissance" id="dateNaissance"> </td></tr>
            <tr> <td><label for="sexe">Sexe</label></td> </tr>
            <tr><td> <span>Homme <input type="radio" name="sexe" id="sexe" value="M" checked> </span> <span>Femme <input type="radio" name="sexe" id="sexe" value="F"> </span> </td></tr>
            <tr> <td><label for="description">Description</label></td> </tr>
            <tr><td> <textarea name="description" id="description" cols="25" rows="5"></textarea> </td></tr>
            <tr><td> <input type="submit" value="enregistrement"> </td></tr>
        </table>
    </form>
    </fieldset>
</body>
</html>
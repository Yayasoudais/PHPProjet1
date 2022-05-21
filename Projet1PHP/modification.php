<?php
$nomVal= $prenomVal= $telephoneVal= $professionVal=  $villeVal= $cpostalVal= $adresseVal= $dateNaissanceVal=$sexeVal= $descriptionVal="";

$id = $_GET['id'];
$conx= mysqli_connect('localhost','root','','repertoire');
$sql= "select * from annuaire where id_annuaire='$id'";
if ($resultat=mysqli_query($conx,$sql)) {
    $annuaire= mysqli_fetch_assoc($resultat);
    $nomVal= $annuaire['nom'];
    $prenomVal= $annuaire['prenom'];
    $telephoneVal= $annuaire['telephone'];
    $professionVal= $annuaire['proffession'];
    $villeVal= $annuaire['ville'];
    $cpostalVal= $annuaire['codepostal'];
    $adresseVal= $annuaire['adresse'];
    $dateNaissanceVal= $annuaire['date_de_naissance'];
    $sexeVal= $annuaire['date_de_naissance'];
    $descriptionVal= $annuaire['description'];
}

if ($_POST) {
    if (!empty($_POST)) {
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

       
    }

        $Update= "update annuaire set nom='$nomVal',prenom='$prenomVal',telephone='$telephoneVal',proffession='$professionVal',ville='$villeVal',codepostal='$cpostalVal',adresse='$adresseVal',date_de_naissance='$dateNaissanceVal',sexe='$sexeVal',description='$descriptionVal' where id_annuaire='$id'";
         var_dump($Update);
       if ($execute = mysqli_query($conx,$Update)) {
            header('location:affichage_annuaire.php');
            exit();
       } else {
           echo "Erreur". mysqli_error($conx);
       }
   
    
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
    <h3>Formulaire de modification</h3>
    <form action="" method="post">
        <table >
            <tr> <td><label for="nom">Nom(*)</label></td> </tr>
            <tr> <td><input type="text" name="nom" id="nom" value="<?=$nomVal?>"></td> </tr>
            <tr> <td><label for="prenom">Prenom(*)</label></td> </tr>
            <tr> <td><input type="text" name="prenom" id="prenom" value="<?=$prenomVal?>"></td> </tr>
            <tr> <td><label for="telephone">Telephone(*)</label></td> </tr>
            <tr> <td><input type="number" name="telephone" id="telephone" value="<?=$telephoneVal?>"></td> </tr>
            <tr> <td><label for="profession">Profession</label></td> </tr>
            <tr><td> <input type="text" name="profession" id="profession" value="<?=$professionVal?>"> </td></tr>
            <tr> <td><label for="ville">Ville</label></td> </tr>
            <tr><td> <input type="text" name="ville" id="ville" value="<?=$villeVal?>"> </td></tr>
            <tr> <td><label for="cpostal">Code postal</label></td> </tr>
            <tr><td> <input type="number" name="cpostal" id="cpostal" value="<?=$cpostalVal?>"> </td></tr>
            <tr> <td><label for="adresse">Adresse</label></td> </tr>
            <tr><td> <textarea name="adresse" id="adresse" cols="20" value=""><?=$adresseVal?></textarea> </td></tr>
            <tr> <td><label for="dateNaissance">Date de Naissance</label></td> </tr>
            <tr><td> <input type="date" name="dateNaissance" id="dateNaissance" value="<?=$dateNaissanceVal?>"> </td></tr>
            <tr> <td><label for="sexe">Sexe</label></td> </tr>
            <tr><td> <span>Homme <input type="radio" name="sexe" id="sexe" value="M" checked <?php if($sexeVal=='M') 'selected'?>> </span> <span>Femme <input type="radio" name="sexe" id="sexe" value="F" ><?php if($sexeVal=='F') 'selected'?> </span> </td></tr>
            <tr> <td><label for="description">Description</label></td> </tr>
            <tr><td> <textarea name="description" id="description" cols="25" rows="5" value=""><?=$descriptionVal?></textarea> </td></tr>
            <tr><td> <input type="submit" value="enregistrement"> </td></tr>
        </table>
    </form>
</body>
</html>
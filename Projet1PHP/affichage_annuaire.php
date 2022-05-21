<?php

$conx= mysqli_connect('localhost','root','','repertoire');
$sql="select * from annuaire";

$resultat= mysqli_query($conx,$sql);


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
    <h3>Lites des entrées dans l'annuaire <a href="formulaire"><span>+</span>Ajouter des membres</a>  </h3>
    <table border=1>
        <tr>
            <th>Id_annuaire</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Telephone</th>
            <th>Profession</th>
            <th>Ville</th>
            <th>Code Postal</th>
            <th>Adresse</th>
            <th>Date de Naissance</th>
            <th>Sexe</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        
           <?php
             if(mysqli_num_rows($resultat)!=0){
                 while ($rows=mysqli_fetch_assoc($resultat)) { ?>
                 <tr>
                    <td><?=$rows['id_annuaire']?></td>
                    <td><?=$rows['nom']?></td>
                    <td><?=$rows['prenom']?></td>
                    <td><?=$rows['telephone']?></td>
                    <td><?=$rows['proffession']?></td>
                    <td><?=$rows['ville']?></td>
                    <td><?=$rows['codepostal']?></td>
                    <td><?=$rows['adresse']?></td>
                    <td><?=$rows['date_de_naissance']?></td>
                    <td><?=$rows['sexe']?></td>
                    <td><?=$rows['description']?></td>
                    <td>
                        <a href="modification.php?id=<?=$rows['id_annuaire']?>">Modifier</a>
                        <a href="suppression.php?id=<?=$rows['id_annuaire']?>" onclick="return confirm('Voulez-vous supprimer ?')">Supprimer</a>
                    </td>
                  </tr>
             <?php    }
             }
           ?>
    </table>
    <?php
    
        $NbreFem= "select count(*) from annuaire where sexe='F'";
        $resultatfemme= mysqli_query($conx,$NbreFem);
        var_dump($resultatfemme);
        die();
        if ($resultat=mysqli_fetch_assoc($resultatfemme)) {
            echo $resultat;
        }
        $NbreHom= "select count(*) from annuaire where sexe='M'";
        $resultathomme= mysqli_query($conx,$NbreFem);
        echo "il ya ".$resultathomme." homme(x) et ".$resultatfemme." femme(x)";

       /* for ($i=0; $i < $resultatfemme ; $i++) { 
            if($rows['sexe'] =='F') {
                $f++; 
            } else {
                $m++ ;
            }
        
        }*/
        
    ?>

    

</body>
</html>
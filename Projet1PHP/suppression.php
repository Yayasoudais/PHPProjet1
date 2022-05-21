<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suppression</title>
</head>
<body>
  <?php
  
      $id = $_GET['id'];
      $conx = mysqli_connect('localhost','root','','repertoire');
      $sql = "delete from annuaire where id_annuaire='$id'";
      if ($resultat=mysqli_query($conx,$sql)) {
          header('location:affichage_annuaire.php');
      }
  ?>
    
</body>
</html>
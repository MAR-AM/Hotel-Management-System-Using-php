<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white;
        }
        form{
            margin-top: 2%;
            border: solid 1px;
            border-radius: 10px;
            box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.701);
            width: 450px;
            height: 495px;
        }
        label {
            display: inline-block;
            color: #1a1818;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: large;
            width: 200px;
            
        }
        input{
              width: 252px;
              height: 39px;
              background-color: rgb(89, 176, 202);
              border: solid 1px #f5f5f57f ;
              border-radius: 12px;
              margin-top: 5px;  
              color: purple;
              font-family:Arial, Helvetica, sans-serif;
              font-size: medium;
              font-weight: bold;
              
        }
        #button {
            width: 252px;
            height: 34px;
            border: solid 1px aqua;
            border-radius: 12px;
            background-color: rgb(0, 157, 255);
            box-shadow: 2px 2px 10px 1px aqua;
            font-weight: bolder;
            cursor: pointer;
        }
        #button a{
            text-decoration: none;
            color: black;
        }
        
  </style>
</head>

<body>
    <form action=""  method="get" align="center">
        <br>
        <label for="nom" > Nom d'hotel :</label><br>
        <input type="text" placeholder="Tapez Nom d'hotel" id="nomH" name="nomH"><br><br>
        <label for="prenom" > Adresse : </label><br>
        <input type="text" placeholder="Tapez votre Adresse " name="adresse"><br><br>
        <label for="pet"> Prix_par_nuit : </label><br>
        <input type="text" placeholder="Tapez le prix par nuit " name="prix_par_nuit"><br><br>
        <label for="pet"> Nombre des etoiles : </label><br>
        <input type="text" placeholder="Tapes le nombre des etoiles:" name="nbr_etoile"><br><br>
        <label for="pet"> Nombre de place : </label><br>
        <input type="text" placeholder="Enter nombre de place " name="nbr_places"><br><br>


        <input type="submit" id="button" value=" Ajouter ">
        
    </form>

    <?php

        
        if (isset($_GET['nomH']) && isset($_GET['adresse']) && isset($_GET['prix_par_nuit'])&& isset($_GET['nbr_etoile'])&& isset($_GET['nbr_places'])) {
                $nomH = $_GET['nomH'];
                $adresse = $_GET['adresse'];
                $prix_par_nuit = $_GET['prix_par_nuit'];
                $nbr_etoile = $_GET['nbr_etoile'];
                $nbr_places = $_GET['nbr_places'];
        }
        
        $conn  = new PDO('mysql:host=localhost; dbname=hotel','Mama','Mama@123@');

        if(!empty($nomH) && !empty($adresse) && !empty($prix_par_nuit) && !empty($nbr_etoile) && !empty($nbr_places)){
            $x = $conn->prepare('INSERT INTO hotel VALUES (Null,?,?,?,?,?)');
            $add = $x->execute([$nomH,$adresse,$prix_par_nuit,$nbr_etoile,$nbr_places]);
            header('location:listerH.php');
        }

        


        
    ?>
</body>
</html>
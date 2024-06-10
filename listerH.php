<?php 
        $conn  = new PDO('mysql:host=localhost; dbname=hotel','Mama','Mama@123@');

        $resultat = $conn->query("SELECT * FROM hotel");
    
        $data = $resultat ->fetchAll(PDO::FETCH_ASSOC);
        
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            display :flex;
            align-items:center;
            justify-content: center;
        }
        table{
            margin-top:100px;
            width: 950px;
            height:300px
        }
        td{
            border-bottom: solid 1px grey;
            text-align:center;
            padding:1px;
        }
        th{
            border-bottom: solid 2px black;
            padding: 10px;
        }
        button{
            width: 90px;
            height:30px;
            background-color:skyblue;
            border:solid 1px skyblue;
            border-radius:10px;
            text-decoration:none;
        }
        span{
            width: 200px;
            height:25px;
            border:solid 1px white;
            border-radius:10px 4px;
            padding:5px 25px;
        }
        .ajout{
            font-weight:bold;
            background-color:green;
            margin-top:60px;
            width: 130px;
            height:40px;
            float:right;
        }
    </style>
</head>
<body>
        <div class="container">
                <table  cellspacing="0" >
                <tr>
                    <th> Nom d'hotel  </th>
                    <th> Adresse  </th>
                    <th> Prix par nuit </th>
                    <th> Nombre des etoiles </th>
                    <th> Nombre de places </th>
                    <th> Operations </th>

                    
                </tr>
            <?php foreach ($data as $i):  ?>
                <tr>
                    <td><?php echo $i['nomH'] ?></td>
                    <td><?php echo $i['adresse'] ?></td>
                    <td><?php echo $i['prix_par_nuit'] ?></td>
                    <td >
                        <span>
                            <?php
                                if ($i['nbr_etoile'] < 3  ){
                                            echo '<span style="background-color:greenyellow">'.$i['nbr_etoile'];
                                } 
                                elseif ($i['nbr_etoile'] >=3  & $i['nbr_etoile'] <= 4){
                                    echo '<span style="background-color:#fefe64">'.$i['nbr_etoile'];
                                } 
                                else{
                                    echo '<span style="background-color:#ff5e5e">'.$i['nbr_etoile'];
                                }
                            ?>
                        </span>
                    </td>
                    <td><?php echo $i['nbr_places'] ?></td>
                    <td>

                    <button><a href="SupprimerH.php?id_Hotel=<?php echo $i['id_Hotel']?>" class="#button" style="color:red;text-decoration:none;">Supprimer</a></button>   
                    <button><a href="modifierH.php?id_Hotel=<?php echo $i['id_Hotel']?>" style="color:purple;text-decoration:none;" class="#button">Modifier</a></button>  

                    </td>
                </tr>
                <?php endforeach; ?>

            </table>

        </div><br>


        <button class="ajout"><a href="ajouterH.php" style="text-decoration:none;color:white;">Ajouter</a></button>   



</body>
</html>
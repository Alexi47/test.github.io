<div class="hero">
    <?php
    $prenom = 'Alfred';
    ?>

    <?php
    echo '<h1> Bienvenue ' . $prenom. ' </h1>';
    echo "Nous sommes heureux de t'accueillir sur RegMe !<br><br><br>";


    $ev1 = $_POST["ev1"];
    $ev2 = $_POST["ev2"];
    $ev3 = $_POST["ev3"];

    $p1 = $_POST["p1"]; 
    $p2 = $_POST["p2"];
    $p3 = $_POST["p3"];

    


    $evenements = array(

        "Exposition" => array(
            "Exposition La saga des grands magasins" => 283,
            "Exposition numérique PIXELS" => 600,
            "Exposition Arte Povera" => 16,
            "Exposition Figures" => 30,
            "Toulouse Photo 2024" => 199,
        ),

        "Spectacle" => array(
            "The world of Hans Zimmer" => 1550,
            "Les misérables au théatre de Châtelet" => 70,
            "Spectacle de magie Luis de Matos" => 66,
        ),

        "Salons" => array(
            "Salon Made In France" => 564,
            "Foire d'art Contemporain de Lyon" => 402,
        )

    );
    $total_inscrits = 0;
    foreach ($evenements as $events) {
        $total_inscrits += array_sum($events);
    }
    ?>
    </p>



    <!DOCTYPE html>
    <html lang="fr">

<head>
        <meta charset="UTF-8">
        <title>Événements</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
                margin: 20px 0;
                font-family: Arial, sans-serif;
            }

            th,td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: center;
            }

            th {
                background-color: #4CAF50;
                color: white;
            }

            tfoot td {
                font-weight: bold;
                background-color: #f9f9f9;
            }
        </style>


</head>
<body>


    

    <form method="post">

    <p>evenement 1 : <input type="text" name="ev1"/></p>
    <p>participant max : <input type="number" name="p1" min="10" step="10"/></p><br>

    <p>evenement 2 : <input type="text" name="ev2"/></p>
    <p>participant max : <input type="number" name="p2" min="10" step="10"/></p><br>

    <p>evenement 3 : <input type="text" name="ev3"/></p>
    <p>participant max : <input type="number" name="p3" min="10" step="10"/></p>
    <p><input type="submit" value="Valider"></p>
    </form>



    <?php
        echo " EVENEMENT 1 : " .$ev1 ," -- participant : " .$p1 ,"<br>";
        echo " EVENEMENT 2 : " .$ev2 ," -- participant : " .$p2 ,"<br>";
        echo " EVENEMENT 3 : " .$ev3 ," -- participant : " .$p3 ,"<br><br>";

        if ($p1 > $p2 and $p3){
            echo " EVENEMENT avec le plus de place : " .$ev1 ," -- participant : " .$p1;
        }

        elseif ($p2 > $p2 and $p3){
            echo " EVENEMENT avec le plus de place: " .$ev2 ," -- participant : " .$p2;
        }

        else{
            echo " EVENEMENT avec le plus de place: " .$ev3 ," -- participant : " .$p3;
        }


    ?>




        <h1>Événements et Inscriptions</h1>
        <table>
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Inscrits</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($evenements as $type => $events): ?>
                    <?php foreach ($events as $nom => $inscrits): ?>
                        <tr>
                            <td><?php echo $type; ?></td>
                            <td><?php echo $nom; ?></td>
                            <td><?php echo $inscrits; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">Total des inscrits</td>
                    <td><?php echo $total_inscrits; ?></td>
                </tr>
        </tfoot>
    </table>
</body>

    </html>
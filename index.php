<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>PhP Test</title>
</head>
<body>
    <div class="row">
    <?php
        // Creiamo un array contenente le partite di 
                    // basket di un'ipotetica tappa del calendario. 
                    // Ogni array avrà una squadra di casa e una squadra ospite, 
                    // punti fatti dalla squadra di casa e punti fatti 
                    // dalla squadra ospite. Stampiamo a schermo tutte 
                    // le partite con questo schema.
                    $db = [
                        [
                            'team1' => 'Milan',
                            'team2' => 'Torino',
                            'score1' => 30,
                            'score2' => 25
                        ],
                        [
                            'team1' => 'Trento',
                            'team2' => 'Bolzano',
                            'score1' => 50,
                            'score2' => 20
                        ],
                        [
                            'team1' => 'Bologna',
                            'team2' => 'Empoli',
                            'score1' => 10,
                            'score2' => 22
                        ]
                    ];
                    for ($i=0;$i<count($db);$i++) {
                        $match = $db[$i];
                        echo 'team 1: ' . $match['team1'] . '<br>'
                            . 'team 2: ' . $match['team2'] . '<br>'
                            . 'score 1: ' . $match['score1'] . '<br>'
                            . 'score 2: ' . $match['score2'] . '<br><hr>';
                    }
    ?>
    </div>

    <div class="row">
    
    <?php
        // Passare come parametri GET name, mail e age e verificare 
                    // (cercando i metodi che non conosciamo nella documentazione) 
                    // che name sia più lungo di 3 caratteri, che mail contenga 
                    // un punto e una chiocciola e che age sia un numero. Se 
                    // tutto è ok stampare "Accesso riuscito", altrimenti 
                    // "Accesso negato"
                    $name = $_GET['name'];
                    $mail = $_GET['mail'];
                    $age = $_GET['age'];
                    if (strlen($name) < 3 
                        || strpos($mail, '.') === false
                        || strpos($mail, '@') === false
                        || !is_numeric($age)) {
                        echo "Accesso negato";
                    } else {
                        echo "Accesso riuscito";
                    }
    ?>

    </div>



    <div class="row">
        <?php
            $arr1 = [ 1, 2, 3, 4, 5 ];
            // foreach ($arr1 as $value) {
            //     echo $value . '<br>';   
            // }
            $arr2 = [
                'key' => 'value',
                'subArr' => [
                    1, 2, 3, 4
                ],
                'value' => 100
            ];
            // foreach ($arr2 as $key => $value) {
            //     echo $key . ' => ' . $value . '<br>';
            // }
            $arr3 = [
                'teachers' => ['Fabio', 'Michele'],
                'PM' => ['Roberto']
            ];
            foreach ($arr3 as $type => $names) {
                echo $type . ': ';
                foreach ($names as $name) {
                    echo $name . ' ';
                }
                echo '<br>';
            }

       ?>
    
    </div>
    
    <div class="row">
            <?php
               $arr1 = [ 1, 2, 3, 4, 5 ];
               foreach ($arr1 as $value) {
                   echo $value . '<br>';   
               }
               $arr2 = [
                   'key' => 'value',
                   'subArr' => [
                       1, 2, 3, 4
                   ],
                   'value' => 100
               ];
               foreach ($arr2 as $key => $value) {
                   echo $key . ' => ' . $value . '<br>';
               }
               $arr3 = [
                   'teachers' => ['Fabio', 'Michele'],
                   'PM' => ['Roberto']
               ];
               foreach ($arr3 as $type => $names) {
                   echo $type . ': ';
                   foreach ($names as $name) {
                       echo $name . ' ';
                   }
                   echo '<br>';
               }
               // // --- OLD SCHOOL
               // $arr3Keys = array_keys($arr3);
               // for ($i=0;$i<count($arr3Keys);$i++) {
               //     $type = $arr3Keys[$i];
               //     $names = $arr3[$type];
               //     echo $type . ': ';
               //     for($x=0;$x<count($names);$x++) {
               //         $name = $names[$x];
               //         echo $name . ' ';
               //     }
               //     echo '<br>';
               // } 
            ?>
    </div>
</body>

</html>
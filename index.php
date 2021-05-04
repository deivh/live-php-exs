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
    <!-- ESERCIZIO 1 -->
                 <!-- Creare un array con 15 numeri casuali, 
                    tenendo conto che l'array non dovrà 
                    contenere lo stesso numero più di una volta-->
            <?php
            $array = [];
            while(count($array)<15) {
                $num = rand(1,100);
                if (!in_array($num, $array)) {
                    $array[]= $num;
                }
            }
            for ($i=0; $i <15 ; $i++) { 
                echo $array[$i];
                echo ' ';
            }
        ?>
    </div>

    <div class="row">
    <!-- ESERCIZIO 2 -->
               <!-- // Prendere un paragrafo abbastanza lungo, contenente 
                // diverse frasi. Prendere il paragrafo e suddividerlo 
                // in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

            <?php
            
            $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam sed, corporis porro a nam earum dolorum, cumque praesentium, veniam impedit sequi provident sit laudantium illo? Laborum voluptatem repellendus eius illum.";
            $cutText = explode('.',$text);
            for ($i=0; $i < count($cutText); $i++) { 
                echo "<p>" . $cutText[$i] . "." . "</p>";
            }
            ?>
    </div>


    <div class="row">
            <!-- ESERCIZIO 3
            // Utilizzare questo array: https://pastebin.com/CkX3680A. 
        // Stampiamo il nostro array mettendo gli insegnanti in un 
        // rettangolo grigio e i PM in un rettangolo verde. -->
        <?php

                $db = [
                    'teachers' => [
                        [
                            'name' => 'Michele',
                            'lastname' => 'Papagni'
                        ],
                        [
                            'name' => 'Fabio',
                            'lastname' => 'Forghieri'
                        ]
                    ],
                    'pm' => [
                        [
                            'name' => 'Roberto',
                            'lastname' => 'Marazzini'
                        ],
                        [
                            'name' => 'Federico',
                            'lastname' => 'Pellegrini'
                        ]
                    ]
                ];
                $teachers = $db['teachers'];
                $pms = $db['pm'];
                var_dump(array_keys($db)); die();
                // var_dump($teachers);
                // echo '<br>';
                // var_dump($pms);
                for ($i=0;$i<count($teachers);$i++) {
                    $teacher = $teachers[$i];
                    echo '<div class="box teachers">' 
                        . $teacher['name'] . ' ' . $teacher['lastname']
                        . '</div>';
                }
                for ($i=0;$i<count($pms);$i++) {
                    $pm = $pms[$i];
                    echo '<div class="box pm">' 
                        . $pm['name'] . ' ' . $pm['lastname']
                        . '</div>';
                }
        ?>
    </div>
</body>

</html>
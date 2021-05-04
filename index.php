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
</body>

</html>
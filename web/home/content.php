<h1 class="border">Home</h1>
<br>
<?php 
$numero = (strlen($pagina) + 7);
echo $numero; 
?>

<br>

<?php

    if($numero >= 11){
        echo "el numero es mayor que 5";
    }else{
        echo "la regla de false";
    }

    echo "<br>";

    for($i = 1; $i <= 10; $i++){
        // esto es lo que se va a repetir las veces que se configure los valores entre los parentesis
        echo $i."<br>";
    }

    echo "<br>";

    $nombre = "Yonathan";

    for($i = 0; $i < strlen($nombre); $i++){
        echo $nombre[$i];   
    }

    echo "<br>";


    $i = 100;
    while($i <= 110){
        echo $i."<br>";
        $i++;
    }



?>

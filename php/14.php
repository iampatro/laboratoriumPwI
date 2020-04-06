<?php
    $x1 = $_POST['licz1'];

    $x2 = $_POST['licz2'];

    $dodawanie = $x1 + $x2;

    $odejmowanie = $x1 - $x2;

    $mnozenie = $x1 * $x2;
    
    echo "Dodawanie: ".$dodawanie."<br/>";

    echo "Odejmowanie: ".$odejmowanie."<br/>";

    echo "Mnozenie: ".$mnozenie."<br/>";
    if($x2==0){
        echo "Nie można dziexic przez 0";
    }
    else{
        $dzielenie = $x1 / $x2;
        echo "Dzielenie: ".$dzielenie."<br/>";
    }

?>
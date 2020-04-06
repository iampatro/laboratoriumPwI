<?php
     if(!empty($_GET["licz1"]) && !empty($_GET["licz1"])){
        echo "Pierwsza liczba: ". $_GET['licz1']. "<br />";
        echo "Druga liczba: ". $_GET['licz1'];
     }
     else if(empty($_GET["licz1"])){
         echo "Nie podano pierwszej liczby";
     }
     else{
         echo "Nie podano drugiej liczby";
     }

?>
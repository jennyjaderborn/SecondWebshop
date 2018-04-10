<?php
    session_start();    
    require './sections/header.php';
    require './classes/productClasses.php';
   

    //Toppen av Cart tabellen
    echo "<table><tr><th></th><th>Produkt</th><th>Pris</th><th>Ta bort</th></tr>";

    foreach ($_SESSION['cart'] as $key => $value) {
        $cartProduct = new CartItem($value, $key);
        $cartProduct->printCartProduct();
        
      }
    
    //Slutet av tabellen  
    echo "</table>";

      
      
?>
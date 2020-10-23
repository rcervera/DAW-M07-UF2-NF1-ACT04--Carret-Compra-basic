<?php

	include 'Cart.php';

	session_start();

	// si el carret no està guardat encara en la sessió en creem un de nou
	// i el guardem
	if(!isset($_SESSION['carret'])) {
			$carret = new DAWM07\shoppingCart\Cart();
            $_SESSION['carret'] = $carret;
    }  
   
    // Recuperem el carret guardat en la sessió
    $carret  = $_SESSION['carret'];


	echo "<br>El carret conté ".$carret->count()." productes<br>";
	
	//  Afegim productes al carret
	$carret->add(10,'Ordinador 1',1200,1);
	$carret->add(20,'Ordinador 2',1300,1);
	$carret->add(30,'Ordinador 3',1300,1);
	$carret->add(40,'Ordinador 4',1300,1);
	$carret->add(50,'Ordinador 5',1300,1);
	$carret->add(60,'Ordinador 6',1300,1);
	$carret->add(70,'Ordinador 7',1300,2);
	$carret->add(80,'Ordinador 8',1300,2);
	
    // Esborrem el producte amb codi 30
	$carret->remove(30);	
	
	echo "<br>El carret conté ".$carret->count()." productes<br>";

	// Mostrem el contingut del carret
	echo "<br>Contingut del carret<br>";
	$articles = $carret->getItems();
	echo "<table border=1>";
	echo "<tr><td>Codi</td><td>Nom</td><td>Quantitat</td><td>Preu</td></tr>";
	foreach($articles as $article) {
		echo "<tr>";
		echo "<td>".$article->getId()."</td>";
		echo "<td>".$article->getName()."</td>";
		echo "<td>".$article->getQuantity()."</td>";
		echo "<td>".$article->getPrice()."</td>";
		echo "</tr>";
	}
	echo "</table>";

	// guardem el contingut modificat del carret en la sessió
	// per poder-lo recuperar en la propera crida
	 $_SESSION['carret'] = $carret;


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php


         

         require_once 'Caneta.php';
         $c1 = new Caneta;


         $c1-> caneta = "Bic </br>";
         $c1-> cor = "Azul </br>";
         
         


         $c1->rabiscar();
         $c1->destampar();
         print_r ($c1);


        





	?>

</body>
</html>
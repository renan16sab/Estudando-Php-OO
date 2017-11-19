

<html>
<head>

</head>

<body>

	<pre>
<?php

require_once 'Caneta.php';

$c1 = new Caneta("Bic","Azul",0.5);

$c2 = new Caneta("compact", "Preta", 0.7);

print_r($c1);


print_r($c2);

/** $c1-> setmodelo("Bic ");

*$c1-> setponta (0.5);
*print_r("O modelo da caneta é {$c1->getmodelo()} e a ponta é {$c1->getponta()}");
*/




?>
</pre>

</body>

</html>
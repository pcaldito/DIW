<?php 
    $factoriales = [];
    for ($i = 1; $i <= 10; $i++) {
        $fact = 1; 
        for ($j = 1; $j <= $i; $j++) {
            $fact *= $j; 
        }
        $factoriales[$i] = $fact; 
    }
	for($i=1; $i<=10; $i++){
		echo $factoriales[ $i ];
		echo '<br/>';
	}
?>
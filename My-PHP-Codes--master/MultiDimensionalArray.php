<?php
$cars = array(
				 array("Volvo",22,18),
				 array("BMW",15,30),
				 array("Saab",17,15),
			);

echo "In stock ".$cars[0][0]." Sold ".$cars[0][1]." Stock".$cars[0][2]."</br>";
echo "In stock ".$cars[1][0]." Sold ".$cars[1][1]." Stock".$cars[1][2]."</br>";
echo "In stock ".$cars[2][0]." Sold ".$cars[2][1]." Stock".$cars[2][2]."</br>";


for ($i=0; $i <3 ; $i++) { 
	# code...
	for ($j=0; $j <3 ; $j++) { 
		# code...
		echo $cars[$i][$j]." ";
	}

	echo "</br>";
}
?>

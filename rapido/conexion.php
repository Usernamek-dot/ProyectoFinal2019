<?php

$conexion=new mysqli("localhost","root","","remember");
if ($conexion) {
	echo "si";

}
else{
	echo "no dio";
}

?>
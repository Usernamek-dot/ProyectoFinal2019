<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,th,td{
			background-color:#E0FFFF;
			border-collapse: collapse;
			border:1px solid black;
		}
	</style>
</head>
<body>
<div>
	<table>
		<thead>
			<tr>
				<th>nombre</th>
				<th>apellido</th>
				<th>telefono</th>
				<th>correo</th>
				<th>profesion</th>
				<th>generacion</th>
				
			</tr>
		</thead>
		<tbody>
			<?php 
            include("conexion.php");
            $selecciona="SELECT nombre,apellido,telefono,correo,cargo,descripcion,generacion FROM usuaios";
            $conecta=$conexion->query($selecciona);
            while ($row =$conecta->fetch_assoc()) {

            	?>
             <tr>
            	<td><?php echo $row['nombre'];  ?></td>
            	<td><?php echo $row['apellido'];  ?></td>
            	<td><?php echo $row['telefono'];  ?></td>
            	<td><?php echo $row['correo'];  ?></td>
            	<td><?php echo $row['cargo'];  ?></td>
            	<td><?php echo $row['descripcion'];  ?></td>
            	<td><?php echo $row['generacion'];  ?></td>
            	
            </tr>
            

                <?php } ?>
		</tbody>
	</table>
</div>
<a href="cerrarsesion.php">cerrar sesion</a>
</body>
</html>
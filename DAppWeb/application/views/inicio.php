
<html>
	<head>
		<title>Consultas</title>
	</head>

	<body>
		<p><a href="<?php echo base_url() ?>/index.php/Controlador/simple">Consulta Simple</a></p>
		<p>Mostrara el nombre y apellido de los empleados, cuyo emp_no sea menor a 10020</p>
		<p>----------------</p>
		<p><a href="<?php echo base_url() ?>/index.php/Controlador/mediana">Consulta Mediana</a></p>
		<p>Mostrara el numero y salario de los empleados, cuyo sueldo sea mayor a 70000 y menor a 70010</p>
		<p>----------------</p>
		<p><a href="<?php echo base_url() ?>/index.php/Controlador/grande">Consulta Grande</a></p>	
		<p>Mostrara el nombre, apellido, departamento y titulo, de los empleados que trabajan en el departamento "Development"
			donde el numero de empleado este entre 10121 y 10150, y que su titulo sea ingeniero</p>
	</body>

</html>

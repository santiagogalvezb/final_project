<?php 
	//conexion con la base de datos y el servidor
	$link = mysql_connect(localhost,final_project,root,"") or die("<h2>No se encuentra el servidor</h2>");
    $db = mysql_select_db(final_project,$link) or die("<h2>Error de Conexion</h2>");
    
	//obtenemos los valores del formulario
	$Name= $_POST['Name'];
    $Artistic_Name= $_POST['Artistic_Name'];
    $City= $_POST['City'];
    $Country= $_POST['Country'];
    $Email_Address= $_POST['Email_Address'];
    $Fan_Page= $_POST['Fan_Page'];
    $Daw= $_POST['DAW'];
    $Time= $_POST['B1'];

	//Obtiene la longitus de un string
	$req = (strlen($Name)*strlen($Artistic_Name)*strlen($City)*strlen($Country)*strlen($Email_Address)*strlen($Fan_Page)*strlen($Daw)*strlen($Time)) or die("No se han llenado todos los campos");

	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO producer_data VALUES($Name','$Artistic_Name','$City','$Country','$Email_Address','$Fan_Page','$Daw','$Time')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
		</script>
	'


?>
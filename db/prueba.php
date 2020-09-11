<?php include 'connection.php';
$Name=$_POST['Name'];
$Artistic_Name=$_POST['Artistic_Name'];
$City=$_POST['City'];
$Country=$_POST['Country'];
$Email_Address=$_POST['Email_Address'];
$Fan_Page=$_POST['Fan_Page'];
$Daw=$_POST['DAW'];
$Time=$_POST['B1'];

if(isset($_POST['Name']) && !empty($_POST['Name']) &&
isset($_POST['Artistic_Name']) && !empty($_POST['Artistic_Name']) &&
isset($_POST['City']) && !empty($_POST['City']) &&
isset($_POST['Country']) && !empty($_POST['Country']) &&
isset($_POST['Email_Address']) && !empty($_POST['Email_Address']) &&
isset($_POST['Fan_Page']) && !empty($_POST['Fan_Page']) &&
isset($_POST['DAW']) && !empty($_POST['DAE']) &&
isset($_POST['B1']) && !empty($_POST['B1']) )
{
    $LinkDB= mysql_connect(localhost,final_project,root,"") or die ("No se conectó a la DB!");
    mysql_select_db(final_project,$LinkDB) or die("No se puede seleccionar la DB");

    mysql_query("INSERT INTO producer_data VALUES ('$Name','$Artistic_Name','$City','$Country','$Email_Address','$Fan_Page','$DAW','$Time'");
    echo "Datos Enviados Correctamente";
}else{
echo "Error al enviar los datos";
}
?>
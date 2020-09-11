<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //1. Data base connection data
        $dbhost 	= "localhost";
	    $dbname		= "final_project";
	    $dbuser		= "root";
	    $dbpass		= "";

        //2. Get REQUEST data
        $Name= $_POST['N'];
        $Artistic_Name= $_POST['A_N'];
        $City= $_POST['Ci'];
        $Country= $_POST['Co'];
        $Email_Address= $_POST['E_A'];
        $Fan_Page= $_POST['F_P'];
        $Setup= $_POST['Setup'];
        $Time= $_POST['Be1'];

        //3. Connect to database
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

        //4. Prepare SQL INSERT statement
        $sql = "INSERT INTO di_data (N, A_N, Ci, Co, E_A, F_P, Setup, Be1) 
        VALUES (:N, :A_N, :Ci, :Co, :E_A, :F_P, :Setup, :Be1)";

        //5. Execute SQL statement
            $q = $conn->prepare($sql);
            $result = $q->execute(array(
                ':N'=>$Name,
                ':A_N'=>$Artistic_Name,
                ':Ci'=>$City,
                ':Co'=>$Country,
                ':E_A'=>$Email_Address,
                ':F_P'=>$Fan_Page,
                ':Setup'=>$Setup,
                ':Be1'=>$Time,));

        //6. Check result (success or error), regarding the result, send client response
        if($result){
            ?>
                <div>Product <?php echo $name; ?> has been created succesfully</div>
            <?php
        }
        else {
            ?>
                <div style="color:red">An error occurred while completing the form</div>
            <?php
        }

    ?>
</body>
</html>
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
        $Name= $_POST['Name'];
        $Artistic_Name= $_POST['Artistic_Name'];
        $City= $_POST['City'];
        $Country= $_POST['Country'];
        $Email_Address= $_POST['Email_Address'];
        $Fan_Page= $_POST['Fan_Page'];
        $Daw= $_POST['DAW'];
        $Time= $_POST['B1'];

        //3. Connect to database
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

        //4. Prepare SQL INSERT statement
        $sql = "INSERT INTO producer_data (Name, Artistic_Name, City, Country, Email_Address, Fan_Page, DAW, B1) 
        VALUES (:Name, :Artistic_Name, :City, :Country, :Email_Address, :Fan_Page, :DAW, :B1)";

        //5. Execute SQL statement
            $q = $conn->prepare($sql);
            $result = $q->execute(array(
                ':Name'=>$Name,
                ':Artistic_Name'=>$Artistic_Name,
                ':City'=>$City,
                ':Country'=>$Country,
                ':Email_Address'=>$Email_Address,
                ':Fan_Page'=>$Fan_Page,
                ':DAW'=>$Daw,
                ':B1'=>$Time,));

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
<!-- PHP code to establish connection with the localserver -->

<?php
$type= $_POST['type'];

$user = 'root';
$password = 'Sumeda@123';
$database = 'dbms_prj';
$servername='localhost:3307';

$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}

//SQL query to select data from database
$sql = " SELECT c.Name,c.Phone_number_s, p.payment_id,p.payment_date,p.Payment_type,p.total_amount from customer as c , payment as p where product.Product_id='$type' ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Travel portal</title>
    
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
 
<body>
    <section>
        <h1>Online travel portal system</h1>
		<h3 align="center"><?php echo "Names of the cutomers who is going on '$type' trip"?></h3><br><br>
        
        <table>
            <tr>
                <th>Customer name</th>
                
            </tr>
            
            <?php
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <td><?php echo $rows['name'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>



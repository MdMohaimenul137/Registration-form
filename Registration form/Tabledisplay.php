 <?php
session_start();
include 'dbconnect.php';
$qury = "SELECT *FROM profilelist";
$result = mysqli_query($conn,$qury);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ProfileInfoStyle.css">
    <title>Profile Information</title>
</head>
<body>
    <table border=2>
        <tr>
            <td style="text-align: center;width: 100px;">Picture</td>
            <td style="text-align: center; padding-left: 10px;">Personal Details</td>
            
            
        </tr>

        <tr>
            <?php
            while($row = mysqli_fetch_assoc($result))
            {
           ?>
             <td >
             <img src="   <?php echo $row['picture']; ?>" width=100px>
            </td>
             <td style="padding-left: 10px;"><?php echo $row['name']; ?><br>
             Date of Birth: <?php echo $row['dob']; ?><br>
             Phone_number: <?php echo $row['phone_number']; ?><br>
             Full Address: <?php echo $row['address']; ?><br>
            
            </td><br>
            <!-- <p> Date of Birth <?php echo $row['dob']; ?></p> -->
             <!-- <td>Phone_number: <?php echo $row['phone_number']; ?></td> -->
             
             <!-- <td>Full Address: <?php echo $row['address']; ?></td> --> -->



        </tr>
           <?php
            }
           ?>



        
    </table>
    
</body>
</html>
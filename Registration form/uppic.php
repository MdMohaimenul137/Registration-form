<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form >
        <input type="file" name="uploadfile"><br><br>
        <input type="submit">
</form>

</body>
</html>
<?php
$filename= $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];

$folder  = "image/".$filename;

move_uploaded_file($tempname, $folder);






?>
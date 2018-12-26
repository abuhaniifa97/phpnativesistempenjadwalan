<?php 
$conn = mysqli_connect("localhost","root","","simulasiujikom");

$result = mysqli_query($conn, "SELECT * FROM user");


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0" >
<?php while( $row = mysqli_fetch_assoc($result)) : ?>
<tr>
<td>
<p>Username :<?php echo $row ["username"]; ?></p>
<p>Password :<?php echo $row ["password"]; ?></p>

</td>
<td>
<p>Username :<?php echo $row ["username"]; ?></p>
<p>Password :<?php echo $row ["password"]; ?></p>

</td>
</tr>
<?php endwhile;?>
</table>
    
</body>
</html>
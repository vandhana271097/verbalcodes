<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html> 
<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `crudtable` WHERE id = $id ";

mysqli_query($conn, $q);

header('location:display.php');

?>
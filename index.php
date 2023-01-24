<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php fietswinkel</title>
</head>
<body>

<?php
include ("brommer.php");
$brommer = new Brommer("zip type 4","4takt 50cc","mat zwart","getinte windscherm");
echo '<h2>'.$brommer->getModel().$brommer->getUitvoering().'</h2>';
?>













</body>
</html>
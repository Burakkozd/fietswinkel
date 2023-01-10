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
include('fiets.php');
$fiets = new Fiets ("2", "gazelle", "zwart");
$merk = $fiets->getMerk();
echo $merk;
?>

</body>
</html>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="number.php" method = "POST">

<?php
if ($_POST){
    $i = $_POST["i"];
    $j = $_POST["j"];
    $myNumber = $_POST["myNumber"];
    $mySimilarNum = $_POST["mySimilarNum"];
    $mySimilar = $_POST["mySimilar"];
    $myRange = $_POST["myRange"];
    $range = $_POST["range"];
    $range = $i;
    if ($_POST["comp"] == 0){
        $comp = rand(1, 100);
    } else{
        $comp = $_POST("comp");
    }
    $compRange = ceil ($comp / 10);
} else{
    $i = 0;
    $mySimilar = false;
    $myRange = 0;
    $range = 0;
    $comp = 0;
    $compRange = 0;
}
echo("<select name='myNumber'>");
for($j = $compRange*10; $j <= $compRange*10 && $j >= ($compRange * 10 - 9); $j--){
    if ($myNumber == $j){
        $mySimilarNum = true;
    } else {
        $mySimilarNum = false;
    }
    echo("<option value='".$j."'>".$j."</option>");
}

echo("</select>");

?>
</body>
</html>
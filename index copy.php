<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method = "POST">
<?php
if ($_POST){
    $mySimilar = $_POST["mySimilar"];
    $myRange = $_POST["myRange"];
    $range = $_POST["range"];
    if ($_POST["comp"] == 0){
        $comp = rand(1, 100);
    } else{
        $comp = $_POST["comp"];
    }
    $compRange = ceil ($comp / 10);
} else{
    $i = 0;
    $mySimilar;
    $myRange = 0;
    $range = 0;
    $comp = 0;
    $compRange = "";
}
echo("<select name='myRange'>");
for($i = 10, $range = 1; $i <= 100 && $range <= 10; $i+= 10, $range++){
    $myRange = $i / 10;
    if ($myRange == $range){
        $mySimilar = 1;
    } else {
        $mySimilar = 0;
    }
    echo("<option value='".$i."'>". $i - 9 ."..". $i ."</option>");
}

echo("</select>");
?>
<input type="hidden" name="mySimilar" value="<?php echo($mySimilar);?>">
<input type="hidden" name="range" value="<?php echo($range);?>">
<input type="hidden" name="comp" value="<?php echo($comp);?>">
<input type="hidden" name="compRange" value="<?php echo($compRange);?>">
<input type="submit" value="Зробити вибір">
</form>
<?php
if ($myRange === $compRange){
    echo("Вітаємо, Ви вгадали діапазон");
} else {
    echo("На жаль, Ви не вгадали діапазон");
}
?>
</body>
</html>
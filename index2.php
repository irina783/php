<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
var_dump($_POST); 
if ($_POST){
    $userRange = $_POST["userRange"];
    $comp = rand(1, 10);
    $comp = $_POST["comp"];
    $compRange = ceil ($comp / 10);
} else{
    $userRange = 0;
    $comp = 0;
    $compRange = 0;
}
?>
<form action="index.php" method = "POST">
<?php 
    echo("<select name='userRange'>");
    for($i = 10, $range = 1; $i <= 100 && $range <= 10; $i+= 10, $range += 1){
        if($i == 10){
            $range = 1;
        }
        if ($userRange == $range){
            $similar = true;
        } else {
            $similar = false;
        }
        echo("<option value='".$range."'>". $i - 9 ."..". $i ."</option>");
    }
    
    echo("</select>");



if ($_POST){
    if ($userRange === $compRange){
        echo("Вітаємо, Ви вгадали діапазон");
    } else {
        echo("На жаль, Ви не вгадали діапазон");
    }
}
?>
<input type="hidden" name="comp" value="<?php echo($comp);?>">
<input type="hidden" name="compRange" value="<?php echo($compRange);?>">
<input type="submit" value="Зробити вибір">
</form>
<?php
?>
</body>
</html>
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
?>
<form action="fullcomprange.php" method = "POST">
    <label><p>Будь ласка, виберіть діапазон:</p>
    <select name="userRange">
    <?php 
        $comp = rand(1, 100);
        $compRange = ceil ($comp / 10);
    for($i = 10, $range = 1; $i <= 100 && $range <= 10; $i+= 10, $range += 1){
        echo("<option value='".$range."'>". $i - 9 ."..". $i ."</option>");
    }
    
    ?>
    </select>
    </label>


<input type="hidden" name="comp" value="<?php echo($comp);?>">
<input type="hidden" name="compRange" value="<?php echo($compRange);?>">
<p><input type="submit" value="Вибрати діапазон"></p>
</form>
<?php
?>
</body>
</html>
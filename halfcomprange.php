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
   
    <?php
    $try = $_POST["try"];
    $userNumber = $_POST["userNumber"];
    $comp = $_POST["comp"];
    $compRange = $_POST["compRange"];
    $userRange = $_POST["userRange"];
    ?>
    <form action="halfcomprange.php" method="POST">
    <?php
    if ($userNumber != $comp){
        echo("Шкода, але Вам не вдалося вгадати число з повного діапазону. Спробуйте вгадати з 5-ти чисел");
        if ($comp > ($compRange * 10 - 5)){
            echo("<select name='userNumber'>");
            for($j = $compRange * 10 - 4; $j <= $compRange * 10 && $j > ($compRange * 10 - 5); $j++){
                echo("<option value='".$j."'>".$j."</option>");
            }
            echo("</select>");
        } else if ($comp <= ($compRange * 10 - 5)){
            echo("<select name='userNumber'>");
            for($j = $compRange * 10 - 9; $j <= $compRange * 10 - 5 && $j >= ($compRange * 10 - 9); $j++){
                echo("<option value='".$j."'>".$j."</option>");
            }
            echo("</select>");
        }
    } else if (isset($_POST["try"])){
        $try = $_POST["try"];
        if ($try == 2){
        echo("Ви тільки що вибрали число. Будь ласка, підтвердіть свій вибір");
        }
    }else{
        $try = 1;
    } 

    ?>
<input type="hidden" name="try" value="<?php $try++; echo($try);?>">
<input type="hidden" name="userRange" value="<?php echo($userRange);?>">
<input type="hidden" name="comp" value="<?php echo($comp);?>">
<input type="hidden" name="compRange" value="<?php echo($compRange);?>">
<input type="submit" value="Вибрати число">
</form>
<?php 
        $try = $_POST["try"];
        $userNumber = $_POST["userNumber"];

 ?>
<form action="<?php
if ($userNumber === $comp){
    echo("result.php");
} else {
    echo("comparison_of_numbers.php");
}
?>" method = "POST">
<input type="hidden" name="userRange" value="<?php echo($userRange);?>">
<input type="hidden" name="userNumber" value="<?php echo($userNumber);?>">
<input type="hidden" name="comp" value="<?php echo($comp);?>">
<input type="hidden" name="compRange" value="<?php echo($compRange);?>">
<input type="hidden" name="try" value="<?php echo($try);?>">
<input type="submit" value="Підтвердити свій вибір">
</form>

</body>
</html>
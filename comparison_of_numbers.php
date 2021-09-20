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
    <form action="result.php" method = "POST">
    <?php
    if ($userNumber != $comp){
        echo("Дуже шкода, але Ви і цього разу не вгадали число. Спробуйте вгадати хоча б з цих чисел<br>");
        if ($comp > $userNumber && $comp > ($compRange * 10 - 5)){
            echo("Ваше число менше за число загадане комп'ютером 
            <select name='userNumberLast'>");
            for($j = $userNumber + 1; $j <= $compRange * 10; $j++){
                echo("<option value='".$j."'>".$j."</option>");
            }
            echo("</select>");
        } else if ($comp < $userNumber && $comp > ($compRange * 10 - 5)){
            echo("Ваше число більше за число загадане комп'ютером 
            <select name='userNumberLast'>");
            for($j = $compRange * 10 - 4; $j < $userNumber; $j++){
                echo("<option value='".$j."'>".$j."</option>");
            }
            echo("</select>");
        } else if ($comp > $userNumber && $comp <= ($compRange * 10 - 5)){
            echo("Ваше число менше за число загадане комп'ютером
            <select name='userNumberLast'>");
            for($j = $userNumber + 1; $j <= $compRange * 10 - 5; $j++){
                echo("<option value='".$j."'>".$j."</option>");
            }
            echo("</select>");
        } else if ($comp < $userNumber && $comp <= ($compRange * 10 - 5)){
            echo("Ваше число більше за число загадане комп'ютером
            <select name='userNumberLast'>");
            for($j = $compRange * 10 - 9; $j < $userNumber; $j++){
                echo("<option value='".$j."'>".$j."</option>");
            }
            echo("</select>");
        }
    }
    ?>

<input type="hidden" name="userNumber" value="<?php echo($userNumber);?>">
<input type="hidden" name="userRange" value="<?php echo($userRange);?>">
<input type="hidden" name="comp" value="<?php echo($comp);?>">
<input type="hidden" name="compRange" value="<?php echo($compRange);?>">
<input type="hidden" name="try" value="<?php $try++; echo($try);?>">

<input type="submit" value="Вибрати число">
</form>
</body>
</html>
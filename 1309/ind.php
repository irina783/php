<form action="fullcomprange.php" method = "POST">
<select name="userNumber">
    <?php
for($j = $compRange * 10; $j <= $compRange * 10 && $j >= ($compRange * 10 - 9); $j--){
    echo("<option value='".$j."'>".$j."</option>");
}
?>
</select>

<input type="hidden" name="userRange" value="<?php echo($userRange);?>">
<input type="hidden" name="comp" value="<?php echo($comp);?>">
<input type="hidden" name="compRange" value="<?php echo($compRange);?>">
<input type="submit" value="Вибрати число">
</form>
<?php 
    if (isset($_POST["userNumber"])){
        $userNumber = $_POST["userNumber"];
    }else{
        $userNumber = 0;
    } 

 ?>
<form action="<?php
if ($userNumber === $comp){
    echo("result.php");
} else {
    echo("halfcomprange.php");
}
?>" method = "POST">
<input type="hidden" name="userRange" value="<?php echo($userRange);?>">
<input type="hidden" name="userNumber" value="<?php echo($userNumber);?>">
<input type="hidden" name="comp" value="<?php echo($comp);?>">
<input type="hidden" name="compRange" value="<?php echo($compRange);?>">
<input type="hidden" name="try" value="<?php $try++; echo($try);?>">
<input type="submit" value="Підтвердити свій вибір">
</form>












<form action="result.php" method="POST">
    <input type="hidden" name="userRange" value="<?php echo($userRange);?>">
    <input type="hidden" name="userNumber" value="<?php echo($userNumber);?>">
    <input type="hidden" name="comp" value="<?php echo($comp);?>">
    <input type="hidden" name="compRange" value="<?php echo($compRange);?>">
    <input type="hidden" name="try" value="<?php $try++; echo($try);?>">
    <input type="submit" value="Підтвердити свій вибір">
    </form>
<form action="<?php
    if ($userNumber === $comp){
        echo("result.php");
    } else {
        echo("comparison_of_numbers.php");
    }
    ?>"









<input type="hidden" name="try" value="<?php echo($try);?>">
<input type="hidden" name="userRange" value="<?php echo($userRange);?>">
<input type="hidden" name="comp" value="<?php echo($comp);?>">
<input type="hidden" name="compRange" value="<?php echo($compRange);?>">
<input type="submit" value="Вибрати число">
</form>
<?php 
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
<input type="hidden" name="try" value="<?php $try++; echo($try);?>">
<input type="submit" value="Підтвердити свій вибір">
</form>















<?php
    $try = 0;
    $userRange = $_POST["userRange"];
    $comp = $_POST["comp"];
    $compRange = $_POST["compRange"];
    if ($userRange === $compRange){
        echo("Вітаємо, Ви вгадали діапазон, тепер спробуйте вгадати число");
    } else {
        echo("Дуже шкода, Ви не вгадали діапазон, але, можливо вгадаєте число");
    }
    ?>

<form action="fullcomprange.php" method = "POST">
<select name="userNumber">
    <?php
for($j = $compRange * 10 - 9; $j <= $compRange * 10 && $j >= ($compRange * 10 - 9); $j++){
    echo("<option value='".$j."'>".$j."</option>");
}
?>
</select>

<input type="hidden" name="userRange" value="<?php echo($userRange);?>">
<input type="hidden" name="comp" value="<?php echo($comp);?>">
<input type="hidden" name="compRange" value="<?php echo($compRange);?>">
<input type="submit" value="Вибрати число">
</form>
<?php 
    if (isset($_POST["userNumber"])){
        $userNumber = $_POST["userNumber"];
        echo("Ви тільки що вибрали число. Будь ласка, підтвердіть свій вибір");
    }else{
        $userNumber = 0;
    } 

 ?>
<form action="<?php
if ($userNumber === $comp){
    echo("result.php");
} else {
    echo("halfcomprange.php");
}
?>" method = "POST">
<input type="hidden" name="userRange" value="<?php echo($userRange);?>">
<input type="hidden" name="userNumber" value="<?php echo($userNumber);?>">
<input type="hidden" name="comp" value="<?php echo($comp);?>">
<input type="hidden" name="compRange" value="<?php echo($compRange);?>">
<input type="hidden" name="try" value="<?php $try++; echo($try);?>">
<input type="submit" value="Підтвердити свій вибір">
</form>

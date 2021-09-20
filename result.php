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
    $try = $_POST["try"];
    if (isset($_POST["userNumberLast"])){
        $userNumberLast = $_POST["userNumberLast"];
    }else{
        $userNumberLast = 0;
    } 

    $userNumber = $_POST["userNumber"];
    $userRange = $_POST["userRange"];
    $comp = $_POST["comp"];
    $compRange = $_POST["compRange"];
    if ($userRange === $compRange && ($userNumber === $comp && $try == 1)){
        echo("Вітаємо! Ви одразу вгадали і діапазон, і число. Це неймовірно, але Ви дійсно екстрасенс!!!");
    } else if ($userRange === $compRange && ($userNumber === $comp && $try == 2)){
        echo("Дуже добре, Ви вгадали діапазон, але Ви не 100%-вий екстрасенс, оскільки неодразу вгадали число");
    } else if ($userRange === $compRange && ($userNumberLast === $comp && $try == 3)){
        echo("Досить добре, ви вгадали діапазон, але Ви не зовсім екстрасенс, оскільки саме число Ви вгадали лише з 3-ої спроби");
    } else if ($userRange === $compRange && $userNumber != $comp && $userNumberLast != $comp){
        echo("Непогано, Ви не вгадали число, але вгадали діапазон");
    } else if ($userRange != $compRange && ($userNumber === $comp && $try == 1)){
        echo("Ви не вгадали діапазон, але все одно молодець, адже Ви одразу вгадали число");
    } else if ($userRange != $compRange && ($userNumber === $comp && $try == 2)){
        echo("Так собі, як екстрасенс Ви не дуже, оскільки Ви вгадали число лише з половини діапазону, а сам діапазон взагалі не вгадали");
    } else if ($userRange != $compRange && ($userNumberLast === $comp && $try == 3)){
        echo("Не так вже й погано. Але Ви надто слабий екстрасенс, або Ви взагалі не екстрасенс і Вам просто трохи пощастило цього разу. Ви вгадали лише саме число, і то з останьої спроби, а діапазон взагалі не вгадали");
    } else {
        echo("На жаль, Ви ніскільки не екстрасенс");
    }
    ?>
    <form action="index.php" method = "POST">
    <input type="submit" value="Зіграти ще раз">
    </form>
</body>
</html>
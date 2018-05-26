<?php
    $x = rand(0,100);
    echo "Число " .$x. ". <br>";
    $a = 1;
    $b = 1;

    while (true) {
        if ($a > $x) {
            echo "Задуманное число НЕ входит в числовой ряд.";
            break;
        } 
        if ($a === $x) {
            echo "Задуманное число входит в числовой ряд.";
            break;
        } 
        $y = $a;
        $a = $a + $b;
        $b = $y;
        echo $a . ' <br>';
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>дз2</title>
</head>
<body>
</body>
</html>
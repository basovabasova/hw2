<?php
    $test = 123;
    function example($test) {
      return 'hello';
    }

    echo ($test .  '<br>');
   $test = example($test);
    echo ($test);

    $myArr = array(
        "Раздел 1" => array(
            "Подраздел 1" => false,
            "Подраздел 2" => false,
            "Подраздел 3" => false,
            "Подраздел 4" => false),
        "Раздел 2" => array(
            "Подраздел 1" => false,
            "Подраздел 2" => array(
                "Файл 1",
                "Файл 2",
                "Файл 3"),
            "Подраздел 3" => false,
            "Подраздел 4" => false),
        "Раздел 3" => array(
            "Подраздел 1" => array(
                "Файл 1",
                "Файл 2",
                "Файл 3"),
            "Подраздел 2" => false,
            "Подраздел 3" => false,
            "Подраздел 4" => false)
        );

    function func_rec($arr) {
        echo "<ul>";

        foreach ($arr as $key => $elem) {
            echo "<li>" . $key;

            if (is_array($elem)) {
                func_rec($elem);
            }  elseif ($elem) {
                echo " - " . $elem;
            } else {
                echo " - Пусто";
            }
            echo "</li>";
        }
        echo "</ul>";
    }

    func_rec($myArr);

    $a = 2;
    $b = 1;

      $y = $a;
      $a = $a + $b;
      $b = $y;

      echo $y;
      echo $a;
      echo $b;
$x = $_GET['x'];
      echo $x;

      $a = 1;
    $b = 1;

    while (true){
    if($a > $x){
      echo "Задуманное число НЕ входит в числовой ряд.";
      break;
    } elseif($a === $x){
      echo "Задуманное число входит в числовой ряд.";
      break;
    } else {
      $y = $a;
      $a = $a + $b;
      $b = $y;
    }
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




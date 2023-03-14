<!DOCTYPE html>
<html>
<head>
    <title>4 lab</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            <?php
                echo "1.2. Домашняя работа: Solve the equation.";
            ?>
        </h1>
    </header>
    <main>   
    <?php
// заданное уравнение
$equation = 'x * 7 = 49';

// разбиение уравнения на левую и правую части
$parts = explode('=', $equation);
$left = trim($parts[0]);
$right = trim($parts[1]);

// определение оператора
if (strpos($left, '+') !== false) {
  $operator = '+';
} elseif (strpos($left, '-') !== false) {
  $operator = '-';
} elseif (strpos($left, '*') !== false) {
  $operator = '*';
} elseif (strpos($left, '/') !== false) {
  $operator = '/';
}

// расположение известной переменной
if (strpos($left, 'x') !== false) {
  $variable_position = 'left';
} elseif (strpos($right, 'x') !== false) {
  $variable_position = 'right';
}

// вычисление значения переменной
if ($variable_position == 'left') {
  eval("\$x = ($right $operator 1) / 7;");
} else {
  eval("\$x = ($right $operator 7);");
}

// вывод результата
echo "x = $x";
?>        
        <div>
            Уравнение (вариант 6):  
            <?php
                echo $equation
                ?>
        </div>
        <div>
            Ответ: 
            <?php
                echo $x
            ?>
        </div>
    </main>
    <footer>
        <p>
        <?php
                echo "Николаева Анастасия, группа 221-321";
            ?>
        </p>
    </footer>

</body>
</html>
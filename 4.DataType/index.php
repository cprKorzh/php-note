<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        Целое число:
        <div>
            <?php
            $num = 10;
            echo "num = $num";
            ?>
        </div>
        Целое отрицательное число:
        <div>
            <?php
            $num = -10;
            echo "num = $num";
            ?>
        </div>
        Двоичное число:
        <div>
            <?php
            $num = 0b11100;;
            echo "num = 0b" . decbin($num);
            ?>
        </div>
        Восьмеричное число:
        <div>
            <?php
            $num = 034;;
            echo "num = 0" . decoct($num);
            ?>
        </div>
        Шестнадцатиричное число:
        <div>
            <?php
            $num = 0x1C;;
            echo "num = 0x" . dechex($num);
            ?>
        </div>
    </div>
    <br>
    <div>
        Дробное число:
        <div>
            <?php
            $float = 3.14;
            echo "float = $float";
            ?>
        </div>
    </div>
    <br>
    <div>
        Логическое значение:
        <div>
            <?php
            $bool = true;
            echo "bool = $bool";
            ?>
        </div>
    </div>
    <br>
    <div>
        Строковое значение:
        <div>
            <?php
            $a = 10;
            $b = 5;
            $result = "$a+$b <br>";
            echo $result;
            $result = '$a+$b';
            echo $result;
            ?>
        </div>
    </div>
</body>

</html>
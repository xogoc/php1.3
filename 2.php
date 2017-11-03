<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>php1.3.2</title>
</head>
<body>
    <?php
    $i = 0;
    do {
        if ($i == 0) echo "0 - это ноль.<br>";
        elseif ($i%2 == 0) echo $i." - четное число.<br>";
        else echo $i." - нечетное число.<br>";
    } while ($i++ < 10)
    ?>
</body>
</html>
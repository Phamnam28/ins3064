<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //http://ins3064.test/week2.1/ex3.php/?x=2&y=9
        $x = $_GET["x"];
        $y = $_GET["y"];
        echo "x == y: ".($x==$y)."<br/>";
        echo "x != y: ".($x!=$y)."<br/>";
        echo "x < y: ".($x<$y)."<br/>";
        echo "x > y: ".($x>$y)."<br/>";
        echo "x <= y: ".($x<=$y)."<br/>";
        echo "x >= y: ".($x>=$y)."<br/>";
        ?>
    </body>
</html>
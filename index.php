<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $provisions = array("specs","mugs","sausage rolls");
    foreach($provisions as $x){
        print "<p>$x</p>";
    }
    $provisions[1] = "hugs";
    $provisions[2] = "";

    foreach($provisions as $x){
        print "<p>$x</p>";
    }
    ?>
</p>
</body>
</html>
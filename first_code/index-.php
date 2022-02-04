<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>

<body style="text-align:center ; font-size:320px">

    <?php
        echo "<hr>";
        $mygrade = 40;

        if ($mygrade < 50 and $mygrade >= 0) {
            echo '<font color="#777"> TEST </font>';
            echo "F";
        } elseif ($mygrade < 60 and $mygrade >= 50) {
            echo "D";
        } elseif ($mygrade < 70 and $mygrade >= 60) {
            echo "C";
        } elseif ($mygrade < 80 and  $mygrade >= 70) {
            echo "B";
        } elseif ($mygrade >= 80 and $mygrade <= 100) {
            echo "A";
        } else {
            echo "กรอกผิดแล้วเว้ย";
        }
    ?>

</body>

</html>
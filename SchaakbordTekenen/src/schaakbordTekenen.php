<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css?=v220220231342">
    <title>Schaakbord Tekenen</title>
</head>
<body>
    <h1>Schaakbord Tekenen</h1>
    <table>
    <?php

    for ($row = 1; $row <= 8; $row++) {
        echo "<tr>";
        for ($column = 1; $column <= 8; $column++) {
            $total = $row + $column;
            if ($total % 2 == 0) {
                echo "<td class='white'></td>";
            } else {
                echo "<td class='black'></td>";
            }
        }
    }

    ?>

    </table>
</body>
</html>
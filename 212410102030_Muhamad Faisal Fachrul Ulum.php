<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 03 - Introducing to PHP</title>
    <style>
        * {
            font-family: sans-serif;
        }

        header {
            text-align: center;
            margin: 50px 0;
            font-weight: 600;
            font-size: 30px;
        }

        td {
            padding-left: 10px;
        }

        footer {
            text-align: center;
            margin: 20px 0;
        }
    </style>
</head>

<header>Praktikum 03 - Introducing to PHP</header>

<body>
    <table cellspacing="0" border="1px" align="center">

        <?php
        for ($i = 1; $i <= 100; $i++) {
            echo "<tr height='30px'><td width='65px' align='center' style='padding-left:0px; ";
            if ($i % 3 == 0) {
                echo "background-color:black;color:white;";
            }
            echo "'>$i.</td>";
            echo "<td width='700px'";
            if ($i % 3 == 0) {
                echo "style='background-color:black;color:white;'";
            }
            echo ">Ini baris ke-$i.</td></tr>";
        }
        ?>

    </table>
</body>

<footer>
    {212410102030} - {Muhamad Faisal Fachrul Ulum}
</footer>

</html>
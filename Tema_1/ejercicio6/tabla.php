<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>

                <? for ($i = 0; $i < $x; $i++) {
                    echo "<td>" . $i . "</td>";
                } ?>
            </tr>
        </thead>
        <tbody>
            <?
            for ($i = 0; $i < $y; $i++) {
                echo
                    "<tr>
                " ?>
                <?
                for ($i = 0; $i < $x; $i++) {
                    echo "<td>" . $i . "</td>";
                } ?>
                <?
                "</tr>";
            } ?>
            ?>

        </tbody>
    </table>
</body>

</html>
<html>
<p>Esto es una frase de ejmplo</p>
<form action="index.php" method="post">
    <button type="submit">Modificar estilos</button>
</form>

</html>
<link rel="stylesheet" href="index.php" title="Color">
<?php
header("Content-type: text/css");
$color = rand(0, 360);
$num = rand(1, 2);
print "p {\n";
print " background-color: hwb($color 85% 5%);\n";
print " color: hwb($color 15% 55%);\n";
print " font-size: $num.rem;\n";

print "}\n";
?>
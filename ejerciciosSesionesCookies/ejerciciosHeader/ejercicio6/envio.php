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
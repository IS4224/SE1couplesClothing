<?php

$myfile = fopen("end.txt", "w");
$txt = $_GET["lat"] . " " . $_GET["long"];
fwrite($myfile, $txt);
fclose($myfile);

?>

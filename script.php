<?php
$array = array("HTC,SAMSUNG,APPLE,LG,NOLIA,MOTOROLA");
echo "<ul>";
for($i=0;$i<count($array);$i++){
	echo("<li>".$array[$i]."</li>");
}
echo "</ul>";

<?php
$filename = "happy.jpg";
$alt = "happy life";
$classname = "box";

/* concatenation */
echo "<img src='images/" . $filename . "' alt='" . $alt . "' class='" . $classname . "'>";

echo "<br><br>";

/* embedded variables */
echo "<img src='images/$filename' alt='$alt' class='$classname'>";

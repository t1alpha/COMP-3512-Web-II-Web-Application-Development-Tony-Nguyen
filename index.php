<?php
$url = "https://www.google.com";
$text = "Visit Google";
$target = "_blank";

/* concatenation */
echo "<a href='" . $url . "' target='" . $target . "'>" . $text . "</a>";

echo "<br><br>";

/* embedded variables */
echo "<a href='$url' target='$target'>$text</a>";

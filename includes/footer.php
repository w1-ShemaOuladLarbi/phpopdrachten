<?php
echo "<div class=\"footer\">
    © 2020
</div>";
?>
<body>
<div>
<?php
$uur = date("H");
date_default_timezone_set("Europe/Amsterdam");
if ($uur < "12") {
    echo "Goedemorgen";
} elseif ($uur < "17") {
    echo "Goedemiddag";
} else {
    echo "Goedeavond";
}
?>
</div>
</body>
<?php
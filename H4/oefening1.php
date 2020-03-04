<?php
/**
 * User: Shema Oulad Larbi
 * Date: 12-2-2020
 * Time: 11:06 AM
 * File: index.php
 */
?>
<header>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../index.css">
    <title><?php print "Opdracht 2.2"; ?></title>
</header>

<?php
    date_default_timezone_set("Europe/Amsterdam");
    $vandaag = date("d-m-Y H:i");
    "De datum en tijd hier in Nederland is: $vandaag";
?>

<?php
date_default_timezone_set("Asia/Tokyo");
$vandaag = date("d-m-Y H:i");
echo "De datum en tijd in Japan is nu : $vandaag";
?>


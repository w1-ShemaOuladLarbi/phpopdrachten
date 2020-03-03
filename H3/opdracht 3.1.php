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
        <title><?php print "Opdracht 3.1"; ?></title>
    </header>
<body>
<h1>Opdracht 3.1</h1>
<div>
    <?php
    $evenement = "Elfstedentocht";
    $evenement2 = "Alvestedetocht";
    $getal1 = 200;
    $activiteit = "schaatstocht";
    $ijs = "natuurijs";
    $organisator = "Koninklijke Vereniging De Friesche Elf Steden";
    $stad = "Leeuwarden";
    $provincie = "Friesland";
    $getal2 = 15;
    $getal3 = 1909;
    $getal4 = 1;
    $verhaal = $evenement.$evenement2.$getal1.$activiteit.$ijs.$organisator.$stad.$provincie.$getal2.$getal3.$getal4;
    ?>
    <p>
        <?php
        echo $verhaal;
        ?>
    </p>
    <?php
    $verhaal2 = $evenement . $evenement2 . $getal1 . $activiteit . $ijs . $organisator . $stad . $provincie . $getal2 . $getal3 . $getal4;
    ?>
    <p>
        <?php
        echo $verhaal2;
        ?>
    </p>
</div>
</body>
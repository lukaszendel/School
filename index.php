<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Válec a jeho funkce
        </title>
    </head>
    <body>
        <?php
        require 'Valec.php';
        $valec = new Valec();

        echo $valec->info();

        echo 'Počet vrcholů válce:' . $valec->pocetVrcholu() . '<br />';

        echo 'Je válec trojrozměrný?' . $valec->is3D() . '<br />';

        echo 'Objem valce:' . $valec->objem() . '<br />';

        echo 'Povrch valce:' . $valec->povrch() . '<br />';
        ?>
    </body>
</html>
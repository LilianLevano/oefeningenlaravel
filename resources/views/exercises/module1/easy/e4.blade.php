<x-site-layout>
    <?php

    $variabele1 = 1;
    $variabele2 = null;

    $variabele3 = false;
    $variabele4 = true;

    $variabele5 = 1;

    var_dump(isset ($variabele1));
    echo "<br>";
    var_dump(isset ($variabele2));
    echo "<br>";
    var_dump(empty(($variabele3)));
    echo "<br>";
    var_dump(empty(($variabele4)));

    echo "<br>";

    var_dump(empty(($variabele5)));
    var_dump(isset($variabele5));

    ?>
</x-site-layout>

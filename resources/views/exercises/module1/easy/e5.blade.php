<x-site-layout>
    <?php

    $getal = 10;

    $result = match ($getal){
        10 => "Getal is gelijk aan $getal",
        20 => "Getal is gelijk aan $getal",
        30 => "Getal is gelijk aan $getal",
        default => "Getal correspondeert niet"
    };

    echo $result;

    ?>
</x-site-layout>

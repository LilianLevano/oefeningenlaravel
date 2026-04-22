<x-site-layout>
    <?php

    define('PI', 3.1415);

        $functionsExecutedCounter = 0;

        function functieGebruikt(): void
        {
            global $functionsExecutedCounter;
            $functionsExecutedCounter++;
            echo "<br>Aantal geroepte functie: " . $functionsExecutedCounter . "<br>";
        }

        function berekenOppervlakteCirkel(float $straal)
        {
            functieGebruikt();
            return PI * $straal * $straal;
        }

        function berekenOppvervlakteRechthoek(float $zijde1, float $zijde2)
        {
            functieGebruikt();
            return $zijde1 * $zijde2;
        }

        function berekenOppvervlakteVierkant(float $zijde)
        {
            return berekenOppvervlakteRechthoek($zijde, $zijde);
        }

        function berekenOppvervlakteDriehoek(float $basis, float $hoogte)
        {
            functieGebruikt();
            return 0.5 * $basis * $hoogte;
        }

        echo berekenOppervlakteCirkel(10);
        echo "<br>";
        echo berekenOppvervlakteRechthoek(5, 2);
        echo "<br>";
        echo berekenOppvervlakteVierkant(5);
        echo "<br>";
        echo berekenOppvervlakteDriehoek(2, 4);
        echo "<br>";
        echo berekenOppvervlakteDriehoek(2, 4);

    ?>
</x-site-layout>

<x-site-layout>
    <?php

    function splitsNaam($naam)
    {

        $pos = strpos($naam, " "); //zoekt de eerste spatie --> houdt de index van die spatie

        $voornaam = substr($naam, 0, $pos);             // van deze string, start bij index (dus letter) 0 (eerste letter), tot de positie van de eerste spatie
        $achternaam = substr($naam, $pos + 1);          // van deze string, start bij de index van de spatie + 1 om de eerste letter na de spatie te hebben, ga door tot de einde


        echo "Voornaam: $voornaam <br>";
        echo "Achternaam: $achternaam <br>";


    }

    function voegNamen($voornaam, $achternaam){
        return $voornaam . " " . $achternaam;
    }

    echo splitsNaam("Lilian Levano");

    echo voegNamen('Lilian', 'Levano');

    ?>
</x-site-layout>

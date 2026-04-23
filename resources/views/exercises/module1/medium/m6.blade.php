<x-site-layout>

    @php
        $zin = "hallo, dit is een voorbEeldzin.";
        $woordPalindroom ="kak";
        $woord ="Voorbeeld";



        function isPalindroom($woord) {
            // maak alles lowercase zodat het niet case-sensitive is
            $woord = strtolower($woord);

            // draai het woord om
            $omgekeerd = strrev($woord);

            // vergelijking
            if ($woord === $omgekeerd) {
                return "$woord is een palindroom.";
            } else {
                return "$woord is geen palindroom.";
            }
        }

        function isAnagram($woord1, $woord2) {

            $a = str_split(strtolower(str_replace(' ', '', $woord1)));
            $b = str_split(strtolower(str_replace(' ', '', $woord2)));

            sort($a);
            sort($b);

            if ($a === $b) {
                echo "$woord1 en $woord2 zijn anagrammen";
            } else {
                echo "$woord1 en $woord2 zijn geen anagrammen";
            }
        }
    @endphp

    <p>Zin met hoofdletters = {{strtoupper($zin)}}</p>
    <p>Zin met kleine letter = {{strtolower($zin)}}</p>
    <p>Zin met enkel de eerste letter als hoofdletter = {{ucfirst(strtolower($zin))}}</p>
    <p>Zin met hoofdletters voor elke eerste letter van elke woord = {{ucwords(strtolower($zin))}}</p>
    <br>
    <p>Alle letters van een woord geshuffeld: {{str_shuffle($woord)}}</p>
    <p>{{isPalindroom($woordPalindroom)}}</p>
    <p>{{isPalindroom($woord)}}</p>
    <br>
    <p>{{isAnagram("Torchwood", "Doctor Who")}}</p>
    <p>{{isAnagram("Hello", "World")}}</p>

</x-site-layout>

<x-site-layout>
    @php
        $countriesInEU = [
            "Allemagne","Autriche","Belgique","Bulgarie","Chypre","Croatie",
            "Danemark","Espagne","Estonie","Finlande","France","Grèce","Hongrie",
            "Irlande","Italie","Lettonie","Lituanie","Luxembourg","Malte",
            "Pays-Bas","Pologne","Portugal","République tchèque","Roumanie",
            "Slovaquie","Slovénie","Suède"
        ];

        sort($countriesInEU);
        $aantal = count($countriesInEU);
    @endphp

    <h2 class="text-3xl font-bold">
        De Europese Unie telt sinds 2020 {{ $aantal }} landen.
    </h2>

    <h3 class="text-2xl font-bold">
        Hier zijn alle landen, alfabetisch gerankschikt:
    </h3>

    <ol class="list-decimal pl-5">
        @foreach ($countriesInEU as $country)
            <li>{{ $country }}</li>
        @endforeach
    </ol>



</x-site-layout>

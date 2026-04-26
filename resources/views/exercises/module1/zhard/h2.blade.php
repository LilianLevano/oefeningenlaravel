<x-site-layout>
    @php
        $countries =[
            "Allemagne","Autriche","Belgique","Bulgarie","Chypre","Croatie",
            "Danemark","Espagne","Estonie","Finlande","France","Grèce","Hongrie",
            "Irlande","Italie","Lettonie","Lituanie","Luxembourg","Malte",
            "Pays-Bas","Pologne","Portugal","République tchèque","Roumanie",
            "Slovaquie","Slovénie","Suède"
        ];


    @endphp

    <h1 class="text-3xl font-bold">List of Countries in the EU whom begins with B</h1>

    <div>

        <ol class="list-decimal">
        @foreach($countries as $country)
            @if($country[0] == "B")
                <li><p>{{$country}}</p></li>
            @endif
        @endforeach
        </ol>
    </div>
</x-site-layout>

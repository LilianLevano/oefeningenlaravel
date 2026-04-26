<x-site-layout>
    @php
        $countries =[
            "Allemagne","Autriche","Belgique","Bulgarie","Chypre","Croatie",
            "Danemark","Espagne","Estonie","Finlande","France","Grèce","Hongrie",
            "Irlande","Italie","Lettonie","Lituanie","Luxembourg","Malte",
            "Pays-Bas","Pologne","Portugal","République tchèque","Roumanie",
            "Slovaquie","Slovénie","Suède"
        ];

      $countries = array_filter($countries, function($land){
          return $land[0] !== "B";
      })


    @endphp

    <h1 class="text-3xl font-bold">List of Countries in the EU who does not begins with B</h1>

    <div>

        <ol class="list-decimal ml-3">
            @foreach($countries as $country)
                <li><p>{{$country}}</p></li>

            @endforeach
        </ol>
    </div>
</x-site-layout>

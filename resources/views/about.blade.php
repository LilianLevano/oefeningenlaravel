<x-site-layout>
    <h1>Hey {{$person}}</h1>

    <h1>Je bent {{$age}}</h1>

    <h1 class="text-3xl font-bold">Hobbies: </h1>
    <p>Deze persoon heeft {{count($hobbies)}} hobby's</p>
    <ul class="list-disc ml-10">
        @foreach($hobbies as $hobby)
            <li><p>{{$hobby}}</p></li>
        @endforeach
    </ul>

    @dump($family)

    <h1 class="text-3xl font-bold">Familie van deze persoon:</h1>
    <p>Aantal leden: {{count($family)}}</p>

    <ul class="list-disc list-inside">
        @foreach($family as $member)
            <li>
                {{$member['name']}} ({{$member['gender']}})

            @if($member['gender'] == 'female')
                <span class="text-pink-500">F</span>
            @else
                <span class="text-blue-500">M</span>
            @endif
            </li>
        @endforeach
    </ul>

    <h1 class="mt-10 text-3xl font-bold">Family object</h1>
    <ul>
        @foreach($familyAsObject as $member)
            <li>{{$member->name}} ({{$member->gender}})</li>
        @endforeach
    </ul>

</x-site-layout>

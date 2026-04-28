<x-site-layout>
    @php
        $user = (object) ["name" => "Lilian", "age" => 89]
    @endphp

    <p>{{$user->name}}, age:
    @if($user->age >= 18)
        <span>Adult</span>
    @elseif($user->age < 18 && $user->age >= 15)
        <span>Teen</span>

        @else
        <span>Child</span>

    @endif

    </p>
</x-site-layout>

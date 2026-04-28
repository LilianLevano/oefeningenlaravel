<x-site-layout>
@php
    $users = [
        ["name" => "Lilian", "mail" => "lilian.levano@gmail.com"],
        ["name" => "Bilal", "mail" => "bilal.benhammou@gmail.com"]

    ];

    $ex = "Salut"
@endphp

    <h1 class="text-3xl font-bold">Users and mails:</h1>

    <ul>
        @foreach($users as $user)
            <li><p>{{$user['name']}}, mail: {{$user['mail']}}</p></li>
        @endforeach
    </ul>
</x-site-layout>

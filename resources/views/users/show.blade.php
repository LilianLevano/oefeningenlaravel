<x-site-layout>
    <div>
        <h2 class="text-2xl font-bold">{{$user->name}}</h2>
        <p>Mail: {{$user->email}}</p>
        <h3 class="text-xl underline">Geschreven artikels: </h3>

        <ol class="list-decimal">
            @foreach($user->articles as $article)
                <li><a class="underline text-blue-500 " href="/articles/{{$article->id}}">{{$article->title}}</a></li>


            @endforeach

        </ol>
    </div>
</x-site-layout>

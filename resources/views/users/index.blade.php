<x-site-layout>
    @slot('title', 'Users')
    <div class="flex flex-col  gap-15">
        @foreach($users as $user)

            <div>
                <a href="/users/{{$user->id}}"> <h2 class="text-2xl font-bold">{{$user->name}}</h2></a>
                <p>Mail: {{$user->email}}</p>
                <h3 class="text-xl underline">Geschreven artikels: </h3>

                <ol class="list-decimal">
                    @foreach($user->articles as $article)
                        <li><a class="underline text-blue-500 " href="/articles/{{$article->id}}">{{$article->title}}</a></li>


                    @endforeach

                </ol>
            </div>


        @endforeach
    </div>


</x-site-layout>

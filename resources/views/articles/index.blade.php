<x-site-layout>

    @slot('title', 'Articles')

    <div class="flex flex-row  flex-wrap justify-center items-center gap-20">
        @foreach($articles as $article)
            <div class="basis-2xl">


                <span class="bg-gray-300 rounded-2xl pl-4 pr-4">{{$article->category}}</span>
                <a href="/articles/{{$article->id}}">

                    <h2 class="text-2xl font-bold">{{$article->title}}</h2>
                    <p>{{$article->content}}</p>
                </a>

                <b>By</b>:
                <a href="/users/{{$article->author->id}}" class="text-blue-500 underline">
                    {{$article->author->name}}
                </a>
            </div>
        @endforeach
    </div>

</x-site-layout>

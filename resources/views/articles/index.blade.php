<x-site-layout>

    @slot('title', 'Articles')

    <div class="flex flex-row  flex-wrap justify-center items-center gap-20">
        @foreach($articles as $article)
<<<<<<< HEAD
            <a href="/articles/{{$article->id}}" class="basis-2xl">
                <span class="bg-gray-300 rounded-2xl pl-4 pr-4">{{$article->category->name}}</span>
                <span class="text-right text-green-400">By: {{$article->author->name}}</span>
                <h2 class="text-2xl font-bold ">{{$article->title}}</h2>
=======
            <div class="basis-2xl">


                <span class="bg-gray-300 rounded-2xl pl-4 pr-4">{{$article->category}}</span>
                <a href="/articles/{{$article->id}}">
>>>>>>> 7be68f648d65bcb8195beca8d495042e0e12a919

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

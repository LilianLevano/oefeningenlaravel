<x-site-layout>
    @slot('title', $article->title)

    <div class="basis-2xl">
<<<<<<< HEAD
        <span class="bg-gray-300 rounded-2xl pl-4 pr-4">{{$article->category->name}}</span>
        <span class="text-right text-green-400">{{$article->author->name}}</span>
=======
        <span class="bg-gray-300 rounded-2xl pl-4 pr-4">{{$article->category}}</span>
        <span class="text-right text-green-400">
            <a href="/users/{{$article->author->id}}" class="text-blue-500 underline">
                    {{$article->author->name}}
                </a></span>
>>>>>>> 7be68f648d65bcb8195beca8d495042e0e12a919
        <h2 class="text-2xl font-bold ">{{$article->title}}</h2>


        <p>{{$article->content}}</p>
    </div>
</x-site-layout>

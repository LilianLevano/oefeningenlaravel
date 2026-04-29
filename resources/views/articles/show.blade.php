<x-site-layout>
    @slot('title', $article->title)

    <div class="basis-2xl">
        <span class="bg-gray-300 rounded-2xl pl-4 pr-4">{{$article->category}}</span>
        <span class="text-right text-green-400">
            <a href="/users/{{$article->author->id}}" class="text-blue-500 underline">
                    {{$article->author->name}}
                </a></span>
        <h2 class="text-2xl font-bold ">{{$article->title}}</h2>


        <p>{{$article->content}}</p>
    </div>
</x-site-layout>

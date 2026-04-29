<x-site-layout>
    <div class="flex flex-row  flex-wrap justify-center items-center gap-20">
        @foreach($articles as $article)
            <a href="/articles/{{$article->id}}" class="basis-2xl">
                <span class="bg-gray-300 rounded-2xl pl-4 pr-4">{{$article->category->name}}</span>
                <span class="text-right text-green-400">By: {{$article->author->name}}</span>
                <h2 class="text-2xl font-bold ">{{$article->title}}</h2>


                <p>{{$article->content}}</p>
            </a>
        @endforeach
    </div>

</x-site-layout>

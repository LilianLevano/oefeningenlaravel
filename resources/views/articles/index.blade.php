<x-site-layout>

    @slot('title', 'Articles')

    <div class="flex flex-row  flex-wrap justify-center items-center gap-20">
        @foreach($articles as $article)



            <div class="flex flex-col basis-2xl border justify-center rounded-3xl border-b-black p-4 h-56">


                <span class="bg-gray-300 rounded-2xl pl-4 pr-4 max-w-fit">{{$article->category->name}}</span>
                <a href="/articles/{{$article->id}}">

                    <h2 class="text-2xl font-bold">{{$article->title}}</h2>
                    <p>{{$article->content}}</p>
                </a>

                <div class="flex gap-1">
                    <b>By:</b>
                    <a href="/users/{{$article->author->id}}" class="text-blue-500 underline">
                        {{$article->author->name}}
                    </a>
                </div>

            </div>
        @endforeach
    </div>

</x-site-layout>

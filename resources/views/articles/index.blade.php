<x-site-layout>
    @slot('title', 'Articles')

    <h1 class="text-3xl font-bold text-center mb-10 text-white">
        Articles
    </h1>

    <div class="flex flex-col items-center gap-10">
        @foreach($articles as $article)

            <div class="relative group max-w-2xl w-full">

                <!-- Carte cliquable -->
                <a href="/articles/{{$article->id}}"
                   class="block p-[2px] rounded-xl
                          bg-gradient-to-r from-purple-500 via-blue-500 to-green-400
                          transition-all duration-300 hover:scale-105 hover:shadow-xl">

                    <div class="bg-[#1A1826] p-5 rounded-xl transition hover:bg-[#221F33]">

                        <span class="bg-gray-300 text-black rounded-2xl px-4 py-1 inline-block mb-2">
                            {{$article->category->name}}
                        </span>

                        <h2 class="text-2xl font-bold text-white">
                            {{$article->title}}
                        </h2>

                        <p class="text-gray-400 mb-6">
                            {{$article->content}}
                        </p>

                    </div>
                </a>

                <!-- Lien auteur (séparé) -->
                <a href="/users/{{$article->author->id}}"
                   class="absolute bottom-4 right-4 text-sm text-[#6366F1]
                          transition-all duration-300
                          group-hover:scale-105 hover:text-[#818CF8]">
                    By: {{$article->author->name}}
                </a>

                <p class="absolute bottom-4 left-4 text-sm text-[#6366F1]
                          transition-all duration-300
                          group-hover:scale-105 hover:text-[#818CF8]">

                    Published at: {{$article->published_at}}

                </p>

            </div>

        @endforeach
    </div>

</x-site-layout>

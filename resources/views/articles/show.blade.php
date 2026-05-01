<x-site-layout>
    @slot('title', $article->title)

    <div class=" group flex justify-center ">

        <!-- Carte cliquable -->
        <div
           class="block p-[2px] rounded-xl
                          bg-gradient-to-r from-purple-500 via-blue-500 to-green-400
                          transition-all duration-300 relative ">

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

            <p class="absolute bottom-4 left-4 text-sm text-[#6366F1]
                          transition-all duration-300
                           hover:text-[#818CF8]">

                Published at: {{$article->published_at}}

            </p>

            <a href="/users/{{$article->author->id}}"
               class="absolute bottom-4 right-4 text-sm text-[#6366F1]
                          transition-all duration-300
                           hover:text-[#818CF8]">
                By: {{$article->author->name}}
            </a>
        </div>

        <!-- Lien auteur (séparé) -->



    </div>
</x-site-layout>

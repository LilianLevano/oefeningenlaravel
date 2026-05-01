<x-site-layout>

    @slot('title', $task->title)

    <div class="relative group flex justify-center">
        <div
           class="group block p-[2px] rounded-xl bg-gradient-to-r from-purple-500 via-blue-500 to-green-400
              transition-all duration-300  group-hover:shadow-xl max-w-2xl relative">

            <div class="bg-[#1A1826] hover:bg-[#221F33] p-5 rounded-xl max-w-2xl">



                <h3 class="text-2xl font-bold mb-2  transition">
                    {{$task['title']}}
                </h3>

                <p class="text-[#9CA3AF]">{{$task['description']}}</p>

                <p class="mt-2 text-sm text-gray-500">
                    Deadline: {{$task['due_date']}}
                </p>

                <p class="mt-2">
                    Status:
                    @if($task['completed'] == 0)
                        <span class="text-red-500">❌</span>
                    @else
                        <span class="text-green-500">✔️</span>
                    @endif
                </p>

                <p class="text-sm mt-1">Prioriteit: {{$task['priority']}}</p>




            </div>

            <!-- lien séparé -->
            <a href="/users/{{$task->author->id}}"
               class="absolute bottom-4 right-4 text-sm text-[#6366F1]
              transition-all duration-300
              group-hover:scale-105 hover:text-[#818CF8] ">
                By: {{$task->author->name}}
            </a>
        </div>


    </div>
</x-site-layout>

<x-site-layout>

    <h1 class="text-3xl font-bold text-center mb-10">Task Manager</h1>

<div class="flex flex-col items-center-safe gap-10  ">
    @foreach($tasks as $task)

        <a class="w-2xl border border-b-black rounded-4xl p-5 hover:shadow-2xl transition" href="/tasks/{{$task->id}}">
            <h3 class="text-2xl font-bold">{{$task['title']}}</h3>
            <p>{{$task['description']}}</p>
            <p>Deadline: {{$task['due_date']}}</p>
            <p>Status:
                @if($task['completed'] == 0)
                    <span>❌</span>
                @else
                    <span>✔️</span>
                @endif
            </p>

            <p>Prioriteit: {{$task['priority']}}</p>
        </a>



    @endforeach
</div>


</x-site-layout>

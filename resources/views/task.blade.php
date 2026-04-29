<x-site-layout>

    <h1 class="text-3xl font-bold text-center mb-10">Task Manager</h1>

<div class="flex flex-col gap-8">
    @foreach($tasks as $task)

        <div>
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
        </div>



    @endforeach
</div>


</x-site-layout>

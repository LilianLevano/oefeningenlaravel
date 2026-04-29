<x-site-layout>

    @slot('title', $task->title)

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
</x-site-layout>

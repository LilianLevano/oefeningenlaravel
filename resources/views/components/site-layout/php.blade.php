<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oefeningen Laravel</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


</head>
<body>

<header class="mb-5">
    <nav id="nav" class="flex flex-row flex-wrap gap-10 bg-neutral-500 text-white items-center">
        @foreach ($modules as $module)
            <div style="margin-bottom: 10px; width: 179px; height: 178px" class="border border-amber-50 text-center p-1" >
                <strong class="text-black ">{{ ucfirst($module['name']) }}</strong>

                <div  class="flex flex-row gap-5">
                    @foreach ($module['levels'] as $level)
                        <div>
                            <em>{{ ucfirst($level['name']) }}</em>

                            <div style="margin-left: 15px;">
                                @foreach ($level['exercises'] as $exercise)
                                    <a href="/{{ $module['name'] }}/{{ $level['name'] }}/{{ $exercise }}" class="text-blue-400 underline">
                                        {{ strtoupper($exercise) }}
                                    </a><br>

                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach


        <hr>
    </nav>
    <button id="hideNav" class="h-15 px-6 py-3 bg-blue-300 rounded-3xl  transform hover:-translate-y-1 transition duration-300 cursor-pointer absolute right-4 top-3">Hide Nav</button>
</header>

<div class="bg"></div>

<main class="pl-6">
    {{$slot}}
</main>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>

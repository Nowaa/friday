@extends ('layout')

@section ('content')

<body class="antialiased">

    <div class="mt-20">
        @foreach ($status as $st)
        @if(!$st->tasks->IsEmpty()) 
        <div class="ml-4 md:mx-auto mt-8 max-w md:max-w-2xl">
            <h1 class="text-lg text-gray-800 border-b-2">
                {{ $st->name }}
            </h1>
        </div>
        @endif
            @foreach ($st->tasks as $task)
                
                <div class="px-3 py-2 bg-gray-100 border-l-4 {{ \App\Http\Controllers\TaskController::setPriorityColor($task->priority) ?? '' }} rounded mx-4 md:mx-auto my-5 max-w md:max-w-2xl">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center ml-2 text-gray-700 font-semibold -mt-1 lg:text-md">{{ $task->description }}</div>
                        <div class="bg-transparent text-xs  border border-gray-700 py-1 rounded-lg text-teal-800 hover:text-teal-100 hover:bg-gray-700">
                            <div class="flex items-center px-3">{{ $task->category }}</div>
                        </div>
                    </div>
                    <div class="ml-2 text-gray-700 text-xs">Added {{ $task->created_at->diffForHumans() }}</div>
                </div>
            @endforeach
        @endforeach
    </div>
</body>

@endsection
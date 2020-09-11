@extends ('layout')

@section ('content')

<body class="antialiased">

    <div class="mt-40">
        @foreach ($tasks as $task)
        <div class="px-3 py-3 bg-white shadow-xs rounded mx-4 md:mx-auto my-10 max-w-md md:max-w-2xl">
            <div class="flex items-center justify-between">
                <div class="flex items-center ml-8 text-lg font-semibold text-gray-900 -mt-1">{{ $task->description }}</div>
                <div class="bg-gray-700 py-1 rounded-lg shadow-xs hover:bg-blue-500">
                    <div class="flex items-center px-4 text-white text-sm">{{$task->category}}</div>
                </div>
            </div>
            <div class="ml-8 text-gray-700 text-xs">Created at {{$task->created_at}}</div>
        </div>

        @endforeach
    </div>
</body>

@endsection
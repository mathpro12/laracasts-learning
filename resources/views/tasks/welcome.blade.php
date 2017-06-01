@extends ('layouts.master')

@section ('content')

 <ul>

 	<h1>Tasks</h1>

    @foreach ($tasks as $task)

        <li> 

            <a href = "/tasks/{{ $task->id }}">
                {{ $task->body }}
            </a>

        </li>

    @endforeach

</ul>

@endsection



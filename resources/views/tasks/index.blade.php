@extends ('layouts.application')

@section('content')
	<ul>
		@foreach($tasks as $task)
			<a href="/tasks/{{ $task->id }}">
				<li>{{ $task->body }}</li>
			</a>
		@endforeach
	</ul>
@endsection	

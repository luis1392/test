@extends ('layouts.application')

@section('content')
	<ul>
		@foreach($posts as $post)
			@include('posts.post');
		@endforeach
	</ul>
@endsection	

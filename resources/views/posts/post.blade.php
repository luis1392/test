<h2>{{ $post->title }}</h2>


<p>
	{{ $post->created_at->toFormattedDateString() }}
</p>


<p>
	
	{{ $post->body }}
</p>
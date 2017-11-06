@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title">Freed prisoner</h1>
  <p class="lead blog-description">All freed prisoners</p>
  @foreach ($posts as $post)
    <a href="/posts/{{ $post->id }}"><p>This is post id: {{ $post->id }}, {{ $post->title }}</p></a>
  @endforeach
</div>
@endsection
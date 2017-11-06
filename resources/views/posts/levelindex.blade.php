@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title">Level</h1>
  <p class="lead blog-description">All levels</p>
  @foreach ($posts as $post)
    <a href="/posts/{{ $post->id }}"><p>This is post id: {{ $post->id }}, {{ $post->title }}</p></a>
  @endforeach
</div>
@endsection
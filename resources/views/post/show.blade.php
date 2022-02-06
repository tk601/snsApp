@extends('layouts.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <h3>{{ $post->title }}</h3>
    </div>
    <div class="card-body">
        <p class="card-text">
            {{ $post->body }}
        </p>
    </div>
    <div class="card-footer">
        <span class="mr-2 float-right">
            投稿日時・・・{{ $post->created_at->diffForHumans() }}
        </span>
    </div>
</div>
@endsection

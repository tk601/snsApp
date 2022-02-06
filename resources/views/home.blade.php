@extends('layouts.app')
@section('content')

{{ $user->name }}さんこんにちわ
@foreach ($posts as $post)
<div class="">
    <div>
        <div class="">
            <a href="{{ route('post.show',$post) }}">タイトル「{{ $post->title }}」</a>
            <div class="">
                ユーザー名「{{ $post->user->name }}」
            </div>
            <div class="">
                <div class="">
                    作成日「{{ $post->created_at->diffForHumans() }}」
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <p>本文「{{ $post->body }}」</p>
    </div>
</div>
@endforeach

@endsection

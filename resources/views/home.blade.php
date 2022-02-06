@extends('layouts.app')
@section('content')

@foreach ($posts as $post)
{{ $user->name }}さんこんにちわ
<div class="">
    <div>
        <div class="">
            {{ $post->title }}
            <div class="">
                {{ $post->user->name }}
            </div>
            <div class="">
                <div class="">
                    作成日
                </div>
                <div class="">
                    {{ $post->created_at->diffForHumans() }}
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <p>{{ $post->body }}</p>
    </div>
</div>
@endforeach

@endsection

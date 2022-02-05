@extends('layouts.app')
@section('content')
<div class="">
    <h1>新規投稿</h1>

    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">件名</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label for="body">本文</label>
            <textarea name="body" class="form-control" id="body" rows="8" cols="80"></textarea>
        </div>
        <div class="form-group">
            <label for="image">画像</label>
            <div class="">
                <input type="file" name="image" id="image">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">送信する</button>
    </form>
</div>
@endsection

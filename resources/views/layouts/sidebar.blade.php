<div class="list-group">
    <a href="{{ route('home') }}"
    class="{{ url()->current()==route('home')? 'list-group-item active': 'list-group-item'}}">
        <i class="fas fa-home pr-2"></i><span>一覧の表示</span>
    </a>
    <a href="{{ route('post.create') }}"
    class="{{ url()->current()==route('post.create')? 'list-group-item active': 'list-group-item'}}">
        <i class="fas fa-pen-nib pr-2"></i><span>新規投稿</span>
    </a>
</div>

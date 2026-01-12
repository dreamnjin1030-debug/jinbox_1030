<!DOCTYPE html>
<html lang="ja">
<header>
    <h1>編集中</h1>

    <p>
        編集中:{{ $post->title}}
    </p>

    <nav>
        <a href="{{ route('posts.index') }}">一覧へ戻る</a>
    </nav>
</header>

<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='text' name='post[body]' value="{{ $post->body }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>


</html>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUDアプリ</title>
</head>

<body>
    <h1>詳細ページ</h1>
    <hr>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <a href="{{ route('post.edit', $post) }}"><button>更新</button></a>
    <form action="{{ route('post.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>削除</button>
    </form>
    <hr>
</body>

</html>

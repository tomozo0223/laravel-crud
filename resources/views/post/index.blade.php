<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUDアプリ</title>
</head>

<body>
    <h1>一覧ページ</h1>
    @if (session('message'))
        {{ session('message') }}
    @endif
    @foreach ($posts as $post)
        <a href="{{ route('post.show', $post) }}">
            <h2>{{ $post->title }}</h2>
        </a>
        <p>{{ $post->body }}</p>
        <hr>
    @endforeach
</body>

</html>

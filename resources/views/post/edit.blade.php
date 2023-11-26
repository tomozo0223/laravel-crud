<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUDアプリ</title>
</head>

<body>
    <h1>更新ページ</h1>
    <hr>
    <form action="{{ route('post.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">タイトル:</label>
        <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
        <br>
        <label for="body">本文</label>
        <textarea name="body" id="body" cols="30" rows="10">{{ old('body', $post->body) }}</textarea>
        <br>
        <button>更新</button>
    </form>
</body>

</html>

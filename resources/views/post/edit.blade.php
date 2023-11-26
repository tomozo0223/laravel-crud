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
        @error('title')
            <p style="color:red">タイトルまたは、5文字以内で記入してください</p>
        @enderror
        <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
        <br>
        <label for="body">本文</label>
        @error('body')
            <p style="color:red">本文または、20文字以内で記入してください</p>
        @enderror
        <textarea name="body" id="body" cols="30" rows="10">{{ old('body', $post->body) }}</textarea>
        <br>
        <button>更新</button>
    </form>
</body>

</html>

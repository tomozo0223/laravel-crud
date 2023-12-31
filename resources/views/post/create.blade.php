<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUDアプリ</title>
</head>

<body>
    <h1>投稿ページ</h1>
    <hr>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <label for="title">タイトル:</label>
        @error('title')
            <p style="color:red">タイトルまたは、5文字以内で記入してください</p>
        @enderror
        <input type="text" name="title" id="title">
        <br>
        <label for="body">本文</label>
        @error('body')
            <p style="color:red">本文または、20文字以内で記入してください</p>
        @enderror
        <textarea name="body" id="body" cols="30" rows="10"></textarea>
        <br>
        <button>送信</button>
    </form>
</body>

</html>

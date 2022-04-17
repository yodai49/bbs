<!DOCTYPE HTML>
<html>
<head>
    <title>掲示板</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
</head>
<body>
<h1>簡易掲示板</h1>
<!-- エラーメッセージエリア -->
@if ($errors->any())
    <div class="error">
        <h3>エラー</h3>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- 投稿表示エリア（編集するのはここ！） -->
@isset($bbs)
@foreach ($bbs as $d)
    <div class="balloon1">
        <div class="whoAmI">{{ $d->name }}さんの投稿</div>
        {{ $d->comment }}
        <br>
        <form type="button" action="/bbsFav" method="POST">
            @csrf
            <button class="fav">♡ {{ $d->fav }}</button>
            <input name="id" class="displayNone" value={{ $d->id }}>
        </form>
    </div>
@endforeach
@endisset

<!-- フォームエリア -->
<h2>投稿はこちら</h2>
<form action="/bbs" method="POST">
    名前:
    <input name="name">
    <br>
    コメント:<br>
    <textarea name="comment" rows="4" cols="40"></textarea>
    <br>
    {{ csrf_field() }}
    <button class="btn btn-success"> 送信！ </button>
</form>

</body>
</html>
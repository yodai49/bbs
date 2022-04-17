<!DOCTYPE html>
<link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
<html lang="{{str_replace('_','-',app()->getLocale())}}">
    <head>
        <title>テスト掲示板</title>
    </head>
    <body>
        <form action="" method="post">
            @csrf
            <p>名前</p>
            <input type="text" name="name" value="" />
            <p>メール</p>
            <input type="text" name="email" value="" /><br />
            <input type="submit" value="更新" />
        </form>

        <table>
        <tr class="tr1st">
            <td>ユーザー名</td>
            <td>投稿</td>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach
        </table>

    </body>
</html>
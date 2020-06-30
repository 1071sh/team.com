<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ブログ記事投稿フォーム</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/blog.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>ブログ記事投稿・編集</h2>

                <form method="POST">
                    <div class="form-group">
                        <label>日付</label>
                        <input class="form-control" name="post_date" size="20" value="" placeholder="日付を入力して下さい。">
                    </div>

                    <div class="form-group">
                        <label>タイトル</label>
                        <input class="form-control" name="title" value="" placeholder="タイトルを入力して下さい。">
                    </div>

                    <div class="form-group">
                        <label>本文</label>
                        <textarea class="form-control" rows="15" name="body" placeholder="本文を入力してください。"></textarea>
                    </div>

                    <input type="submit" class="btn btn-primary btn-sm" value="送信">
                    {{--CSRFトークンが生成される--}}
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>

</body>
</html>
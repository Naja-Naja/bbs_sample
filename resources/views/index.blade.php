<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>簡易掲示板</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <header>
        <h1 class="bg-primary text-white text-center">簡易掲示板サイトへようこそ</h1>
    </header>

    <main class="container">

        <form method="POST">
            {{ csrf_field() }}
            <input class="form-control my-2" type="text" name="name" placeholder="ここに名前を入力">
            <textarea class="form-control my-2" name="content" rows="4" placeholder="ここにコメントを入力"></textarea>
            <input class="form-control my-2" type="submit" value="送信">
        </form>

        @forelse ( $topics as $topic )
        <div class="border my-2 p-2">
            <div class="text-secondary">{{ $topic->name }} さん</div>
            <div class="p-2">{!! nl2br(e($topic->content)) !!}</div>
            <div class="text-secondary">投稿日:{{ $topic->created_at }}</div>
        </div>

        @empty
        <p>投稿はありません。</p>
        @endforelse

    </main>
</body>
</html>
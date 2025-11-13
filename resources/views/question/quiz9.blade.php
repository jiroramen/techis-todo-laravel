<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p>ID:{{ $quizzes->id }}</p>
        <p>名前:{{ $quizzes->name }}</p>
        <p>種別:{{ $quizzes->type }}</p>
        <p>作成日:{{ $quizzes->created_at }}</p>
        <p>更新日:{{ $quizzes->updated_at }}</p>
    </div>
</body>
</html>
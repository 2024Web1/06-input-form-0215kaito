<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password.php</title>
</head>

<body>
    <h4>0J02025堀内海翔</h4>
    <?php
    echo '<p>入力されたユーザーIDは、' . $_POST['user'] . 'です。入力されたパスワードは、' . $_POST['pass'] . 'です。</p>';
    ?>
    <a href='password.html'>戻る</a>
</body>

</html>
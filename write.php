<?php
//inputからデータの受け取り
$q_and_a_array = $_POST;


 // データを整形し保存
 foreach ($q_and_a_array as $q => $a) {
    $data = "Q: " . $q . "\nA: " . $a . "\n";
    file_put_contents('data/data.txt', $data, FILE_APPEND);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書き込み</title>
</head>
<body>
    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>
    <ul>
        <li><a href="answer.php">回答を確認する</a></li>
        <li><a href="index.php">戻る</a></li>
    </ul>
</body>
</html>
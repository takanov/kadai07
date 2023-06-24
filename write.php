<?php

//この配列に各問題の正解を保存
$correct_answers = array(
    "Q1" => "バラ",
    "Q2" => "マグロ",
    // 以降、追加の問題に対する答えを追加
);
//inputからデータの受け取り
$q_and_a_array = $_POST;

// データを整形し保存
foreach ($q_and_a_array as $q => $a) {
    $data = array(
        'question' => $q,
        'selected' => $a,
        'correct' => $correct_answers[$q]
    );
    file_put_contents('data/data.txt', json_encode($data) . "\n", FILE_APPEND);
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
<?php
    $lines = file('data/data.txt', FILE_IGNORE_NEW_LINES); // ファイルを一行ずつ配列として読み込む

    $q_and_a_array = [];
    $current_q = "";
    $current_a = "";

    foreach($lines as $line){
        if (strpos($line, 'Q:') === 0) {
            $current_q = substr($line, 3); // 'Q:' の後ろのテキストを取得
        } elseif (strpos($line, 'A:') === 0) {
            $current_a = substr($line, 3); // 'A:' の後ろのテキストを取得
            $q_and_a_array[$current_q] = $current_a; // 現在の質問と回答を保存
        }
    }

     // 結果を表示
     $i = 1;
     foreach($q_and_a_array as $q => $a){
        $rs = ($q == $a) ? "正解" : "不正解";
        echo '<h2>クイズ'.$i.'の結果</h2>';
        echo $rs;
        echo '<br>A: '.$a;
        echo '<br><br>';
        $i++;
    }


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果</title>
</head>
<body>

</body>
</html>
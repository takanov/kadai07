<?php
    $lines = file('data/data.txt', FILE_IGNORE_NEW_LINES); // ファイルを一行ずつ配列として読み込む

    $q_and_a_array = [];

    foreach($lines as $line){
        $data = json_decode($line, true);
        $q_and_a_array[$data['question']] = array(
            'selected' => $data['selected'],
            'correct' => $data['correct']
        );
    }
    
    // 結果を表示
    $i = 1;
    foreach($q_and_a_array as $q => $data){
        $rs = ($data['selected'] == $data['correct']) ? "正解" : "不正解";
        echo '<h2>クイズ'.$i.'の結果</h2>';
        echo $rs;
        echo '<br>A: '.$data['selected'];
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
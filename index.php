
<?php 
    $q_array["Q1"]["設問"] = "この漢字[薔薇]はなんと読むでしょうか？";
    $q_array["Q1"]["回答1"] = "バラ";
    $q_array["Q1"]["回答2"] = "ローズ";
    $q_array["Q1"]["回答3"] = "チューリップ";
    $q_array["Q1"]["回答4"] = "ヒマワリ";

    $q_array["Q2"]["設問"] = "この漢字[鮪]はなんと読むでしょうか？";
    $q_array["Q2"]["回答1"] = "サンマ";
    $q_array["Q2"]["回答2"] = "タチウオ";
    $q_array["Q2"]["回答3"] = "マグロ";
    $q_array["Q2"]["回答4"] = "コイ";

    shuffle($q_array);//配列の要素をシャッフルする関数
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6回目アプリケーション</title>
    <link href="css/style.css">
</head>
<body>
    <?php
    echo '<form method="post" action="write.php">';
    foreach($q_array as $key => $val){
        echo '<h3>'.$key.' '.$q_array[$key]["設問"].'</h3>';
        foreach($q_array[$key] as $key2 => $val2){
            if($key2 != '設問'){
                echo '<label><input type="radio" name="'.$key.'" value="'.$val2.'">'.$val2.'</label><br>';
            }
        }
    }
    echo '<input type="submit" value="送信">';
    echo '</form>';
    ?>
</body>
</html>
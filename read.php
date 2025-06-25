<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果</title>

    <style>
        table {
            border: solid 1px black;
            width: 100%;
            margin: 30px 0;
        }
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<?php
$file = fopen('data/q_data.txt', 'r');// ファイルを開く
// r にすると読み込み！
// ファイル内容を1行ずつ読み込んで出力
echo '<table>';
    while ($str = fgets($file)) {
        $parts = explode(',',$str,4); 
        // これで配列に転換！
        echo '<tr>';
        foreach($parts as $v){
            echo "<td>$v</td>";
        }
        echo '</tr>';
        }
echo '</table>';    

fclose($file); // ファイルを閉じる
?>

</body>
</html>





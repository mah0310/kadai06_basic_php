<?php

$name = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'];


//文字作成
$str = date("Y-m-d H:i:s").",".$name.",".$mail.",".$message;

//File書き込み
$file = fopen("data/q_data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>

<ul>
<li><a href="read.php">結果はこちら</a></li>
</ul>
</body>
</html>
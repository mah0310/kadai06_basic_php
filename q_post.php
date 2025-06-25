<html>
<head>
<meta charset="utf-8">
<title>アンケート</title>
</head>
<body>
<form action="q_write.php" method="post">
	氏名: <input type="text" name="name"><br>
	e-mail: <input type="text" name="mail"><br>
    今回のレクチャーに期待すること<br>
    <textarea 
        name="message" 
        rows="6"
        cols="40">
    </textarea>

	<input type="submit" value="送信">
</form>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>
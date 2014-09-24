<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ニュース一覧画面</title>

<script type="text/javascript">

<!--

function del(){

	if(window.confirm('削除しますか？')){

	}else{
		window.alert('キャンセルしました')
	}
}

</script>




</head>
<body>


<form action="regist.html">
<input type="submit" value="新規投稿">
</form>
<form action="admin.php">
<table>
<?php

if(isset($_GET['page'])){
	$page = $_GET['page'];
}else{
	$page = 1;
}
	$title = 127;
	$num = ($page-1)*10+1;

	for($i = $num;$i < $num+10;$i++){
		echo $i."個目のタイトル";
?>

<br>

<?php
	}
?>
<input type="submit" value="編集">
<input type="submit" value="削除"  onClick="del()">

</form>
<br>

<form>
<?php
	$p = floor($title / 10);
for($i = 0;$i < $p ;$i++){
?>
<input type="submit" value="<?php echo $i+1; ?>" name="page">
<?php
}
?>
</form>
</table>
</body>
</html>
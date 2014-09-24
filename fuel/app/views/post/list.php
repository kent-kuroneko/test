<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>お知らせ一覧画面</title>

<!-- Bootstrap -->
<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen"
	href="/assets/css/style.css" />
<link href="/assets/css/select2.css" rel="stylesheet">
<script src="/assets/js/jquery-1.8.3.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<script language="JavaScript">
function radioForm(){
	flag = 0;
	for ( i = 0 ; i < document.edit.radio.length ; i++){
		if (document.edit.radio[i].checked){
			flag = 1;
		}
	}
		if (!flag){
			alert('編集項目を選択してください');
			return false;
		}
	return true;
}

</script>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body data-spy="scroll" data-target="#sidebar">
	<div id="wrap">
		<div id="header" class="navbar navbar-inverse navbar-fixed-top"
			role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target=".navbar-top">
						<span class="sr-only"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span> <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/post/">お知らせ管理ツール</a>
				</div>
				<div class="collapse navbar-collapse navbar-top">
					<ul class="nav navbar-nav">
						<li><a href="/post/form">新規登録</a></li>
						<li><a href="/post/">キーワード検索</a></li>
						<li></li>
						<li></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<form action="/post/search" accept-charset='UTF-8' method="post"
							class="navbar-form navbar-left">
							<div class="form-group">
								<input name="title" type="text" class="form-control"
									value="<?php $_SESSION ['searchtitle'] ;?>"
									placeholder="タイトル検索">
							</div>
							<input type="submit" class="btn btn-default" value="検索">
						</form>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="page-header">
				<h1 class="text-primary">お知らせ一覧</h1>
			</div>
			<div class="form-inline">
				<form action="/post/limit" accept-charset='UTF-8' method="post">
					<div class="form-group">
						<label for="limit" class="control-label"></label> <select
							class="form-control select2" onChange="submit(this.form)"
							name="limit">
							<option>表示したいお知らせの件数</option>
							<option value="1">10</option>
							<option value="2">20</option>
							<option value="3">30</option>
							<option value="4">40</option>
							<option value="5">50</option>
						</select>
					</div>
				</form>
			</div>
			<p class="lead"></p>
			<div class="container">
				<div class="row">
					<div class="container">

						<form action="/post/edit" name="edit"
							onSubmit="return radioForm()" accept-charset='UTF-8'
							method="post">
							<div class="action">
								<table class="table table-hover">
									<tr>
										<td>編集チェック</td>
										<td><strong>タイトル</strong></td>
										<td>表示ON/OFF</td>
										<td>公開日時</td>
										<td>最終更新日時</td>
									</tr>
<?php
$limit = $_SESSION ['limit'];

foreach ( $rows as $row ) {
	$publishtime = strtotime ( $row ['publish'] );
	if ($row ['viewflag'] == 0) {
		$flag = "OFF";
	} else if ($publishtime > time ()) {
		$flag = $row ['publish'] . "に表示されます";
	} else {
		$flag = "ON";
	}

	?>
									<tr>
										<td><input type="radio" name="radio"
											value="<?php echo $row['id']; ?>" /></td>
										<td><strong><?php echo $row['title']; ?></strong></td>
										<td><?php echo $flag; ?></td>
										<td><?php echo $row['publish']; ?></td>
										<td><?php echo $row['updated']; ?></td>
									</tr>
<?php
}
?>
								</table>
							</div>
							<div class="col-md-1">
								<input class="btn btn-success" name="edit" value="編集"
									type="submit" id="form_edit">
							</div>
							<div class="col-md-1">
								<input class="btn btn-danger" name="del" value="削除"
									type="submit" id="del_edit">
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="container">
				<ul class="pagination">
					<li><a href="#">&laquo;</a></li>
<?php

$page = ceil ( (int)$_SESSION['count'] / $limit );
for($i = 1; $i <= $page; $i ++) {
	?>
					<li><a href="?page=<?php echo $i ;?>"><?php echo $i ;?></a></li>
<?php
}
?>
					<li><a href="#">&raquo;</a></li>
				</ul>


			</div>
		</div>

</body>
</html>
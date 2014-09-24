<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>test</title>

<!-- Bootstrap -->

<link rel="stylesheet" type="text/css" media="screen"
	href="/assets/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" media="screen"
	href="/assets/css/style.css" />
<script type="text/javascript" src="/assets/js/jquery-1.8.3.js"></script>

</head>

<body data-spy="scroll" data-target="#sidebar">
	<div id="wrap">
		<div id="header" class="navbar navbar-default navbar-fixed-top"
			role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target=".navbar-top">
						<span class="sr-only">ナビゲーションの切替</span> <span class="icon-bar"></span>
						<span class="icon-bar"></span> <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="./">お知らせ管理ツール</a>
				</div>
				<div class="collapse navbar-collapse navbar-top">
					<ul class="nav navbar-nav">
						<li><a href="./">Home</a></li>
						<li class="active"><a href="/post/form">新規登録</a></li>
						<li><a href=""></a></li>
						<li><a href="">Components2</a></li>
						<li><a href="">JavaScript</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="page-header">
				<h1 class="text-primary">お知らせ一覧</h1>
			</div>
			<p class="lead"></p>
			<div class="container">
				<div class="row">
					<div class="container">
						<form action="view" accept-charset='UTF-8' method="post">
							<select onChange="location.href=value;" name="limit">
								<option value="">表示件数</option>
								<option value="?limit=10">10</option>
								<option value="?limit=20">20</option>
								<option value="?limit=30">30</option>
							</select>
						</form>

						<form action="edit" accept-charset='UTF-8' method="post">
							<div class="action">
								<table class="table table-hover">
									<tr>
										<td>編集チェック</td>
										<td>表示ON/OFF</td>
										<td>タイトル</td>
										<td>作成日時</td>
										<td>最終更新日時</td>
									</tr>
<?php foreach ($rows as $row) : ?>
									<tr>
										<td><input type="radio" name="radio"
											value="<?php echo $row['id']; ?>" /></td>
										<td><?php if ($row['viewflag'] == 1) {
		echo "○";
	} else {
		echo "×";
	}
	; ?></td>
										<td><?php echo $row['title']; ?></td>
										<td><?php echo $row['created']; ?></td>
										<td><?php echo $row['updated']; ?></td>
									</tr>
<?php endforeach; ?>
								</table>
							</div>
							<input class="btn btn-success" name="edit" value="編集"
								type="submit" id="form_edit" /> <input class="btn btn-danger"
								name="del" value="削除" type="submit" id="del_edit" />
						</form>
					</div>
				</div>
			</div>
		</div>

		<script
			src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="style.js"></script>
		<script src="j-sample.js"></script>
		<script src="prettify.js"></script>
		<script>prettyPrint();</script>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		<script type="text/javascript"
			src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8"
			async="async"></script>
		<script type="text/javascript">
	  window.___gcfg = {lang: 'ja'};
	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/plusone.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>

</body>
</html>
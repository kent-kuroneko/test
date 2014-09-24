<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>編集</title>

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" media="screen"
	href="/assets/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" media="screen"
	href="/assets/css/bootstrap-datetimepicker.min.css" />
<link rel="stylesheet" type="text/css" media="screen"
	href="/assets/css/style.css" />
<link rel="stylesheet" type="text/css" media="screen"
	href="/assets/iCheck/skins/all.css" />
<script type="text/javascript" src="/assets/js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="/assets/js/moment.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
<script type="text/javascript"
	src="/assets/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript"
	src="/assets/js/bootstrap-datetimepicker-ja.js"></script>
<script type="text/javascript" src="/assets/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/assets/iCheck/icheck.js"></script>

<script type="text/javascript">

$(function () {
	$('#dtp').datetimepicker({
		 format : 'YYYY/MM/DD HH:mm:ss',
		 language : 'ja'
	});
});

function check(){
	var flag = 0;
	if(document.update.title.value == "" || document.update.category.value == "" || document.update.publish.value == "" || document.update.body.value == ""){
		flag = 1;
	}

	if(flag){
		window.alert('必須項目に未入力がありました');
		return false;
	}
	else{
		return true;
	}
}
</script>

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
						<li></li>
						<li></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="container">
				<div class="page-header">
					<h1 class="text-primary">編集</h1>
				</div>
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<form action="/post/update" name="update" accept-charset='UTF-8'
							method="post" onSubmit="return check()">
							<input name="id" class="form-control" value="<?php echo $id ;?>"
								type="hidden" id="form_id"> <input name="created"
								class="form-control" value="<?php echo $created ?>"
								type="hidden" id="form_category">
							<div class="form-group">
								<span class="label label-primary">タイトル</span><input name="title"
									class="form-control" value="<?php echo $title ?>" type="text"
									id="form_title">
							</div>
							<div class="form-inline">
								<div class="form-group">
									<select class="form-control select2"
										onChange="submit(this.form)" name="category">
										<option>カテゴリー選択</option>
										<option value="重要">需要</option>
										<option value="イベント">イベント</option>
										<option value="キャンペーン">キャンペーン</option>
										<option value="お詫び">お詫び</option>
										<option value="その他">その他</option>
									</select>
								</div>
								<div class="form-group">
									<span class="label label-primary">公開日時</span>
									<div class='input-group date' id='dtp'>
										<input type='text' class="form-control" name="publish"
											placeholder="<?php echo $publish ?>" value="<?php echo $publish ?>"><span
											class="input-group-addon"><span
											class="glyphicon glyphicon-calendar" placeholder="公開日時"></span>
										</span>
									</div>
								</div>
								<div class="form-group">
									<label class="label label-primary">表示状態</label><input
										name="viewflag" class="checkboxinput form-control" value="1"
										type="checkbox" id="form_category">
								</div>
							</div>
							<div class="form-group">
								<span class="label label-primary">本文</span>
								<textarea class="ckeditor" rows="8" name="body" value=""
									id="form_body" /><?php echo $body ?></textarea>
							</div>
							<div class="action">
								<input name="submit" class="btn btn-default" value="更新"
									type="submit" id="form_submit"
									onClick="window.location.replace('/post/list')">
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</div>
</body>
</html>

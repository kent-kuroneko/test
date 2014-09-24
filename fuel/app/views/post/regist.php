<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>新規登録</title>

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

$(function () {
	$(".alert").alert()
});

function check(){
	var flag = 0;
	if(document.regist.title.value == "" || document.regist.category.value == "" || document.regist.publish.value == "" || document.regist.body.value == ""){
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
/*$(document).ready(function(){
	$('input').each(function(){
		var self = $(this),
		label = self.next(),
		label_text = label.text();
		label.remove();
		self.iCheck({
			checkboxClass: 'icheckbox_line-blue',
			radioClass: 'iradio_blue',
			insert: '<div class="icheck_line-icon"></div>' + label_text
		});
	});
});*/
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
					<h1 class="text-primary">新規登録</h1>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<form action="/post/regist" name="regist" accept-charset='UTF-8'
								method="post" onSubmit="return check()">
								<div class="form-group">
									<span class="label label-primary">タイトル</span><input
										name="title" class="form-control" value="" type="text"
										id="form_title" placeholder="タイトル">
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
												placeholder="公開日時"><span class="input-group-addon"><span
												class="glyphicon glyphicon-calendar"></span> </span>
										</div>
									</div>
									<div class="form-group">
										<span class="label label-primary">表示状態</span><input
											name="viewflag" class="checkboxinput form-control" value="1"
											type="checkbox" id="form_category">
									</div>
								</div>
								<div class="form-group">
									<span class="label label-primary">本文</span>
									<textarea class="ckeditor" rows="8" name="body" value=""
										id="form_body" /></textarea>
								</div>
								<div class="action">
									<input name="submit" class="btn btn-default" value="登録"
										type="submit" id="form_submit">
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

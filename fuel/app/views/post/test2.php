<!DOCTYPE html>
<html lang="jp">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Bootstrap3の使い方をBootstrap2からの変更箇所を交えて解説">

	<title>CSS編～Bootstrap3移行ガイド</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link href="github2.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-22165357-2', 'jpn.org');
	  ga('send', 'pageview');

	</script>
</head>

<body data-spy="scroll" data-target="#sidebar">
	<div id="wrap">
		<div id="header" class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-top">
						<span class="sr-only">ナビゲーションの切替</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="./">Bootstrap3移行ガイド</a>
				</div>
				<div class="collapse navbar-collapse navbar-top">
					<ul class="nav navbar-nav">
						<li><a href="./">Home</a></li>
						<li class="active"><a href="css.php">CSS</a></li>
						<li><a href="components1.php">Components1</a></li>
						<li><a href="components2.php">Components2</a></li>
						<li><a href="javascript.php">JavaScript</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="page-header">
				<h1 class="text-primary">CSS
					<div class="pull-right hidden-xs sponsored">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- bootatrap用234x60 -->
						<ins class="adsbygoogle"
						     style="display:inline-block;width:234px;height:60px"
						     data-ad-client="ca-pub-5922383921992325"
						     data-ad-slot="1349915919"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>
				</h1>
			</div>
			<p class="lead">Bootstrap3の使い方をBootstrap2.xからの変更箇所を交えて解説しています。</p>
			<div class="container">
				<div class="row">
					<div class="col-md-3 side">
						<div id="sidebar" class="hidden-print" data-spy="affix" data-offset-top="200">
							<ul class="nav">
								<li><a href="#grid">グリッドシステム</a>
									<ul class="nav">
										<li><a href="#grid2">グリッドの設定</a></li>
										<li><a href="#column1">カラムの指定</a></li>
										<li><a href="#column2">画面サイズによって変わるカラム</a></li>
										<li><a href="#wrapping">列の折り返し</a></li>
										<li><a href="#column-reset">レスポンシブカラムのリセット</a></li>
										<li><a href="#offset">空白カラム</a></li>
										<li><a href="#nesting-column">カラムの入れ子</a></li>
										<li><a href="#pushpull">カラムの順序変更</a></li>
									</ul>
								</li>
								<li><a href="#type">文字の体裁</a>
									<ul class="nav">
										<li><a href="#heading">見出し</a></li>
										<li><a href="#copy">段落文</a></li>
										<li><a href="#text-elements">文字の装飾</a></li>
										<li><a href="#alignment">配置</a></li>
										<li><a href="#transformation">変換</a></li>
										<li><a href="#abbreviation">省略語</a></li>
										<li><a href="#address">アドレス</a></li>
										<li><a href="#blockquote">引用</a></li>
										<li><a href="#list">リスト</a></li>
									</ul>
								</li>
								<li><a href="#code">コード</a>
									<ul class="nav">
										<li><a href="#code2">コード表示</a></li>
										<li><a href="#user">ユーザー入力</a></li>
										<li><a href="#pre">整形済みテキスト</a></li>
										<li><a href="#variable">変数</a></li>
										<li><a href="#sample">サンプル出力</a></li>
									</ul>
								</li>
								<li><a href="#tables">テーブル</a>
									<ul class="nav">
										<li><a href="#basic-table">基本のテーブル</a></li>
										<li><a href="#striped">交互に行の色が変わるテーブル</a></li>
										<li><a href="#bordered">縦線が入ったテーブル</a></li>
										<li><a href="#hover">ホバー表示するテーブル</a></li>
										<li><a href="#condensed">行間が狭いテーブル</a></li>
										<li><a href="#contextual">行/セルの背景色</a></li>
										<li><a href="#responsive-table">レスポンシブテーブル</a></li>
									</ul>
								</li>
								<li><a href="#forms">フォーム</a>
									<ul class="nav">
										<li><a href="#basic-form">基本のフォーム</a></li>
										<li><a href="#inline-form">横並びフォーム</a></li>
										<li><a href="#horizontal-form">水平フォーム</a></li>
										<li><a href="#control">フォームコントロール</a></li>
										<li><a href="#static">静的テキスト</a></li>
										<li><a href="#disabled-input">コントロールの無効化</a></li>
										<li><a href="#readonly">読み取り専用コントロール</a></li>
										<li><a href="#control-color">ラベル等の色指定</a></li>
										<li><a href="#control-size">コントロールのサイズ</a></li>
										<li><a href="#helptext">ヘルプテキスト</a></li>
										<li><a href="#abolished-form">Bootstrap3.0で廃止</a></li>
									</ul>
								</li>
								<li><a href="#buttons">ボタン</a>
									<ul class="nav">
										<li><a href="#basic-button">ボタンの設定</a></li>
										<li><a href="#button-size">ボタンのサイズ</a></li>
										<li><a href="#block-button">ブロックタイプのボタン</a></li>
										<li><a href="#active-button">ボタンのアクティブ化</a></li>
										<li><a href="#disabled-button">ボタンの無効化</a></li>
									</ul>
								</li>
								<li><a href="#images">イメージ</a>
									<ul class="nav">
										<li><a href="#image-corner">イメージ枠</a></li>
										<li><a href="#responsive-image">レスポンシブイメージ</a></li>
									</ul>
								</li>
								<li><a href="#helper-classes">ヘルパークラス</a>
									<ul class="nav">
										<li><a href="#color">文字の色</a></li>
										<li><a href="#background">文字の背景色</a></li>
										<li><a href="#closed-icon">閉じるアイコン</a></li>
										<li><a href="#caret">キャレット</a></li>
										<li><a href="#float">配置</a></li>
										<li><a href="#show-hidden">コンテンツの表示/非表示</a></li>
										<li><a href="#image-replace">画像置換</a></li>
									</ul>
								</li>
								<li><a href="#responsive-utilities">レスポンシブユーティリティ</a>
									<ul class="nav">
										<li><a href="#available">閲覧時の表示/非表示</a></li>
										<li><a href="#print">印刷時の表示/非表示</a></li>
									</ul>
								</li>
							</ul>
							<a class="back-to-top" href="#top"><span class="glyphicon glyphicon-chevron-up"></span> トップに戻る</a>
						</div>
					</div>

					<div class="col-md-9 main">
						<div class="page-header">
							<h1 id="grid">グリッドシステム（Grid system）</h1>
						</div>
						<h2 id="grid2">グリッドの設定 <small>設定変更</small></h2>
						<h4>見本 <small>別タブで表示します</small></h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p class="content">●固定レイアウト</p>
								<p><a href="container.html" target="_blank" class="btn btn-success"><span class="glyphicon glyphicon-new-window"></span> ココを押してください</a></p>
								<p class="content">●可変レイアウト</p>
								<p><a href="container-fluid.html" target="_blank" class="btn btn-success"><span class="glyphicon glyphicon-new-window"></span> ココを押してください</a></p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Bootstrap2.xの設定例 <small><span class="alert-success">緑背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;!-- 固定レイアウト --&gt;
&lt;div class="container"&gt;
  &lt;div class="row"&gt;
    &lt;div class="<span class="alert-success">span2</span>"&gt;
    サイドバーの表示
    &lt;/div&gt;
    &lt;div class="<span class="alert-success">span10</span>"&gt;
    メインの表示
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- 可変レイアウト --&gt;
&lt;div class="container-fluid"&gt;
  &lt;div class="<span class="alert-success">row-fluid</span>"&gt;
    &lt;div class="<span class="alert-success">span2</span>"&gt;
    サイドバーの表示
    &lt;/div&gt;
    &lt;div class="<span class="alert-success">span10</span>"&gt;
    メインの表示
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
							</div>
							<div class="col-sm-6">
								<h4>Bootstrap3.0の設定例 <small><span class="alert-danger">赤背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;!-- 固定レイアウト --&gt;
&lt;div class="container"&gt;
  &lt;div class="row"&gt;
    &lt;div class="<span class="alert-danger">col-md-2</span>"&gt;
    サイドバーの表示
    &lt;/div&gt;
    &lt;div class="<span class="alert-danger">col-md-10</span>"&gt;
    メインの表示
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- 可変レイアウト --&gt;
&lt;div class="container-fluid"&gt;
  &lt;div class="<span class="alert-danger">row</span>"&gt;
    &lt;div class="<span class="alert-danger">col-md-2</span>"&gt;
    サイドバーの表示
    &lt;/div&gt;
    &lt;div class="<span class="alert-danger">col-md-10</span>"&gt;
    メインの表示
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>固定レイアウト：<code>div.container</code> > <code>div.row</code></li>
								<li>可変レイアウト：<code>div.container-fluid</code> > <code>div.row</code></li>
								<li>グリッド全体の幅を固定したい場合は固定レイアウト、表示領域の幅に合わせて可変したい場合は可変レイアウトを使用</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li>可変レイアウト<br><code>.row-fluid</code>⇒<code>.row</code>に統合<br><code>.container-fluid</code>は一旦廃止⇒3.1.0で復活</li>
							</ul>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr>
									<th></th>
									<th>モバイルサイズ</th>
									<th>タブレットサイズ</th>
									<th>デスクトップサイズ</th>
									<th>大画面サイズ</th>
								</tr>
								<tr>
									<td>表示領域の幅</td>
									<td class="text-center">768px未満</td>
									<td class="text-center">768px～991px</td>
									<td class="text-center">992px～1199px</td>
									<td class="text-center">1200px以上</td>
								</tr>
								<tr>
									<td><code>.container</code>使用時の幅（3.0.1より幅固定に）</td>
									<td>表示領域の幅に準ずる</td>
									<td>750px<br><span class="text-muted">3RC1の728px、初期3RC2の720pxより変更</span></td>
									<td>970px<br><span class="text-muted">初期3RC2の940pxより変更</span></td>
									<td>1170px<br><span class="text-muted">初期3RC2では1140pxに変更されたが途中で戻る</span></td>
								</tr>
								<tr>
									<td>カラムの最大幅</td>
									<td>表示領域の幅に準ずる</td>
									<td>42px⇒60px</td>
									<td>60px⇒78px</td>
									<td>70px⇒95px</td>
								</tr>
							</table>
						</div>

						<h2 id="column1">カラムの指定 <small>変更</small></h2>
						<h4>見本 <small>見やすいよう色を付けています</small></h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p class="content">●12列で表示</p>
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-1 column">カラム 1: .col-md-1</div>
										<div class="col-md-1 column">カラム 2: .col-md-1</div>
										<div class="col-md-1 column">カラム 3: .col-md-1</div>
										<div class="col-md-1 column">カラム 4: .col-md-1</div>
										<div class="col-md-1 column">カラム 5: .col-md-1</div>
										<div class="col-md-1 column">カラム 6: .col-md-1</div>
										<div class="col-md-1 column">カラム 7: .col-md-1</div>
										<div class="col-md-1 column">カラム 8: .col-md-1</div>
										<div class="col-md-1 column">カラム 9: .col-md-1</div>
										<div class="col-md-1 column">カラム 10: .col-md-1</div>
										<div class="col-md-1 column">カラム 11: .col-md-1</div>
										<div class="col-md-1 column">カラム 12: .col-md-1</div>
									</div>
								</div>
								<br>
								<p class="content">●2:1で表示</p>
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-8 column">カラム 1: .col-md-8</div>
										<div class="col-md-4 column">カラム 2: .col-md-4</div>
									</div>
								</div>
								<br>
								<p class="content">●1:1:1で表示</p>
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-4 column">カラム 1: .col-md-4</div>
										<div class="col-md-4 column">カラム 2: .col-md-4</div>
										<div class="col-md-4 column">カラム 3: .col-md-4</div>
									</div>
								</div>
								<br>
								<p class="content">●1:1で表示</p>
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-6 column">カラム 1: .col-md-6</div>
										<div class="col-md-6 column">カラム 2: .col-md-6</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Bootstrap2.xの設定例 <small><span class="alert-success">緑背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;!-- 12列で表示 --&gt;
&lt;div class="row"&gt;
  &lt;div class="<span class="alert-success">span1</span>"&gt;カラム 1: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-success">span1</span>"&gt;カラム 2: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-success">span1</span>"&gt;カラム 3: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-success">span1</span>"&gt;カラム 4: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-success">span1</span>"&gt;カラム 5: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-success">span1</span>"&gt;カラム 6: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-success">span1</span>"&gt;カラム 7: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-success">span1</span>"&gt;カラム 8: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-success">span1</span>"&gt;カラム 9: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-success">span1</span>"&gt;カラム 10: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-success">span1</span>"&gt;カラム 11: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-success">span1</span>"&gt;カラム 12: .col-md-1&lt;/div&gt;
&lt;/div&gt;

&lt;!-- 2:1で表示 --&gt;
&lt;div class="row"&gt;
　&lt;div class="<span class="alert-success">span8</span>"&gt;カラム 1: .col-md-8&lt;/div&gt;
　&lt;div class="<span class="alert-success">span4</span>"&gt;カラム 2: .col-md-4&lt;/div&gt;
&lt;/div&gt;

&lt;!-- 1:1:1で表示 --&gt;
&lt;div class="row"&gt;
  &lt;div class="<span class="alert-success">span4</span>"&gt;カラム 1: .col-md-4&lt;/div&gt;
  &lt;div class="<span class="alert-success">span4</span>"&gt;カラム 2: .col-md-4&lt;/div&gt;
  &lt;div class="<span class="alert-success">span4</span>"&gt;カラム 3: .col-md-4&lt;/div&gt;
&lt;/div&gt;

&lt;!-- 1:1で表示 --&gt;
&lt;div class="row"&gt;
  &lt;div class="<span class="alert-success">span6</span>"&gt;カラム 1: .col-md-6&lt;/div&gt;
  &lt;div class="<span class="alert-success">span6</span>"&gt;カラム 2: .col-md-6&lt;/div&gt;
&lt;/div&gt;
</pre>
							</div>
							<div class="col-sm-6">
								<h4>Bootstrap3.xの設定例 <small><span class="alert-danger">赤背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;!-- 12列で表示 --&gt;
&lt;div class="row"&gt;
  &lt;div class="<span class="alert-danger">col-md-1</span>"&gt;カラム 1: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-md-1</span>"&gt;カラム 2: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-md-1</span>"&gt;カラム 3: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-md-1</span>"&gt;カラム 4: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-md-1</span>"&gt;カラム 5: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-md-1</span>"&gt;カラム 6: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-md-1</span>"&gt;カラム 7: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-md-1</span>"&gt;カラム 8: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-md-1</span>"&gt;カラム 9: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-md-1</span>"&gt;カラム 10: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-md-1</span>"&gt;カラム 11: .col-md-1&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-md-1</span>"&gt;カラム 12: .col-md-1&lt;/div&gt;
&lt;/div&gt;

&lt;!-- 2:1で表示 --&gt;
&lt;div class="row"&gt;
  &lt;div class="<span class="alert-danger">col-md-8</span>"&gt;カラム 1: .col-md-8&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-md-4</span>"&gt;カラム 2: .col-md-4&lt;/div&gt;
&lt;/div&gt;

&lt;!-- 1:1:1で表示 --&gt;
&lt;div class="row"&gt;
  &lt;div class="<span class="alert-danger">col-md-4</span>"&gt;カラム 1: .col-md-4&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-md-4</span>"&gt;カラム 2: .col-md-4&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-md-4</span>"&gt;カラム 3: .col-md-4&lt;/div&gt;
&lt;/div&gt;

&lt;!-- 1:1で表示 --&gt;
&lt;div class="row"&gt;
  &lt;div class="<span class="alert-danger">col-md-6</span>"&gt;カラム 1: .col-md-6&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-md-6</span>"&gt;カラム 2: .col-md-6&lt;/div&gt;
&lt;/div&gt;
</pre>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>div.row</code> > <code>div.col-xx-*</code>（以下の「クラスの種類」から選択）</li>
								<li><code>*</code>は1行につき合計が12になるように指定（12を超える場合は<a href="#wrapping" class="alert-link">列の折り返し</a>を参照）</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li><code>.span*</code>⇒<code>.col-*</code>⇒<code>.col-xx-*</code>（3RC1の途中）</li>
								<li>カラムとカラムの間に隙間がなくなった</li>
							</ul>
						</div>
						<h4>クラスの種類 <small><code>*</code>の数値は1～12</small></h4>
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr>
									<th></th>
									<th>モバイルサイズ</th>
									<th>タブレットサイズ</th>
									<th>デスクトップサイズ</th>
									<th>大画面サイズ<br><span class="text-muted">新設（3RC2）</span></th>
								</tr>
								<tr>
									<td>表示領域の幅</td>
									<td class="text-center">768px未満</td>
									<td class="text-center">768px～991px</td>
									<td class="text-center">992px～1199px</td>
									<td class="text-center">1200px以上</td>
								</tr>
								<tr>
									<td>全てのサイズに適用</td>
									<td colspan="4" class="success"><code>.col-xs-*</code><br><span class="text-muted">3RC1の<code>.col-*</code>より変更</span></td>
								</tr>
								<tr>
									<td>768px以上に適用</td>
									<td></td>
									<td colspan="3" class="success"><code>.col-sm-*</code></td>
								</tr>
								<tr>
									<td>992px以上に適用</td>
									<td></td>
									<td></td>
									<td colspan="2" class="success"><code>.col-md-*</code><br><span class="text-muted">新設（3RC2）</span></td>
								</tr>
								<tr>
									<td>1200px以上に適用</td>
									<td></td>
									<td></td>
									<td></td>
									<td class="success"><code>.col-lg-*</code><br><span class="text-muted">3RC1の表示領域の幅992px以上より変更</span></td>
								</tr>
							</table>
						</div>

						<h2 id="column2">表示領域の幅によってカラムの指定を変える（Mobile, tablet, desktops）</h2>
						<h4>見本 <small>見やすいよう色を付けています</small></h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p class="content">●デスクトップサイズでは2:1で表示、モバイルサイズではカラムを積み重ねて表示</p>
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-12 col-md-8 column">カラム 1: .col-xs-12 .col-md-8</div>
										<div class="col-xs-6 col-md-4 column">カラム 2: .col-xs-6 .col-md-4</div>
									</div>
								</div>
								<br>
								<p class="content">●モバイルサイズでは1:1で表示、デスクトップサイズでは1:1:1で表示</p>
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-6 col-md-4 column">カラム 1: .col-xs-6 .col-md-4</div>
										<div class="col-xs-6 col-md-4 column">カラム 2: .col-xs-6 .col-md-4</div>
										<div class="col-xs-6 col-md-4 column">カラム 3: .col-xs-6 .col-md-4</div>
									</div>
								</div>
								<br>
								<p class="content">●デスクトップサイズでは2:1で表示、タブレットサイズでは1:1で表示、モバイルサイズではカラムを積み重ねて表示</p>
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-8 column">カラム 1: .col-xs-12 .col-sm-6 .col-md-8</div>
										<div class="col-xs-6 col-md-4 column">カラム 2: .col-xs-6 .col-md-4</div>
									</div>
								</div>
								<br>
								<p class="content">●常に1:1で表示</p>
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-6 column">カラム 1: .col-xs-6</div>
										<div class="col-xs-6 column">カラム 2: .col-xs-6</div>
									</div>
								</div>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;!-- デスクトップサイズでは2:1で表示、モバイルサイズではカラムを積み重ねて表示 --&gt;
&lt;div class="row"&gt;
  &lt;div class="<span class="alert-danger">col-xs-12 col-md-8</span>"&gt;カラム 1: .col-xs-12 .col-md-8&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-xs-6 col-md-4</span>"&gt;カラム 2: .col-xs-6 .col-md-4&lt;/div&gt;
&lt;/div&gt;

&lt;!-- モバイルサイズでは1:1で表示、デスクトップサイズでは1:1:1で表示 --&gt;
&lt;div class="row"&gt;
  &lt;div class="<span class="alert-danger">col-xs-6 col-md-4</span>"&gt;カラム 1: .col-xs-6 .col-md-4&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-xs-6 col-md-4</span>"&gt;カラム 2: .col-xs-6 .col-md-4&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-xs-6 col-md-4</span>"&gt;カラム 3: .col-xs-6 .col-md-4&lt;/div&gt;
&lt;/div&gt;

&lt;!-- デスクトップサイズでは2:1で表示、タブレットサイズでは1:1で表示、モバイルサイズではカラムを積み重ねて表示 --&gt;
&lt;div class="row"&gt;
  &lt;div class="<span class="alert-danger">col-xs-12 col-sm-6 col-md-8</span>"&gt;カラム 1: .col-xs-12 .col-sm-6 .col-md-8&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-xs-6 col-md-4</span>"&gt;カラム 2: .col-xs-6 .col-md-4&lt;/div&gt;
&lt;/div&gt;

&lt;!-- 常に1:1で表示 --&gt;
&lt;div class="row"&gt;
  &lt;div class="<span class="alert-danger">col-xs-6</span>"&gt;カラム 1: .col-xs-6&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-xs-6</span>"&gt;カラム 2: .col-xs-6&lt;/div&gt;
&lt;/div&gt;
</pre>

						<h2 id="wrapping">列の折り返し（Column wrapping） <small></small></h2>
						<h4>見本 <small>見やすいよう色を付けています</small></h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="container-fluid">
<div class="row">
  <div class="col-xs-9 column">カラム 1: .col-xs-9</div>
  <div class="col-xs-4 column">カラム 2: .col-xs-4<br>9 + 4 = 13 &gt; 12 になるので、このカラムは1つの連続したユニットとして新しい行に折り返される</div>
  <div class="col-xs-6 column">カラム 3: .col-xs-6<br>以降のカラムは新しい行に沿って継続</div>
</div>
								</div>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;div class="row"&gt;
  &lt;div class="col-xs-9"&gt;カラム 1: .col-xs-9&lt;/div&gt;
  &lt;div class="col-xs-4"&gt;カラム 2: .col-xs-4 ... &lt;/div&gt;
  &lt;div class="col-xs-6"&gt;カラム 3: .col-xs-6 ... &lt;/div&gt;
&lt;/div&gt;
</pre>
						<div class="alert alert-info">
							<p>【注意】</p>
							<ul>
								<li>12以上の列が同じ行に配置されている場合は、追加の列の各グループは1ユニットとして新しい行に折り返される</li>
							</ul>
						</div>

						<h2 id="column-reset">レスポンシブカラムのリセット（Responsive column resets）</h2>
						<p>各カラムの高さが異なる場合、カラムが回り込む問題が発生するのを回避する。</p>
						<h4>見本 <small>見やすいよう色を付けています</small></h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p class="content">●モバイルサイズではclearfixが有効になる</p>
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-6 col-sm-3 column">カラム 1: .col-xs-6 .col-sm-3<br>このカラムだけ高さが異なる</div>
										<div class="col-xs-6 col-sm-3 column">カラム 2: .col-xs-6 .col-sm-3</div>
										<div class="clearfix visible-xs"></div>
										<div class="col-xs-6 col-sm-3 column">カラム 3: .col-xs-6 .col-sm-3</div>
										<div class="col-xs-6 col-sm-3 column">カラム 4: .col-xs-6 .col-sm-3</div>
									</div>
								</div>
								<br>
								<p class="content">※参考：clearfixなし（モバイルサイズで見ると違いがわかります）</p>
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-6 col-sm-3 column">カラム 1: .col-xs-6 .col-sm-3<br>このカラムだけ高さが異なる</div>
										<div class="col-xs-6 col-sm-3 column">カラム 2: .col-xs-6 .col-sm-3</div>
										<div class="col-xs-6 col-sm-3 column">カラム 3: .col-xs-6 .col-sm-3</div>
										<div class="col-xs-6 col-sm-3 column">カラム 4: .col-xs-6 .col-sm-3</div>
									</div>
								</div>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;div class="row"&gt;
  &lt;div class="col-xs-6 col-sm-3"&gt;カラム 1: .col-xs-6 .col-sm-3&lt;br&gt;このカラムだけ高さが異なる&lt;/div&gt;
  &lt;div class="col-xs-6 col-sm-3"&gt;カラム 2: .col-xs-6 .col-sm-3&lt;/div&gt;
  &lt;!-- モバイルサイズではclearfixが有効になる --&gt;
  <span class="alert-danger">&lt;div class="clearfix visible-xs"&gt;&lt;/div&gt;</span>
  &lt;div class="col-xs-6 col-sm-3"&gt;カラム 3: .col-xs-6 .col-sm-3&lt;/div&gt;
  &lt;div class="col-xs-6 col-sm-3"&gt;カラム 4: .col-xs-6 .col-sm-3&lt;/div&gt;
&lt;/div&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>折り返すカラムの前に<a href="#float" class="alert-link">クリアフィックス</a>を追加（さらに<a href="#available" class="alert-link">レスポンシブユーティリティクラス</a>を組み合わせる）</li>
							</ul>
						</div>

						<h2 id="offset">空白カラムの指定（Offsetting columns） <small>変更</small></h2>
						<h4>見本 <small>見やすいよう色を付けています</small></h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p class="content">●有効/空白/有効</p>
								<div class="container-fluid">
									<div class="row grid">
										<div class="col-md-4 column">カラム 1: .col-md-4</div>
										<div class="col-md-4 col-md-offset-4 column">カラム 2: .col-md-4 .col-md-offset4</div>
									</div>
								</div>
								<br>
								<p class="content">●空白/有効/空白/有効</p>
								<div class="container-fluid">
									<div class="row grid">
										<div class="col-md-3 col-md-offset-3 column">カラム 1: .col-md-3 .col-md-offset3</div>
										<div class="col-md-3 col-md-offset-3 column">カラム 2: .col-md-3 .col-md-offset3</div>
									</div>
								</div>
								<br>
								<p class="content">●空白/有効/空白</p>
								<div class="container-fluid">
									<div class="row grid">
										<div class="col-md-6 col-md-offset-3 column">カラム 1: .col-md-6 .col-md-offset3</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Bootstrap2.xの設定例 <small><span class="alert-success">緑背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;!-- 有効/空白/有効 --&gt;
&lt;div class="row"&gt;
  &lt;div class="<span class="alert-success">span4</span>"&gt;カラム 1: .col-md-4&lt;/div&gt;
  &lt;div class="<span class="alert-success">span4 offset4</span>"&gt;カラム 2: .col-md-4 .col-md-offset4&lt;/div&gt;
&lt;/div&gt;

&lt;!-- 空白/有効/空白/有効 --&gt;
&lt;div class="row"&gt;
  &lt;div class="<span class="alert-success">span3 offset3</span>"&gt;カラム 1: .col-md-3 .col-md-offset3&lt;/div&gt;
  &lt;div class="<span class="alert-success">span3 offset3</span>"&gt;カラム 2: .col-md-3 .col-md-offset3&lt;/div&gt;
&lt;/div&gt;

&lt;!-- 空白/有効/空白 --&gt;
&lt;div class="row"&gt;
  &lt;div class="<span class="alert-success">span6 offset3</span>"&gt;カラム 1: .col-md-6 .col-md-offset3&lt;/div&gt;
&lt;/div&gt;
</pre>
							</div>
							<div class="col-sm-6">
								<h4>Bootstrap3.xの設定例 <small><span class="alert-danger">赤背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;!-- 有効/空白/有効 --&gt;
&lt;div class="row"&gt;
  &lt;div class="<span class="alert-danger">col-md-4</span>"&gt;カラム 1: .col-md-4&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-md-4 col-md-offset-4</span>"&gt;カラム 2: .col-md-4 .col-md-offset4&lt;/div&gt;
&lt;/div&gt;

&lt;!-- 空白/有効/空白/有効 --&gt;
&lt;div class="row"&gt;
  &lt;div class="<span class="alert-danger">col-md-3 col-md-offset-3</span>"&gt;カラム 1: .col-md-3 .col-md-offset3&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-md-3 col-md-offset-3</span>"&gt;カラム 2: .col-md-3 .col-md-offset3&lt;/div&gt;
&lt;/div&gt;

&lt;!-- 空白/有効/空白 --&gt;
&lt;div class="row"&gt;
  &lt;div class="<span class="alert-danger">col-md-6 col-md-offset-3</span>"&gt;カラム 1: .col-md-6 .col-md-offset3&lt;/div&gt;
&lt;/div&gt;
</pre>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>div.col-xx-*</code>に<code>.col-xx-offset-*</code>（以下の「クラスの種類」から選択）を追加（そのカラムの左側が空白になる）</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li><code>.offset*</code>⇒<code>.col-offset-*</code>⇒<code>.col-xx-offset-*</code>（3RC1の途中）</li>
							</ul>
						</div>
						<h4>クラスの種類 <small><code>*</code>の数値は0～12</small></h4>
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr>
									<th></th>
									<th>モバイルサイズ</th>
									<th>タブレットサイズ</th>
									<th>デスクトップサイズ</th>
									<th>大画面サイズ<br><span class="text-muted">新設（3RC2）</span></th>
								</tr>
								<tr>
									<td>表示領域の幅</td>
									<td class="text-center">768px未満</td>
									<td class="text-center">768px～991px</td>
									<td class="text-center">992px～1199px</td>
									<td class="text-center">1200px以上</td>
								</tr>
								<tr>
									<td>全てのサイズに適用</td>
									<td colspan="4" class="success"><code>.col-xs-offset-*</code><br><span class="text-muted">新設（3.0.1）</span></td>
								</tr>
								<tr>
									<td>768px以上に適用</td>
									<td></td>
									<td colspan="3" class="success"><code>.col-sm-offset-*</code></td>
								</tr>
								<tr>
									<td>992px以上に適用</td>
									<td></td>
									<td></td>
									<td colspan="2" class="success"><code>.col-md-offset-*</code><br><span class="text-muted">新設（3RC2）</span></td>
								</tr>
								<tr>
									<td>1200px以上に適用</td>
									<td></td>
									<td></td>
									<td></td>
									<td class="success"><code>.col-lg-offset-*</code><br><span class="text-muted">3RC1の表示領域の幅992px以上より変更</span></td>
								</tr>
							</table>
						</div>

						<h2 id="nesting-column">カラムの入れ子（Nesting columns） <small></small></h2>
						<p>カラムの中にさらに子カラムを表示する。</p>
						<h4>見本 <small>見やすいよう色を付けています</small></h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-9 column">
											親カラム 1: .col-md-9
											<div class="row">
												<div class="col-md-6 column">
													子カラム 1: .col-md-6
												</div>
												<div class="col-md-6 column">
													子カラム 2: .col-md-6
												</div>
											</div>
										</div>
										<div class="col-md-3 column">
											親カラム 2: .col-md-3
										</div>
									</div>
								</div>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;div class="row"&gt;
  &lt;div class="col-md-9"&gt;
    親カラム 1: .col-md-9
    <span class="alert-danger">&lt;div class="row"&gt;</span>
      &lt;div class="<span class="alert-danger">col-md-6</span>"&gt;
        子カラム 1: .col-md-6
      &lt;/div&gt;
      &lt;div class="<span class="alert-danger">col-md-6</span>"&gt;
        子カラム 2: .col-md-6
      &lt;/div&gt;
    <span class="alert-danger">&lt;/div&gt;</span>
  &lt;/div&gt;
  &lt;div class="col-md-3"&gt;
    親カラム 2: .col-md-3
  &lt;/div&gt;
&lt;/div&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>div.row</code> > <code>div.row</code>の入れ子にする</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li>Bootstrap2では子カラムは親カラムのカラム数を引き継ぐ（親カラムが6カラムなら子カラムは6カラム分しか指定できない）が、Bootstrap3では子カラムは親カラムのカラム数に関係なく新たに12カラム分指定できる。</li>
							</ul>
						</div>

						<h2 id="pushpull">カラムの順序変更（Column ordering） <small>新設</small></h2>
						<p>HTMLのソースがカラム 1、カラム 2の順でもカラム 2、カラム 1の順に表示される。</p>
						<h4>見本 <small>見やすいよう色を付けています</small></h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p class="content">●カラム 2、カラム 1の順に表示</p>
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-9 col-md-push-3 column">カラム 1: .col-md-9 .col-md-push-3</div>
										<div class="col-md-3 col-md-pull-9 column">カラム 2: .col-md-3 .col-md-pull-9</div>
									</div>
								</div>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;!-- カラム 2、カラム 1の順に表示 --&gt;
&lt;div class="row"&gt;
  &lt;div class="<span class="alert-danger">col-md-9 col-md-push-3</span>"&gt;カラム 1: .col-md-9 .col-md-push-3&lt;/div&gt;
  &lt;div class="<span class="alert-danger">col-md-3 col-md-pull-9</span>"&gt;カラム 2: .col-md-3 .col-md-pull-9&lt;/div&gt;
&lt;/div&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>div.row</code> > [<code>div.col-xx-*.col-xx-push-**</code> + <code>div.col-xx-**.col-xx-pull-*</code>]（<code>.col-xx-push-*</code>と<code>.col-xx-pull-*</code>は以下の「クラスの種類」から選択）（<code>*</code>及び<code>**</code>の数値は一致させる）</li>
							</ul>
							<p>【変更】</p>
							<ul>
								<li><code>.col-push-*</code>/<code>.col-pull-*</code>⇒<code>.col-xx-push-*</code>/<code>.col-xx-pull-*</code>（3RC1の途中）</li>
							</ul>
						</div>
						<h4>クラスの種類 <small><code>*</code>の数値は0～12</small></h4>
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr>
									<th></th>
									<th>モバイルサイズ</th>
									<th>タブレットサイズ</th>
									<th>デスクトップサイズ</th>
									<th>大画面サイズ<br><span class="text-muted">新設（3RC2）</span></th>
								</tr>
								<tr>
									<td>表示領域の幅</td>
									<td class="text-center">768px未満</td>
									<td class="text-center">768px～991px</td>
									<td class="text-center">992px～1199px</td>
									<td class="text-center">1200px以上</td>
								</tr>
								<tr>
									<td>全てのサイズに適用</td>
									<td colspan="4" class="success"><code>.col-xs-push-*</code><br><code>.col-xs-pull-*</code><br><span class="text-muted">新設（3.0.1）</span></td>
								</tr>
								<tr>
									<td>768px以上に適用</td>
									<td></td>
									<td colspan="3" class="success"><code>.col-sm-push-*</code><br><code>.col-sm-pull-*</code></td>
								</tr>
								<tr>
									<td>992px以上に適用</td>
									<td></td>
									<td></td>
									<td colspan="2" class="success"><code>.col-md-push-*</code><br><code>.col-md-pull-*</code><br><span class="text-muted">新設（3RC2）</span></td>
								</tr>
								<tr>
									<td>1200px以上に適用</td>
									<td></td>
									<td></td>
									<td></td>
									<td class="success"><code>.col-lg-push-*</code><br><code>.col-lg-pull-*</code><br><span class="text-muted">3RC1の表示領域の幅992px以上より変更</span></td>
								</tr>
							</table>
						</div>

						<div class="page-header">
							<h1 id="type">文字の体裁（Typography）</h1>
						</div>
						<h2 id="heading">見出し（Headings）</h2>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;!-- タグで設定 --&gt;
<span class="alert-danger">&lt;h*&gt;</span>見出し <span class="alert-danger">&lt;small&gt;</span>補助文<span class="alert-danger">&lt;/small&gt;</span><span class="alert-danger">&lt;/h*&gt;</span>

&lt;!-- クラスで設定 --&gt;
&lt;p class="<span class="alert-danger">h*</span>"&gt;見出し &lt;span class="<span class="alert-danger">small</span>"&gt;補助文&lt;/span&gt;&lt;/p&gt;
</pre>
						<h4>見出しの種類</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<h1>見出し1 <small>補助文</small><span style="font-size:14px">：<code>&lt;h1&gt;</code>または<code>.h1</code></span></h1>
								<h2>見出し2 <small>補助文</small><span style="font-size:14px">：<code>&lt;h2&gt;</code>または<code>.h2</code></span></h2>
								<h3>見出し3 <small>補助文</small><span style="font-size:14px">：<code>&lt;h3&gt;</code>または<code>.h3</code></span></h3>
								<h4>見出し4 <small>補助文</small><span style="font-size:14px">：<code>&lt;h4&gt;</code>または<code>.h4</code></span></h4>
								<h5>見出し5 <small>補助文</small><span style="font-size:14px">：<code>&lt;h5&gt;</code>または<code>.h5</code></span></h5>
								<h6>見出し6 <small>補助文</small><span style="font-size:14px">：<code>&lt;h6&gt;</code>または<code>.h6</code></span></h6>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>すべてHTMLの見出しに<code>&lt;h1&gt;</code>～<code>&lt;h6&gt;</code>タグが使用可能</li>
								<li>見出しのフォントスタイルを一致させた上でテキストもインラインで表示したい場合<code>.h1</code>～<code>.h6</code>クラスを使用</li>
								<li>補助文：<code>&lt;h*&gt;</code>タグまたは<code>.h*</code>内に<code>&lt;small&gt;</code>タグか<code>span.small</code>を入れる</li>
							</ul>
						</div>

						<h2 id="copy">段落文（Body copy）</h2>
						<h3>リード文（Lead body copy）</h3>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p class="lead">これがリード文の字体です。</p>
								<p>これが標準の字体です。</p>
								<p>文章の途中で<span class="lead">リード文を入れる</span>こともできます。</p>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;p class="<span class="alert-danger">lead</span>"&gt;これがリード文の字体です。&lt;/p&gt;

&lt;p&gt;文章の途中で<span class="alert-danger">&lt;span class="lead"&gt;</span>リード文を入れる<span class="alert-danger">&lt;/span&gt;</span>こともできます。&lt;/p&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>段落の文章で<code>.lead</code>を入れる</li>
							</ul>
						</div>

						<h2 id="text-elements">文字の装飾（Inline text elements）</h2>
						<p>軽量なスタイルを持つHTMLのデフォルトの強調タグを使用。</p>
						<h4>装飾の種類</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p>マーク<code>&lt;mark&gt;</code>：テキストを<mark>ハイライト</mark>で表示する。</p>
								<p>削除<code>&lt;del&gt;</code>：<del>この行のテキストは、削除されたテキストとみなされる。</del></p>
								<p>取消<code>&lt;s&gt;</code>：<s>この行のテキストは、もはや適切でないように扱われる。</s></p>
								<p>挿入<code>&lt;ins&gt;</code>：<ins>この行のテキストは、文書への挿入とみなされる。</ins></p>
								<p>下線<code>&lt;u&gt;</code>：<u>この行のテキストは、強調とみなされる。</u></p>
								<p>小さめの文字<code>&lt;small&gt;</code>/<code>.small</code>：<small>小さめの文字のテキスト</small>　<span class="small">クラス設定でもOK</span></p>
								<p>太めの文字<code>&lt;strong&gt;</code>：<strong>太めの文字のテキスト</strong></p>
								<p>斜体<code>&lt;em&gt;</code>：<em>Italic体のテキスト</em></p>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;!-- マーク --&gt;
テキストを<span class="alert-danger">&lt;mark&gt;</span>ハイライト<span class="alert-danger">&lt;/mark&gt;</span>で表示する。

&lt;!-- 削除 --&gt;
<span class="alert-danger">&lt;del&gt;</span>この行のテキストは、削除されたテキストとみなされる。<span class="alert-danger">&lt;/del&gt;</span>

&lt;!-- 取消 --&gt;
<span class="alert-danger">&lt;s&gt;</span>この行のテキストは、もはや適切でないように扱われる。<span class="alert-danger">&lt;/s&gt;</span>

&lt;!-- 挿入 --&gt;
<span class="alert-danger">&lt;ins&gt;</span>この行のテキストは、文書への挿入とみなされる。<span class="alert-danger">&lt;/ins&gt;</span>

&lt;!-- 下線 --&gt;
<span class="alert-danger">&lt;u&gt;</span>この行のテキストは、強調とみなされる。<span class="alert-danger">&lt;/u&gt;</span>

&lt;!-- 小さめの文字 --&gt;
<span class="alert-danger">&lt;small&gt;</span>小さめの文字のテキスト<span class="alert-danger">&lt;/small&gt;</span>　&lt;span class="<span class="alert-danger">small</span>"&gt;クラス設定でもOK&lt;/span&gt;

&lt;!-- 太めの文字 --&gt;
<span class="alert-danger">&lt;strong&gt;</span>太めの文字のテキスト<span class="alert-danger">&lt;/strong&gt;</span>

&lt;!-- 斜体 --&gt;
<span class="alert-danger">&lt;em&gt;</span>Italic体のテキスト<span class="alert-danger">&lt;/em&gt;</span>
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>マーク：テキストをハイライトで強調するために<code>&lt;mark&gt;</code>タグを使用</li>
								<li>削除：削除されたテキストブロックを示すために<code>&lt;del&gt;</code>タグを使用</li>
								<li>取消：もはや適切でないテキストブロックを示すために<code>&lt;s&gt;</code>タグを使用</li>
								<li>挿入：文書への挿入を示すために<code>&lt;ins&gt;</code>タグを使用</li>
								<li>下線：テキストを強調するために<code>&lt;u&gt;</code>タグを使用</li>
								<li>小さめの文字：標準に比べ85％のサイズでテキストを表示するために<code>&lt;small&gt;</code>タグまたは<code>.small</code>クラスを使用</li>
								<li>太めの文字：より重いフォントでテキストを強調するために<code>&lt;strong&gt;</code>タグを使用</li>
								<li>斜体：イタリック体でテキストを強調するために<code>&lt;em&gt;</code>タグを使用（ブラウザによっては123やabcなど英数字のみ適用）</li>
							</ul>
						</div>

						<h2 id="alignment">文字の配置（Alignment classes）</h2>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;p class="<span class="alert-danger">text-xxx</span>"&gt;...&lt;/p&gt;
</pre>
						<h4>配置の種類</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p class="text-left">文字の左寄せ：<code>.text-left</code></p>
								<p class="text-center">文字のセンタリング：<code>.text-center</code></p>
								<p class="text-right">文字の右寄せ：<code>.text-right</code></p>
								<p class="text-justify">文字の均等割付：<code>.text-justify</code> <span class="text-muted">新設（3.1.0）</span></p>
								<p class="text-nowrap">文字を折り返さない：<code>.text-nowrap</code> <span class="text-muted">新設（3.2.0）</span></p>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>テキストに<code>.text-xxx</code>（上記の「配置の種類」から選択）を入れる</li>
								<li><code>.text-nowrap</code>（文字を折り返さない）はテーブルのセル内で使うと便利</li>
							</ul>
							<p>【注意】</p>
							<ul>
								<li><code>.text-justify</code>（文字の均等割付）は、別途CSSで<code>text-justify</code>プロパティの指定をする必要がある</li>
								<li>全体の配置を設定する場合は<a href="#float" class="alert-link">配置</a>を参照</li>
							</ul>
						</div>

						<h2 id="transformation">文字の変換（Transformation classes）<small>新設（3.2.0）</small></h2>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;!-- すべて小文字 --&gt;
&lt;p class="text-lowercase"&gt;Lowercased text.&lt;/p&gt;

&lt;!-- すべて大文字 --&gt;
&lt;p class="text-uppercase"&gt;Uppercased text.&lt;/p&gt;

&lt;!-- 最初の文字が小文字⇒大文字 --&gt;
&lt;p class="text-capitalize"&gt;Capitalized text.&lt;/p&gt;
</pre>
						<h4>変換の種類</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p class="content">●すべて小文字：<code>.text-lowercase</code></p>
								<p class="text-lowercase">Lowercased text.</p>
								<p class="content">●すべて大文字：<code>.text-uppercase</code></p>
								<p class="text-uppercase">Uppercased text.</p>
								<p class="content">●最初の文字が小文字⇒大文字：<code>.text-capitalize</code></p>
								<p class="text-capitalize">Capitalized text.</p>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>テキストに<code>.text-xxx</code>（上記の「変換の種類」から選択）を入れる</li>
							</ul>
							<p>【注意】</p>
							<ul>
								<li>テキストが英文字のみ適用</li>
							</ul>
						</div>

						<h2 id="abbreviation">省略語（Abbreviations）</h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p>単語属性の省略形は<abbr title="Attribute">attr</abbr>です。</p>
<p><abbr title="HyperText Markup Language" class="initialism">html</abbr>はたいへんすばらしいものです。</p>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;p&gt;単語属性の省略形は<span class="alert-danger">&lt;abbr title="Attribute"&gt;</span>attr<span class="alert-danger">&lt;/abbr&gt;</span>です。&lt;/p&gt;

&lt;p&gt;&lt;abbr title="HyperText Markup Language" class="<span class="alert-danger">initialism</span>"&gt;html&lt;/abbr&gt;はたいへんすばらしいものです。&lt;/p&gt;</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>省略形や頭字語を表示するために<code>&lt;abbr&gt;</code>タグを使用</li>
								<li><code>abbr</code>に<code>title</code>属性で説明をつけると、その部分にカーソルを合わせたときに「？」のカーソルとともに説明がホバー表示される（ブラウザによる）</li>
								<li><code>abbr.initialism</code>にすると字体が若干小さめになり、英単語は全て大文字で表示される</li>
							</ul>
						</div>

						<h2 id="address">アドレス（Addresses）</h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<address>
									<strong>Twitter社</strong><br>
									アメリカ合衆国 カルフォルニア州<br>
									サンフランシスコ市　フォルサム通り795番地　600号室<br>
									<abbr title="Phone">P:</abbr> (123) 456-7890
								</address>
								<address>
									<strong>フルネーム</strong><br>
									<a href="mailto:#">first.last@example.com</a>
								</address>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
<span class="alert-danger">&lt;address&gt;</span>
  &lt;strong&gt;Twitter社&lt;/strong&gt;&lt;br&gt;
  アメリカ合衆国 カルフォルニア州&lt;br&gt;
  サンフランシスコ市　フォルサム通り795番地　600号室&lt;br&gt;
  &lt;abbr title="Phone"&gt;P:&lt;/abbr&gt; (123) 456-7890
<span class="alert-danger">&lt;/address&gt;</span>
<span class="alert-danger">&lt;address&gt;</span>
  &lt;strong&gt;フルネーム&lt;/strong&gt;&lt;br&gt;
  &lt;a href="mailto:#"&gt;first.last@example.com&lt;/a&gt;
<span class="alert-danger">&lt;/address&gt;</span>
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>現在の連絡先情報を表示するために<code>&lt;address&gt;</code>タグを使用</li>
								<li>各行の改行には<code>&lt;br&gt;</code>タグを使用</li>
							</ul>
						</div>

						<h2 id="blockquote">引用（Blockquotes）</h2>
						<h3>引用の設定（Default blockquote）</h3>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<blockquote>
									<p>基本の引用文です。</p>
								</blockquote>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
<span class="alert-danger">&lt;blockquote&gt;</span>
  <span class="alert-danger">&lt;p&gt;</span>基本の引用文です。<span class="alert-danger">&lt;/p&gt;</span>
<span class="alert-danger">&lt;/blockquote&gt;</span>
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>文書の範囲内で別のソースから大量の内容を引用するために<code>&lt;blockquote&gt;</code>タグを使用</li>
								<li>引用文は直線状の引用符（<code>"</code>または<code>'</code>）のため<code>blockquote</code> > <code>p</code>を推奨</li>
							</ul>
						</div>
						<h3>出典元の表示（Naming a source）<small>設定変更（3.1.0）</small></h3>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<blockquote>
									<p>引用文です。</p>
									<footer>文章の<cite title="出典元の名前">出典元</cite>が明示できます。</footer>
								</blockquote>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Bootstrap2.x（～3.0.3）の設定例 <small><span class="alert-success">緑背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;blockquote&gt;
  &lt;p&gt;引用文です。&lt;/p&gt;
  <span class="alert-success">&lt;small&gt;</span>文章の&lt;cite title="出典元の名前"&gt;出典元&lt;/cite&gt;が明示できます。<span class="alert-success">&lt;/small&gt;</span>
&lt;/blockquote&gt;
</pre>
							</div>
							<div class="col-sm-6">
								<h4>Bootstrap3.x（3.1.0～）の設定例 <small><span class="alert-danger">赤背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;blockquote&gt;
  &lt;p&gt;引用文です。&lt;/p&gt;
  <span class="alert-danger">&lt;footer&gt;</span>文章の&lt;cite title="出典元の名前"&gt;出典元&lt;/cite&gt;が明示できます。<span class="alert-danger">&lt;/footer&gt;</span>
&lt;/blockquote&gt;
</pre>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>blockquote</code> > <code>footer</code></li>
								<li>さらに<code>footer</code> > <code>cite</code>にして、<code>cite</code>に<code>title</code>属性を入れると、その部分にカーソルを合わせたときに出典の追加情報がホバー表示される（ブラウザによる）</li>
							</ul>
							<p>【Bootstrap2.x（～3.0.3）との変更箇所】</p>
							<ul>
								<li><code>blockquote</code> > <code>small</code>⇒<code>blockquote</code> > <code>footer</code></li>
							</ul>
						</div>
						<h3>引用の右寄せ（Alternate displays）<small>設定変更（3.1.0）</small></h3>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<blockquote class="blockquote-reverse">
									<p>右寄せの引用文です。</p>
									<footer>文章の<cite title="出典元の名前">出典元</cite>が明示できます。</footer>
								</blockquote>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Bootstrap2.x（～3.0.3）の設定例 <small><span class="alert-success">緑背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;blockquote class="<span class="alert-success">pull-right</span>"&gt;
  &lt;p&gt;右寄せの引用文です。&lt;/p&gt;
  <span class="alert-success">&lt;small&gt;</span>文章の&lt;cite title="出典元の名前"&gt;出典元&lt;/cite&gt;が明示できます。<span class="alert-success">&lt;/small&gt;</span>
&lt;/blockquote&gt;
</pre>
							</div>
							<div class="col-sm-6">
								<h4>Bootstrap3.x（3.1.0～）の設定例 <small><span class="alert-danger">赤背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;blockquote class="<span class="alert-danger">blockquote-reverse</span>"&gt;
  &lt;p&gt;右寄せの引用文です。&lt;/p&gt;
  <span class="alert-danger">&lt;footer&gt;</span>文章の&lt;cite title="出典元の名前"&gt;出典元&lt;/cite&gt;が明示できます。<span class="alert-danger">&lt;/footer&gt;</span>
&lt;/blockquote&gt;
</pre>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>blockquote</code>に<code>.blockquote-reverse</code>を入れる</li>
							</ul>
							<p>【Bootstrap2.x（～3.0.3）との変更箇所】</p>
							<ul>
								<li><code>blockquote.pull-right</code>⇒<code>blockquote.blockquote-reverse</code></li>
							</ul>
						</div>

						<h2 id="list">リスト（Lists）</h2>
						<h3>箇条書きリスト（Unordered）</h3>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<ul>
									<li>リスト1</li>
									<li>リスト2</li>
									<li>リスト3</li>
									<ul>
										<li>子リスト1</li>
										<li>子リスト2</li>
										<li>子リスト3</li>
									</ul>
									<li>リスト4</li>
									<li>リスト5</li>
									<li>リスト6</li>
								</ul>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
<span class="alert-danger">&lt;ul&gt;</span>
  <span class="alert-danger">&lt;li&gt;</span>リスト1<span class="alert-danger">&lt;/li&gt;</span>
  &lt;li&gt;リスト2&lt;/li&gt;
  &lt;li&gt;リスト3&lt;/li&gt;
  <span class="alert-danger">&lt;ul&gt;</span>
    <span class="alert-danger">&lt;li&gt;</span>子リスト1<span class="alert-danger">&lt;/li&gt;</span>
    &lt;li&gt;子リスト2&lt;/li&gt;
    &lt;li&gt;子リスト3&lt;/li&gt;
  <span class="alert-danger">&lt;/ul&gt;</span>
  &lt;li&gt;リスト4&lt;/li&gt;
  &lt;li&gt;リスト5&lt;/li&gt;
  &lt;li&gt;リスト6&lt;/li&gt;
<span class="alert-danger">&lt;/ul&gt;</span>
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>順序が明示されないリストを表示するために<code>&lt;ul&gt;</code> > <code>&lt;li&gt;</code>タグを使用</li>
							</ul>
						</div>
						<h3>番号付きのリスト（Ordered）</h3>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<ol>
									<li>リスト1</li>
									<li>リスト2</li>
									<li>リスト3</li>
									<ol>
										<li>子リスト1</li>
										<li>子リスト2</li>
										<li>子リスト3</li>
									</ol>
									<li>リスト4</li>
									<li>リスト5</li>
									<li>リスト6</li>
								</ol>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
<span class="alert-danger">&lt;ol&gt;</span>
  &lt;li&gt;リスト1&lt;/li&gt;
  &lt;li&gt;リスト2&lt;/li&gt;
  &lt;li&gt;リスト3&lt;/li&gt;
  <span class="alert-danger">&lt;ol&gt;</span>
    &lt;li&gt;子リスト1&lt;/li&gt;
    &lt;li&gt;子リスト2&lt;/li&gt;
    &lt;li&gt;子リスト3&lt;/li&gt;
  <span class="alert-danger">&lt;/ol&gt;</span>
  &lt;li&gt;リスト4&lt;/li&gt;
  &lt;li&gt;リスト5&lt;/li&gt;
  &lt;li&gt;リスト6&lt;/li&gt;
<span class="alert-danger">&lt;/ol&gt;</span>
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>順序が重要であるリストを表示するために<code>&lt;ol&gt;</code> > <code>&lt;li&gt;</code>タグを使用</li>
							</ul>
						</div>
						<h3>マークなしリスト（Unstyled） <small>設定変更</small></h3>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<ul class="list-unstyled">
									<li>リスト1</li>
									<li>リスト2</li>
									<li>リスト3</li>
									<ul>
										<li>子リスト1</li>
										<li>子リスト2</li>
										<li>子リスト3</li>
									</ul>
									<li>リスト4</li>
									<li>リスト5</li>
									<li>リスト6</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Bootstrap2.xの設定例 <small><span class="alert-success">緑背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;ul class="<span class="alert-success">unstyled</span>"&gt;
  &lt;li&gt;リスト1&lt;/li&gt;
  &lt;li&gt;リスト2&lt;/li&gt;
  &lt;li&gt;リスト3&lt;/li&gt;
  &lt;ul&gt;
    &lt;li&gt;子リスト1&lt;/li&gt;
    &lt;li&gt;子リスト2&lt;/li&gt;
    &lt;li&gt;子リスト3&lt;/li&gt;
  &lt;/ul&gt;
  &lt;li&gt;リスト4&lt;/li&gt;
  &lt;li&gt;リスト5&lt;/li&gt;
  &lt;li&gt;リスト6&lt;/li&gt;
&lt;/ul&gt;
</pre>
							</div>
							<div class="col-sm-6">
								<h4>Bootstrap3.xの設定例 <small><span class="alert-danger">赤背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;ul class="<span class="alert-danger">list-unstyled</span>"&gt;
  &lt;li&gt;リスト1&lt;/li&gt;
  &lt;li&gt;リスト2&lt;/li&gt;
  &lt;li&gt;リスト3&lt;/li&gt;
  &lt;ul&gt;
    &lt;li&gt;子リスト1&lt;/li&gt;
    &lt;li&gt;子リスト2&lt;/li&gt;
    &lt;li&gt;子リスト3&lt;/li&gt;
  &lt;/ul&gt;
  &lt;li&gt;リスト4&lt;/li&gt;
  &lt;li&gt;リスト5&lt;/li&gt;
  &lt;li&gt;リスト6&lt;/li&gt;
&lt;/ul&gt;
</pre>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>ul</code>または<code>ol</code>に<code>.list-unstyled</code>を入れる</li>
								<li>入れ子リストもマークなしにする場合は、同様に<code>.list-unstyled</code>を入れる</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li><code>.unstyled</code>⇒<code>.list-unstyled</code></li>
								<li><code>ul</code>だけでなく、<code>ol</code>でも設定可能に</li>
							</ul>
						</div>
						<h3>横並びリスト（Inline） <small>設定変更</small></h3>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<ul class="list-inline">
									<li>リスト1</li>
									<li>リスト2</li>
									<li>リスト3</li>
									<li>リスト4</li>
									<li>リスト5</li>
									<li>リスト6</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Bootstrap2.xの設定例 <small><span class="alert-success">緑背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;ul class="<span class="alert-success">inline</span>"&gt;
  &lt;li&gt;リスト1&lt;/li&gt;
  &lt;li&gt;リスト2&lt;/li&gt;
  &lt;li&gt;リスト3&lt;/li&gt;
  &lt;li&gt;リスト4&lt;/li&gt;
  &lt;li&gt;リスト5&lt;/li&gt;
  &lt;li&gt;リスト6&lt;/li&gt;
&lt;/ul&gt;
</pre>
							</div>
							<div class="col-sm-6">
								<h4>Bootstrap3.xの設定例 <small><span class="alert-danger">赤背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;ul class="<span class="alert-danger">list-inline</span>"&gt;
  &lt;li&gt;リスト1&lt;/li&gt;
  &lt;li&gt;リスト2&lt;/li&gt;
  &lt;li&gt;リスト3&lt;/li&gt;
  &lt;li&gt;リスト4&lt;/li&gt;
  &lt;li&gt;リスト5&lt;/li&gt;
  &lt;li&gt;リスト6&lt;/li&gt;
&lt;/ul&gt;
</pre>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>ul</code>または<code>ol</code>に<code>.list-inline</code>を入れる</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li><code>.inline</code>⇒<code>.list-inline</code></li>
								<li><code>ul</code>だけでなく、<code>ol</code>でも設定可能に</li>
							</ul>
						</div>
						<h3>定義リスト（Description）</h3>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<dl>
									<dt>リスト項目</dt>
										<dd>リスト項目の説明</dd>
									<dt>リスト項目</dt>
										<dd>リスト項目の説明1</dd>
										<dd>リスト項目の説明2</dd>
									<dt>リスト項目がとても長い場合</dt>
										<dd>リスト項目の説明1</dd>
										<dd>リスト項目の説明2</dd>
										<dd>リスト項目の説明3</dd>
								</dl>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
<span class="alert-danger">&lt;dl&gt;</span>
  <span class="alert-danger">&lt;dt&gt;</span>リスト項目<span class="alert-danger">&lt;/dt&gt;</span>
    <span class="alert-danger">&lt;dd&gt;</span>リスト項目の説明<span class="alert-danger">&lt;/dd&gt;</span>
  &lt;dt&gt;リスト項目&lt;/dt&gt;
    &lt;dd&gt;リスト項目の説明1&lt;/dd&gt;
    &lt;dd&gt;リスト項目の説明2&lt;/dd&gt;
  &lt;dt&gt;リスト項目がとても長い場合&lt;/dt&gt;
    &lt;dd&gt;リスト項目の説明1&lt;/dd&gt;
    &lt;dd&gt;リスト項目の説明2&lt;/dd&gt;
    &lt;dd&gt;リスト項目の説明3&lt;/dd&gt;
<span class="alert-danger">&lt;/dl&gt;</span>
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>関連する記述と用語のリストを表示するために<code>&lt;dl&gt;</code> > <code>&lt;dt&gt;</code>（項目） + <code>&lt;dd&gt;</code>（項目の説明）タグを使用</li>
							</ul>
						</div>
						<h3>水平定義リスト（Horizontal description）</h3>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<dl class="dl-horizontal">
									<dt>リスト項目</dt>
										<dd>リスト項目の説明</dd>
									<dt>リスト項目</dt>
										<dd>リスト項目の説明1</dd>
										<dd>リスト項目の説明2</dd>
									<dt>リスト項目がとても長い場合</dt>
										<dd>リスト項目の説明1</dd>
										<dd>リスト項目の説明2</dd>
										<dd>リスト項目の説明3</dd>
								</dl>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;dl class="<span class="alert-danger">dl-horizontal</span>"&gt;
  &lt;dt&gt;リスト項目&lt;/dt&gt;
    &lt;dd&gt;リスト項目の説明&lt;/dd&gt;
  &lt;dt&gt;リスト項目&lt;/dt&gt;
    &lt;dd&gt;リスト項目の説明1&lt;/dd&gt;
    &lt;dd&gt;リスト項目の説明2&lt;/dd&gt;
  &lt;dt&gt;リスト項目がとても長い場合&lt;/dt&gt;
    &lt;dd&gt;リスト項目の説明1&lt;/dd&gt;
    &lt;dd&gt;リスト項目の説明2&lt;/dd&gt;
    &lt;dd&gt;リスト項目の説明3&lt;/dd&gt;
&lt;/dl&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>dl</code>に<code>.dl-horizontal</code>を入れる</li>
							</ul>
							<p>【注意】</p>
							<ul>
								<li><code>dt</code>（項目）の文章が収まりきれない場合は、その部分が自動的に切り捨てられる</li>
								<li>表示領域の幅768px以上で適用（未満の場合は普通の定義リストと同じ表示に）</li>
							</ul>
						</div>

						<div class="page-header">
							<h1 id="code">コード（Code）</h1>
						</div>
						<h2 id="code2">コード表示（Inline code）</h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								プログラムコードを埋め込むには<code>&lt;code&gt;</code>を使います。
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
プログラムコードを埋め込むには<span class="alert-danger">&lt;code&gt;</span>&amp;lt;code&amp;gt;<span class="alert-danger">&lt;/code&gt;</span>を使います。
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>プログラムコードを埋め込むために<code>&lt;code&gt;</code>タグを使用</li>
								<li><code>code</code>内で<code>&lt;</code>、<code>&gt;</code>、<code>&amp;</code>を使うときは、それぞれ<code>&amp;lt;</code>、<code>&amp;gt;</code>、<code>&amp;amp;</code>と記述してエスケープ処理をする</li>
							</ul>
							<p>【変更】</p>
							<ul>
								<li>コードが続くようだと文章が折り返さない⇒3.2.0より折り返すようになる（<code>white-space: nowrap;</code>の指定がなくなった）</li>
							</ul>
						</div>

						<h2 id="user">ユーザー入力（User input） <small>新設（3.1.0）</small></h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								ユーザーが入力した内容を表示するには<kbd>ユーザー入力</kbd>のようにします。
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
ユーザーが入力した内容を表示するには<span class="alert-danger">&lt;kbd&gt;</span>ユーザー入力<span class="alert-danger">&lt;/kbd&gt;</span>のようにします。
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>キーボードから入力された入力を示すために<code>&lt;kbd&gt;</code>タグを使用</li>
							</ul>
						</div>

						<h2 id="pre">整形済みテキスト（Basic block）</h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
<pre>
整形済みテキストは、HTMLソース中のスペースや改行をそのまま表示します。
設定例のようにソースコードなどを表示する際にはとても便利です。
</pre>

<pre class="pre-scrollable">
テキストが長くなる場合は、スクロールできるようにしています。
これだと表示がダラダラ長くなることもありません。

【IT用語辞典バイナリより引用】

インターネットとは、TCP/IPを通信プロトコルとして世界中のコンピュータあるいはコンピュータネットワークを相互に接続している通信網のことである。

インターネットでは、各コンピュータに割り当てられたIPアドレスと呼ばれる識別番号を元に、ネットワークに接続されたコンピュータを一意に識別し、アクセスすることを可能としている。ただし、IPアドレスは単なる数字の羅列であって人間が識別することは容易でないため、IPアドレスをドメイン名へと変換して英数字などの文字情報で可能にするドメインネームシステム（DNS）が併用されている。

インターネットそのものについて特定の統括者や運営母体はないが、IPアドレスやドメイン名などの管理はICANNなどの管理団体が、技術や仕様の標準化はIETFが指揮をとっている。

インターネットには自由に参加できるが、利用するためにはインターネットの通信網に接続する必要がある。データセンターやインターネットサービスプロバイダ（ISP）各社は、主にインターネットエクスチェンジ（IX）を通じて相互接続している。一般ユーザーはISPと契約して、電話回線やADSL回線などを用いた通信をインターネットに接続させることにより、各家庭からのインターネット接続を実現している。

インターネットは通信プロトコルにTCP/IPを用いているが、ネットワーク構造のより上位に他の通信プロトコルを組み合わせることで、電子メールやファイル転送などのような、さまざまな通信サービスが提供されている。例えばWWWには主にHTTPが用いられており、電子メールにはSMTPやPOP、IMAPなどが、ネットニュースにはNNTP、インスタントメッセージングにはXMPPなどのプロトコルが用いられている。

ちなみに、WWWとインターネットの違いを挙げるとすれば、以下のように言うことができる。すなわち、WWWは、HTMLなどの文書フォーマットを用いてWebページの表現やWebページ同士のハイパーリンクを実現するシステムであり、電子メールと同様、インターネット上で実現されている仕組みの一種である。これに対して、インターネットは、WWWのシステムの土台となっているネットワークそのもののことである。

インターネットは誰に対しても開かれたネットワークである。インターネットの技術を応用して、LANなどの閉じたネットワーク環境として構築されたネットワークは、イントラネットと呼ばれる。インターネットとイントラネットの接続点には、外部からの悪意あるアクセスを防止する目的で、ファイヤーウォールなどが設置されることが多い。

インターネットの技術の発端は、1960年代終わりに米国国防総省によって構築されたコンピュータネットワークである「ARPAnet」が原型とされている。その後、学術研究を目的とするコンピュータネットワーク「NSFNet」が登場し、学術機関を中心としてネットワークが広がっていった。当初は電子メールや電子掲示板（BBS）が行われていたが、1991年にCERNからWWWの仕組みが発表され、90年代を通じて爆発的に普及していった。

日本では、1984年に村井純を中心とした学術機関のネットワーク「JUNET」が構築され、1988年にはWIDEプロジェクトが発足、1990年代中盤に至ると商用のISPも多数登場して一般家庭への普及が急速に進んだ。

今日、インターネットはPCだけでなく携帯電話や生活家電、家庭用ゲーム機などからも接続可能となっており、日常生活への浸透がますます進んでいる。
</pre>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
<span class="alert-danger">&lt;pre&gt;</span>
整形済みテキストは、HTMLソース中のスペースや改行をそのまま表示します。
設定例のようにソースコードなどを表示する際にはとても便利です。
<span class="alert-danger">&lt;/pre&gt;</span>

&lt;pre class="<span class="alert-danger">pre-scrollable</span>"&gt;
テキストが長くなる場合は、スクロールできるようにしています。
これだと表示がダラダラ長くなることもありません。

...
&lt;/pre&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>複数行のコードを表示するために<code>&lt;pre&gt;</code>タグを使用</li>
								<li><code>pre</code>内で<code>&lt;</code>、<code>&gt;</code>、<code>&amp;</code>を使うときは、それぞれ<code>&amp;lt;</code>、<code>&amp;gt;</code>、<code>&amp;amp;</code>と記述してエスケープ処理をする</li>
								<li><code>pre.pre-scrollable</code>にすると、表示の高さの最大が350pxになり、縦方向のスクロールバーが表示される</li>
							</ul>
							<p>【変更】</p>
							<ul>
								<li>3.1.0～：テキストが入りきらない場合は折り返さずに横方向のスクロールバーが表示される（ブラウザによる）（<code>white-space: pre-wrap;</code>の指定がなくなった）</li>
							</ul>
						</div>

						<h2 id="variable">変数（Variables） <small></small></h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<var>y</var> = <var>m</var><var>x</var> + <var>b</var>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
<span class="alert-danger">&lt;var&gt;</span>y<span class="alert-danger">&lt;/var&gt;</span> = &lt;var&gt;m&lt;/var&gt;&lt;var&gt;x&lt;/var&gt; + &lt;var&gt;b&lt;/var&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>変数を示すために<code>&lt;var&gt;</code>タグを使用（基本的に斜体で表示）</li>
							</ul>
							<p>【注意】</p>
							<ul>
								<li>ブラウザによっては123やabcなど英数字のみ適用</li>
							</ul>
						</div>

						<h2 id="sample">サンプル出力（Sample output） <small></small></h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<samp>This text is meant to be treated as sample output from a computer program.</samp>
<br>&nbsp;
								<p class="content">※標準の段落文（参考）</p>
								<p>This text is meant to be treated as sample output from a computer program.</p>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
<span class="alert-danger">&lt;samp&gt;</span>This text is meant to be treated as sample output from a computer program.<span class="alert-danger">&lt;/samp&gt;</span>
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>ブロックでプログラムの出力例を示すために<code>&lt;samp&gt;</code>タグを使用（基本的に等幅フォントで表示）</li>
							</ul>
							<p>【注意】</p>
							<ul>
								<li>ブラウザによっては123やabcなど英数字のみ適用</li>
							</ul>
						</div>

						<div class="page-header">
							<h1 id="tables">テーブル（Tables）</h1>
						</div>
						<h2 id="basic-table">基本のテーブル（Basic example）</h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>見出し</th>
											<th>見出し</th>
											<th>見出し</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
										</tr>
										<tr>
											<td>2</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
										</tr>
										<tr>
											<td>3</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th>#</th>
											<th>見出し</th>
											<th>見出し</th>
											<th>見出し</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;table class="<span class="alert-danger">table</span>"&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;#&lt;/th&gt;
      &lt;th&gt;見出し&lt;/th&gt;
      &lt;th&gt;見出し&lt;/th&gt;
      &lt;th&gt;見出し&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;1&lt;/td&gt;
      &lt;td&gt;テーブルセル&lt;/td&gt;
      &lt;td&gt;テーブルセル&lt;/td&gt;
      &lt;td&gt;テーブルセル&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;2&lt;/td&gt;
      &lt;td&gt;テーブルセル&lt;/td&gt;
      &lt;td&gt;テーブルセル&lt;/td&gt;
      &lt;td&gt;テーブルセル&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;3&lt;/td&gt;
      &lt;td&gt;テーブルセル&lt;/td&gt;
      &lt;td&gt;テーブルセル&lt;/td&gt;
      &lt;td&gt;テーブルセル&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
  &lt;tfoot&gt;
    &lt;tr&gt;
      &lt;th&gt;#&lt;/th&gt;
      &lt;th&gt;見出し&lt;/th&gt;
      &lt;th&gt;見出し&lt;/th&gt;
      &lt;th&gt;見出し&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/tfoot&gt;
&lt;/table&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>table.table</code> > [<code>thead</code> > <code>tr</code> > <code>th</code>]（見出し） + [<code>tbody</code> > <code>tr</code> > <code>td</code>]（コンテンツ）（ + [<code>tfoot</code> > <code>tr</code> > <code>th</code>]（見出し））<br>※<code>table</code>に<code>.table</code>を入れる</li>
							</ul>
						</div>

						<h2 id="striped">交互に行の色が変わるテーブル（Striped rows）</h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>#</th>
											<th>見出し</th>
											<th>見出し</th>
											<th>見出し</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
										</tr>
										<tr>
											<td>2</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
										</tr>
										<tr>
											<td>3</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th>#</th>
											<th>見出し</th>
											<th>見出し</th>
											<th>見出し</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;table class="table <span class="alert-danger">table-striped</span>"&gt;
　...
&lt;/table&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>table.table</code>に<code>.table-striped</code>を追加</li>
							</ul>
							<p>【注意】</p>
							<ul>
								<li><code>tbody</code> > <code>tr</code>内で有効</li>
								<li>Internet Explorer8では非対応</li>
							</ul>
						</div>

						<h2 id="bordered">縦線が入ったテーブル（Bordered table）</h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>#</th>
											<th>見出し</th>
											<th>見出し</th>
											<th>見出し</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
										</tr>
										<tr>
											<td>2</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
										</tr>
										<tr>
											<td>3</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th>#</th>
											<th>見出し</th>
											<th>見出し</th>
											<th>見出し</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;table class="table <span class="alert-danger">table-bordered</span>"&gt;
　...
&lt;/table&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>table.table</code>に<code>.table-bordered</code>を追加</li>
							</ul>
						</div>

						<h2 id="hover">マウスオーバーで行の背景色がホバー表示するテーブル（Hover rows）</h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>見出し</th>
											<th>見出し</th>
											<th>見出し</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
										</tr>
										<tr>
											<td>2</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
										</tr>
										<tr>
											<td>3</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th>#</th>
											<th>見出し</th>
											<th>見出し</th>
											<th>見出し</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;table class="table <span class="alert-danger">table-hover</span>"&gt;
　...
&lt;/table&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>table.table</code>に<code>.table-hover</code>を追加</li>
							</ul>
							<p>【注意】</p>
							<ul>
								<li><code>tbody</code> > <code>tr</code>内で有効</li>
							</ul>
						</div>

						<h2 id="condensed">行間が狭いテーブル（Condensed table）</h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<table class="table table-condensed">
									<thead>
										<tr>
											<th>#</th>
											<th>見出し</th>
											<th>見出し</th>
											<th>見出し</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
										</tr>
										<tr>
											<td>2</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
										</tr>
										<tr>
											<td>3</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
											<td>テーブルセル</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th>#</th>
											<th>見出し</th>
											<th>見出し</th>
											<th>見出し</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;table class="table <span class="alert-danger">table-condensed</span>"&gt;
　...
&lt;/table&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>table.table</code>に<code>.table-condensed</code>を追加</li>
							</ul>
						</div>

						<h2 id="contextual">行/セルの背景色（Contextual classes） <small>一部変更</small></h2>
						<h4>設定例</h4>
						<p>行の場合</p>
<pre class="prettyprint">
&lt;tr class="<span class="alert-danger">xxx</span>"&gt;
  &lt;td&gt;...&lt;/td&gt;
&lt;/tr&gt;
</pre>
						<p>セルの場合</p>
<pre class="prettyprint">
&lt;tr&gt;
  &lt;td class="<span class="alert-danger">xxx</span>"&gt;...&lt;/td&gt;
&lt;/tr&gt;
</pre>
						<h4>背景色の種類 <small>一部クラス変更</small></h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-bordered">
										<tr class="active"><td>Active：<code>.active</code></td></tr>
										<tr class="success"><td>Success：<code>.success</code></td></tr>
										<tr class="info"><td>Info：<code>.info</code></td></tr>
										<tr class="warning"><td>Warning：<code>.warning</code></td></tr>
										<tr class="danger"><td>Danger：<code>.danger</code></td></tr>
										<tr><td>※標準（参考）</td></tr>
									</table>
								</div>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>行全体（<code>tr</code>）、セル（<code>th</code>、<code>td</code>）に<code>.xxx</code>（上記の「背景色の種類」から選択）を入れる</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li>Danger：<code>.error</code>⇒<code>.danger</code></li>
								<li>Active：<code>.active</code>が新設</li>
								<li>Info：<code>.info</code>は一旦廃止⇒3.1.0で復活</li>
								<li>行全体（<code>tr</code>）だけでなく、セル（<code>th</code>、<code>td</code>）でも設定可能に</li>
							</ul>
						</div>

						<h2 id="responsive-table">レスポンシブテーブル（Responsive tables） <small>新設（3RC2）</small></h2>
						<p>モバイルサイズなどで画面からはみ出した場合は横スライドできる。</p>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>#</th>
												<th>見出し</th>
												<th>見出し</th>
												<th>見出し</th>
												<th>見出し</th>
												<th>見出し</th>
												<th>見出し</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>テーブルセル</td>
												<td>テーブルセル</td>
												<td>テーブルセル</td>
												<td>テーブルセル</td>
												<td>テーブルセル</td>
												<td>テーブルセル</td>
											</tr>
											<tr>
												<td>2</td>
												<td>テーブルセル</td>
												<td>テーブルセル</td>
												<td>テーブルセル</td>
												<td>テーブルセル</td>
												<td>テーブルセル</td>
												<td>テーブルセル</td>
											</tr>
											<tr>
												<td>3</td>
												<td>テーブルセル</td>
												<td>テーブルセル</td>
												<td>テーブルセル</td>
												<td>テーブルセル</td>
												<td>テーブルセル</td>
												<td>テーブルセル</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
<span class="alert-danger">&lt;div class="table-responsive"&gt;</span>
  &lt;table class="table"&gt;
  　...
  &lt;/table&gt;
<span class="alert-danger">&lt;/div&gt;</span>
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>div.table-responsive</code> > <code>table.table</code></li>
							</ul>
						</div>

						<div class="page-header">
							<h1 id="forms">フォーム（Forms）</h1>
						</div>
						<p class="lead">コントロールの前後にテキストやボタンをつける等の拡張フォームは<a href="#input-groups">インプットグループ</a>に移動</p>
						<h2 id="basic-form">基本のフォーム（Basic example） <small>設定変更</small></h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<form>
									<fieldset>
										<legend>フォームの名前</legend>
										<div class="form-group">
											<label for="Email">Eメール</label>
											<input type="email" class="form-control" id="Email" placeholder="Eメール">
										</div>
										<div class="form-group">
											<label for="Password">パスワード</label>
											<input type="password" class="form-control" id="Password" placeholder="パスワード">
										</div>
										<div class="form-group">
											<label for="File">ファイル</label>
											<input type="file" id="File">
											<p class="help-block">ファイルを選択してください</p>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox"> 記憶する
											</label>
										</div>
										<button type="submit" class="btn btn-default">サインイン</button>
									</fieldset>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Bootstrap2.xの設定例 <small><span class="alert-success">緑背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;form&gt;
  &lt;fieldset&gt;
    &lt;legend&gt;フォームの名前&lt;/legend&gt;
    &lt;!-- ラベルとコントロールの表示 --&gt;
    &lt;label for="Email"&gt;Eメール&lt;/label&gt;
    &lt;input type="email" id="Email" placeholder="Eメール"&gt;
    &lt;label for="Password"&gt;パスワード&lt;/label&gt;
    &lt;input type="text" id="Password" placeholder="パスワード"&gt;
    &lt;!-- ファイル選択の表示 --&gt;
    &lt;label for="File"&gt;ファイル&lt;/label&gt;
    &lt;input type="file" id="File"&gt;
    &lt;p class="help-block"&gt;ファイルを選択してください&lt;/p&gt;
    &lt;!-- チェックボックスの表示 --&gt;
    <span class="alert-success">&lt;label class="checkbox"&gt;</span>
      &lt;input type="checkbox"&gt; 記憶する
    &lt;/label&gt;
    &lt;!-- 登録ボタンの表示 --&gt;
    &lt;button type="submit" class="<span class="alert-success">btn</span>"&gt;サインイン&lt;/button&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;
</pre>
							</div>
							<div class="col-sm-6">
								<h4>Bootstrap3.xの設定例 <small><span class="alert-danger">赤背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;form&gt;
  &lt;fieldset&gt;
    &lt;legend&gt;フォームの名前&lt;/legend&gt;
    &lt;!-- ラベルとコントロールの表示 --&gt;
    <span class="alert-danger">&lt;div class="form-group"&gt;</span>
      &lt;label for="Email"&gt;Eメール&lt;/label&gt;
      &lt;input type="email" <span class="alert-danger">class="form-control"</span> id="Email" placeholder="Eメール"&gt;
    <span class="alert-danger">&lt;/div&gt;</span>
    <span class="alert-danger">&lt;div class="form-group"&gt;</span>
      &lt;label for="Password"&gt;パスワード&lt;/label&gt;
      &lt;input type="password" <span class="alert-danger">class="form-control"</span> id="Password" placeholder="パスワード"&gt;
    <span class="alert-danger">&lt;/div&gt;</span>
    &lt;!-- ファイル選択の表示 --&gt;
    <span class="alert-danger">&lt;div class="form-group"&gt;</span>
      &lt;label for="File"&gt;ファイル&lt;/label&gt;
      &lt;input type="file" id="File"&gt;
      &lt;p class="help-block"&gt;ファイルを選択してください&lt;/p&gt;
    <span class="alert-danger">&lt;/div&gt;</span>
    &lt;!-- チェックボックスの表示 --&gt;
    <span class="alert-danger">&lt;div class="checkbox"&gt;</span>
      <span class="alert-danger">&lt;label&gt;</span>
        &lt;input type="checkbox"&gt; 記憶する
      &lt;/label&gt;
    <span class="alert-danger">&lt;/div&gt;</span>
    &lt;!-- 登録ボタンの表示 --&gt;
    &lt;button type="submit" class="<span class="alert-danger">btn btn-default</span>"&gt;サインイン&lt;/button&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;
</pre>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>form</code> > <code>fieldset</code> > [<code>legend</code> + [<code>div.form-group</code> > [<code>label[for="ID名"]</code>（ラベル） + <code>input.form-control[id="ID名"]</code>（コントロール）]] + <code>.btn</code>（ボタン）]<br>
								※<code>.form-control</code>のコントロールの幅は<code>width:100%</code>になる</li>
								<li><code>label[for="ID名"]</code> + <code>input.form-control[id="ID名"]</code>（<code>textarea.form-control[id="ID名"]</code>、<code>select.form-control[id="ID名"]</code>）でラベルとコントロールを関連付ける</li>
							</ul>
							<p>【注意】</p>
							<ul>
								<li><a href="#input-groups" class="alert-link">インプットグループ</a>と混在させることは不可</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li><code>input</code>(<code>[type="file"]</code>を除く）、<code>textarea</code>、 <code>select</code>に<code>.form-control</code>を指定（3RC1の途中）<br>
								※<code>.form-control</code>のコントロールの幅は<code>width:100%</code>に指定されるため、<code>input</code>、<code>textarea</code>、 <code>select</code>に<code>.col-xx-*</code>等のカラム幅を指定しても不能に（グリッド表記による幅の変更は可能）</li>
								<li>ラベル（見出し）とコントロール部分は<code>div.form-group</code>（コントロールがチェックボックスの場合は<code>div.checkbox</code>、ラジオボタンの場合は<code>div.radio</code>）で囲む（3RC2）</li>
							</ul>
						</div>
						<div class="panel panel-default">
							<div class="panel-body">
								<p class="content">●<code>.form-control</code>あり</p>
								<input type="text" class="form-control" placeholder="インプット(input)">
								<select class="form-control">
									<option>セレクト(select)</option>
								</select>
								<textarea class="form-control">テキストエリア(textarea)</textarea>
								<br>
								<p class="content">●<code>.form-control</code>なし</p>
								<input type="text" placeholder="インプット(input)"><br>
								<select>
									<option>セレクト(select)</option>
								</select><br>
								<textarea>テキストエリア(textarea)</textarea>
							</div>
						</div>

						<h2 id="inline-form">横並びフォーム（Inline form） <small>設定変更</small></h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<form class="form-inline">
									<div class="form-group">
										<label class="sr-only" for="Email">Eメール</label>
										<input type="email" class="form-control" id="Email" placeholder="Eメール">
									</div>
									<div class="form-group">
										<label class="sr-only" for="Password">パスワード</label>
										<input type="password" class="form-control" id="Password" placeholder="パスワード">
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox"> 記憶する
										</label>
									</div>
									<button type="submit" class="btn btn-default">サインイン</button>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Bootstrap2.xの設定例 <small><span class="alert-success">緑背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;form class="form-inline"&gt;
  &lt;input type="email" <span class="alert-success">class="input-small"</span> placeholder="Eメール"&gt;
  &lt;input type="password" <span class="alert-success">class="input-small"</span> placeholder="パスワード"&gt;
  &lt;label <span class="alert-success">class="checkbox"</span>&gt;
    &lt;input type="checkbox"&gt; 記憶する
  &lt;/label&gt;
  &lt;button type="submit" class="<span class="alert-success">btn</span>"&gt;サインイン&lt;/button&gt;
&lt;/form&gt;
</pre>
							</div>
							<div class="col-sm-6">
								<h4>Bootstrap3.xの設定例 <small><span class="alert-danger">赤背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;form class="form-inline"&gt;
  <span class="alert-danger">&lt;div class="form-group"&gt;</span>
    <span class="alert-danger">&lt;label class="sr-only" for="Email"&gt;Eメール&lt;/label&gt;</span>
    &lt;input type="email" <span class="alert-danger">class="form-control"</span> <span class="alert-danger">id="Email"</span> placeholder="Eメール"&gt;
  <span class="alert-danger">&lt;/div&gt;</span>
  <span class="alert-danger">&lt;div class="form-group"&gt;</span>
    <span class="alert-danger">&lt;label class="sr-only" for="Password"&gt;パスワード&lt;/label&gt;</span>
    &lt;input type="password" <span class="alert-danger">class="form-control"</span> <span class="alert-danger">id="Password"</span> placeholder="パスワード"&gt;
  <span class="alert-danger">&lt;/div&gt;</span>
  <span class="alert-danger">&lt;div class="checkbox"&gt;</span>
    &lt;label&gt;
      &lt;input type="checkbox"&gt; 記憶する
    &lt;/label&gt;
  <span class="alert-danger">&lt;/div&gt;</span>
  &lt;button type="submit" class="<span class="alert-danger">btn btn-default</span>"&gt;サインイン&lt;/button&gt;
&lt;/form&gt;
</pre>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>form.form-inline</code> > [<code>div.form-group</code> > [<code>label.sr-only[for="ID名"]</code>（ラベル） + <code>input.form-control[id="ID名"]</code>（コントロール）]] + <code>.btn</code>（ボタン）<br>
								※<code>.form-control</code>のコントロールの幅は自動で調節される</li>
								<li>ユーザー補助用に必ず<code>label</code>でラベルをつけ、非表示にするため<code>.sr-only</code>を指定</li>
								<li><code>label.sr-only[for="ID名"]</code> > <code>input.form-control[id="ID名"]</code>（<code>textarea.form-control[id="ID名"]</code>、<code>select.form-control[id="ID名"]</code>）でラベルとコントロールを関連付ける</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li>表示領域の幅768px以上で適用（3RC2）</li>
								<li>必ず<code>label</code>でラベルをつけ、非表示にするため<code>.sr-only</code>を指定（3RC2）</li>
								<li><code>input</code>(<code>[type="file"]</code>を除く）、<code>textarea</code>、 <code>select</code>に<code>.form-control</code>を指定（3RC1の途中）<br>
								※<code>.form-control</code>のコントロールの幅は自動で調節される（3RC2）</li>
							</ul>
						</div>

						<h2 id="horizontal-form">水平フォーム（Horizontal form） <small>設定変更</small></h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<form class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-2 control-label" for="Email">Eメール</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="Email" placeholder="Eメール">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="Password">パスワード</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" id="Password" placeholder="パスワード">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<div class="checkbox">
												<label>
													<input type="checkbox"> 記憶する
												</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-default">サインイン</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Bootstrap2.xの設定例 <small><span class="alert-success">緑背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;form class="form-horizontal"&gt;
  &lt;div class="<span class="alert-success">control-group</span>"&gt;
    &lt;label class="control-label" for="Email"&gt;Eメール&lt;/label&gt;
    &lt;div class="<span class="alert-success">controls</span>"&gt;
      &lt;input type="email" id="Email" placeholder="Eメール"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="<span class="alert-success">control-group</span>"&gt;
    &lt;label class="control-label" for="Password"&gt;パスワード&lt;/label&gt;
    &lt;div class="<span class="alert-success">controls</span>"&gt;
      &lt;input type="password" id="Password" placeholder="パスワード"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="<span class="alert-success">control-group</span>"&gt;
    &lt;div class="<span class="alert-success">controls</span>"&gt;
      &lt;label <span class="alert-success">class="checkbox"</span>&gt;
        &lt;input type="checkbox"&gt; 記憶する
      &lt;/label&gt;
      &lt;button type="submit" class="<span class="alert-success">btn</span>"&gt;サインイン&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;
</pre>
							</div>
							<div class="col-sm-6">
								<h4>Bootstrap3.xの設定例 <small><span class="alert-danger">赤背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;form class="form-horizontal"&gt;
  &lt;div class="<span class="alert-danger">form-group</span>"&gt;
    &lt;label class="<span class="alert-danger">col-sm-2</span> control-label" for="Email"&gt;Eメール&lt;/label&gt;
    &lt;div class="<span class="alert-danger">col-sm-10</span>"&gt;
      &lt;input type="email" <span class="alert-danger">class="form-control"</span> id="Email" placeholder="Eメール"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="<span class="alert-danger">form-group</span>"&gt;
    &lt;label class="<span class="alert-danger">col-sm-2</span> control-label" for="Password"&gt;パスワード&lt;/label&gt;
    &lt;div class="<span class="alert-danger">col-sm-10</span>"&gt;
      &lt;input type="password" <span class="alert-danger">class="form-control"</span> id="Password" placeholder="パスワード"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="<span class="alert-danger">form-group</span>"&gt;
    <span class="alert-danger">&lt;div class="col-sm-offset-2 col-sm-10"&gt;</span>
      &lt;div class="<span class="alert-danger">checkbox</span>"&gt;
        &lt;label&gt;
          &lt;input type="checkbox"&gt; 記憶する
        &lt;/label&gt;
      <span class="alert-danger">&lt;/div&gt;</span>
    <span class="alert-danger">&lt;/div&gt;</span>
  <span class="alert-danger">&lt;/div&gt;</span>
  <span class="alert-danger">&lt;div class="form-group"&gt;</span>
    <span class="alert-danger">&lt;div class="col-sm-offset-2 col-sm-10"&gt;</span>
      &lt;button type="submit" class="<span class="alert-danger">btn btn-default</span>"&gt;サインイン&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;
</pre>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>form.form-horizontal</code> > [<code>div.form-group</code> > [<code>label.control-label.col-sm-**[for="ID名"]</code>（ラベル） + [<code>div.col-sm-*</code> > <code>input.form-control[id="ID名"]</code>]（コントロール）] + [<code>div.form-group</code> > <code>div.col-sm-offset-**.col-sm-*</code> > <code>.btn</code>]（ボタン）]<br>※ラベルとコントロールは<code>.col-sm-*</code>（グリッド表記）で設定</li>
								<li><code>label.control-label[for="ID名"]</code> + <code>input.form-control[id="ID名"]</code>（<code>textarea.form-control[id="ID名"]</code>、<code>select.form-control[id="ID名"]</code>）でラベルとコントロールを関連付ける</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li>表示領域の幅768px以上で適用</li>
								<li><code>.control-group</code>⇒<code>.form-group</code></li>
								<li><code>.controls</code>⇒<code>.col-sm-*</code>（コントロールの幅は<code>.col-sm-offset-*</code>（空白時）や<code>.col-sm-*</code>を指定）</li>
								<li><code>input</code>(<code>[type="file"]</code>を除く）、<code>textarea</code>、 <code>select</code>に<code>.form-control</code>を指定（3RC1の途中）</li>
							</ul>
						</div>

						<h2 id="control">フォームコントロール（Supported controls）</h2>
						<h3>入力コントロール（Inputs）</h3>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<input type="text" class="form-control" placeholder="入力テキスト">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Bootstrap2.xの設定例 <small><span class="alert-success">緑背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;input type="text" placeholder="入力テキスト"&gt;
</pre>
							</div>
							<div class="col-sm-6">
								<h4>Bootstrap3.xの設定例 <small><span class="alert-danger">赤背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;input type="text" <span class="alert-danger">class="form-control"</span> placeholder="入力テキスト"&gt;
</pre>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>最も一般的なフォームコントロールでテキストベースでの入力をするために<code>&lt;input&gt;</code>タグを使用</li>
								<li>すべてのHTML5のtype（<code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, <code>color</code>）に対応</li>
							</ul>
							<p>【注意】</p>
							<ul>
								<li><code>input</code>の前後にテキストやボタンをを追加するには<a href="#input-groups" class="alert-link">インプットグループ</a>を使用</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li><code>.form-control</code>を指定（3RC1の途中）<br>
								※<code>.form-control</code>のコントロールの幅は<code>width:100%</code>に指定されるため、<code>.col-xx-*</code>等のカラム幅を指定しても不能に（グリッド表記による幅の変更は可能）</li>
							</ul>
						</div>
						<h3>テキストエリア（Textarea）</h3>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<textarea class="form-control" rows="3"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Bootstrap2.xの設定例 <small><span class="alert-success">緑背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;textarea rows="3"&gt;&lt;/textarea&gt;
</pre>
							</div>
							<div class="col-sm-6">
								<h4>Bootstrap3.xの設定例 <small><span class="alert-danger">赤背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;textarea <span class="alert-danger">class="form-control"</span> rows="3"&gt;&lt;/textarea&gt;
</pre>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>複数行のテキストを入力をするために<code>&lt;textarea&gt;</code>タグを使用</li>
								<li>高さは<code>rows</code>属性の数値で調整（横幅の<code>cols</code>属性は無効）</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li><code>.form-control</code>を指定（3RC1の途中）<br>
								※<code>.form-control</code>のコントロールの幅は<code>width:100%</code>に指定されるため、<code>.col-xx-*</code>等のカラム幅を指定しても不能に（グリッド表記による幅の変更は可能）</li>
							</ul>
						</div>
						<h3>既定のチェックボックス&ラジオボタン（Default checkboxes and radios） <small>設定変更</small></h3>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										オプション1
									</label>
								</div>

								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
										オプション1
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
										オプション2
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Bootstrap2.xの設定例 <small><span class="alert-success">緑背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;!-- チェックボックス --&gt;
&lt;label <span class="alert-success">class="checkbox"</span>&gt;
  &lt;input type="checkbox" value=""&gt;
  オプション1
&lt;/label&gt;

&lt;!-- ラジオボタン --&gt;
&lt;label <span class="alert-success">class="radio"</span>&gt;
  &lt;input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked&gt;
  オプション1
&lt;/label&gt;
&lt;label <span class="alert-success">class="radio"</span>&gt;
  &lt;input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"&gt;
  オプション2
&lt;/label&gt;
</pre>
							</div>
							<div class="col-sm-6">
								<h4>Bootstrap3.xの設定例 <small><span class="alert-danger">赤背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;!-- チェックボックス --&gt;
<span class="alert-danger">&lt;div class="checkbox"&gt;</span>
  &lt;label&gt;
    &lt;input type="checkbox" value=""&gt;
    オプション1
  &lt;/label&gt;
<span class="alert-danger">&lt;/div&gt;</span>

&lt;!-- ラジオボタン --&gt;
<span class="alert-danger">&lt;div class="radio"&gt;</span>
  &lt;label&gt;
    &lt;input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked&gt;
    オプション1
  &lt;/label&gt;
<span class="alert-danger">&lt;/div&gt;</span>
<span class="alert-danger">&lt;div class="radio"&gt;</span>
  &lt;label&gt;
    &lt;input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"&gt;
    オプション2
  &lt;/label&gt;
<span class="alert-danger">&lt;/div&gt;</span>
</pre>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>チェックボックス：<code>div.checkbox</code> > <code>label</code> > <code>input[type="checkbox"]</code></li>
								<li>ラジオボタン：<code>div.radio</code> > <code>label</code> > <code>input[type="radio"]</code></li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li>チェックボックス：<code>label.checkbox</code>⇒<code>div.checkbox</code> > <code>label</code>（3RC2）</li>
								<li>ラジオボタン：<code>label.radio</code>⇒<code>div.radio</code> > <code>label</code>（3RC2）</li>
							</ul>
						</div>
						<h3>横並びチェックボックス（Inline checkboxes） <small>設定変更</small></h3>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<label class="checkbox-inline">
									<input type="checkbox" value="option1"> 1
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" value="option2"> 2
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" value="option3"> 3
								</label>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Bootstrap2.xの設定例 <small><span class="alert-success">緑背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;label class="<span class="alert-success">checkbox inline</span>"&gt;
  &lt;input type="checkbox" id="inlineCheckbox1" value="option1"&gt; 1
&lt;/label&gt;
&lt;label class="<span class="alert-success">checkbox inline</span>"&gt;
  &lt;input type="checkbox" id="inlineCheckbox2" value="option2"&gt; 2
&lt;/label&gt;
&lt;label class="<span class="alert-success">checkbox inline</span>"&gt;
  &lt;input type="checkbox" id="inlineCheckbox3" value="option3"&gt; 3
&lt;/label&gt;
</pre>
							</div>
							<div class="col-sm-6">
								<h4>Bootstrap3.xの設定例 <small><span class="alert-danger">赤背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;label class="<span class="alert-danger">checkbox-inline</span>"&gt;
  &lt;input type="checkbox" id="inlineCheckbox1" value="option1"&gt; 1
&lt;/label&gt;
&lt;label class="<span class="alert-danger">checkbox-inline</span>"&gt;
  &lt;input type="checkbox" id="inlineCheckbox2" value="option2"&gt; 2
&lt;/label&gt;
&lt;label class="<span class="alert-danger">checkbox-inline</span>"&gt;
  &lt;input type="checkbox" id="inlineCheckbox3" value="option3"&gt; 3
&lt;/label&gt;
</pre>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>label.checkbox-inline</code> > <code>input[type="checkbox"]</code></li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li><code>.checkbox.inline</code>⇒<code>.checkbox-inline</code></li>
							</ul>
						</div>
						<h3>横並びラジオボタン（Inline radios） <small>設定変更</small></h3>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<label class="radio-inline">
									<input type="radio" name="inlineRadios" value="option1" checked> 1
								</label>
								<label class="radio-inline">
									<input type="radio" name="inlineRadios" value="option2"> 2
								</label>
								<label class="radio-inline">
									<input type="radio" name="inlineRadios" value="option3"> 3
								</label>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Bootstrap2.xの設定例 <small><span class="alert-success">緑背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;label class="<span class="alert-success">radio inline</span>"&gt;
  &lt;input type="radio" name="inlineRadios" id="inlineRadios1" value="option1" checked&gt; 1
&lt;/label&gt;
&lt;label class="<span class="alert-success">radio inline</span>"&gt;
  &lt;input type="radio" name="inlineRadios" id="inlineRadios2" value="option2"&gt; 2
&lt;/label&gt;
&lt;label class="<span class="alert-success">radio inline</span>"&gt;
  &lt;input type="radio" name="inlineRadios" id="inlineRadios3" value="option3"&gt; 3
&lt;/label&gt;
</pre>
							</div>
							<div class="col-sm-6">
								<h4>Bootstrap3.xの設定例 <small><span class="alert-danger">赤背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;label class="<span class="alert-danger">radio-inline</span>"&gt;
  &lt;input type="radio" name="inlineRadios" id="inlineRadios1" value="option1" checked&gt; 1
&lt;/label&gt;
&lt;label class="<span class="alert-danger">radio-inline</span>"&gt;
  &lt;input type="radio" name="inlineRadios" id="inlineRadios2" value="option2"&gt; 2
&lt;/label&gt;
&lt;label class="<span class="alert-danger">radio-inline</span>"&gt;
  &lt;input type="radio" name="inlineRadios" id="inlineRadios3" value="option3"&gt; 3
&lt;/label&gt;
</pre>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>label.radio-inline</code> > <code>input[type="radio"]</code></li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li><code>.radio.inline</code>⇒<code>.radio-inline</code></li>
							</ul>
						</div>
						<h3>選択コントロール（Selects）</h3>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<select class="form-control">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
								<br>
								<p class="content">●複数選択</p>
								<select multiple class="form-control">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Bootstrap2.xの設定例 <small><span class="alert-success">緑背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;select&gt;
  &lt;option&gt;1&lt;/option&gt;
  &lt;option&gt;2&lt;/option&gt;
  &lt;option&gt;3&lt;/option&gt;
  &lt;option&gt;4&lt;/option&gt;
  &lt;option&gt;5&lt;/option&gt;
&lt;/select&gt;

&lt;!-- 複数選択 --&gt;
&lt;select multiple&gt;
  &lt;option&gt;1&lt;/option&gt;
  &lt;option&gt;2&lt;/option&gt;
  &lt;option&gt;3&lt;/option&gt;
  &lt;option&gt;4&lt;/option&gt;
  &lt;option&gt;5&lt;/option&gt;
&lt;/select&gt;
</pre>
							</div>
							<div class="col-sm-6">
								<h4>Bootstrap3.xの設定例 <small><span class="alert-danger">赤背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;select <span class="alert-danger">class="form-control"</span>&gt;
  &lt;option&gt;1&lt;/option&gt;
  &lt;option&gt;2&lt;/option&gt;
  &lt;option&gt;3&lt;/option&gt;
  &lt;option&gt;4&lt;/option&gt;
  &lt;option&gt;5&lt;/option&gt;
&lt;/select&gt;

&lt;!-- 複数選択 --&gt;
&lt;select multiple <span class="alert-danger">class="form-control"</span>&gt;
  &lt;option&gt;1&lt;/option&gt;
  &lt;option&gt;2&lt;/option&gt;
  &lt;option&gt;3&lt;/option&gt;
  &lt;option&gt;4&lt;/option&gt;
  &lt;option&gt;5&lt;/option&gt;
&lt;/select&gt;
</pre>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>選択で入力をするために<code>&lt;select&gt;</code>タグを使用</li>
								<li><code>multiple</code>属性（複数選択）にも対応</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li><code>.form-control</code>を指定（3RC1の途中）<br>
								※<code>.form-control</code>のコントロールの幅は<code>width:100%</code>に指定されるため、<code>.col-xx-*</code>等のカラム幅を指定しても不能に（グリッド表記による幅の変更は可能）</li>
							</ul>
						</div>

						<h2 id="static">静的テキスト（コントロールの代用テキスト）（Static control） <small>新設（3RC1の途中）</small></h2>
						<p>水平フォーム内でコントロールの代わりにプレーンテキストを配置する。</p>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<form class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-2 control-label">Eメール</label>
										<div class="col-sm-10">
											<p class="form-control-static">email@example.com</p>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">パスワード</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" placeholder="パスワード">
										</div>
									</div>
								</form>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;form class="form-horizontal"&gt;
  &lt;div class="form-group"&gt;
    &lt;label class="col-sm-2 control-label"&gt;Eメール&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
      <span class="alert-danger">&lt;p class="form-control-static"&gt;email@example.com&lt;/p&gt;</span>
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="form-group"&gt;
    &lt;label class="col-sm-2 control-label" for="Password"&gt;パスワード&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
      &lt;input type="password" class="form-control" id="Password" placeholder="パスワード"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>.form-control</code>の代わりに<code>p.form-control-static</code>を入れる（必ず<code>&lt;p&gt;</code>タグを使う）</li>
							</ul>
						</div>

						<h2 id="disabled-input">コントロールの無効化（Disabled inputs）</h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<form>
									<fieldset>
										<div class="form-group">
											<label>インプット</label>
											<input type="text" class="form-control" placeholder="入力できません" disabled>
										</div>
										<div class="form-group">
											<label>セレクトメニュー</label>
											<select class="form-control" disabled>
												<option>選択できません</option>
											</select>
										</div>
										<div class="checkbox" disabled>
											<label>
												<input type="checkbox disabled"> チェックできません
											</label>
										</div>
										<button type="submit" class="btn btn-primary">登録</button>
									</fieldset>
								</form>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;form&gt;
  &lt;fieldset&gt;
    &lt;div class="form-group"&gt;
      &lt;label&gt;インプット&lt;/label&gt;
      &lt;input type="text" class="form-control" placeholder="入力できません" <span class="alert-danger">disabled</span>&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
      &lt;label&gt;セレクトメニュー&lt;/label&gt;
      &lt;select class="form-control" <span class="alert-danger">disabled</span>&gt;
        &lt;option&gt;選択できません&lt;/option&gt;
      &lt;/select&gt;
    &lt;/div&gt;
    &lt;div class="checkbox <span class="alert-danger">disabled</span>"&gt;
      &lt;label&gt;
        &lt;input type="checkbox" <span class="alert-danger">disabled</span>&gt; チェックできません
      &lt;/label&gt;
    &lt;/div&gt;
    &lt;button type="submit" class="btn btn-primary"&gt;登録&lt;/button&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>無効化したいコントロール（<code>input</code>、<code>select</code>、<code>textarea</code>）に<code>disabled</code>属性を入れる</li>
								<li>チェックボックスの場合<code>div.checkbox</code>にも<code>.disabled</code>を追加</li>
								<li>ラジオボタンの場合<code>div.radio</code>にも<code>.disabled</code>を追加</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li>編集不能コントロール（Uneditable inputs）：<code>.uneditable-input</code>は廃止</li>
							</ul>
						</div>
						<h3>フォーム全体の無効化（Disabled fieldsets） <small>新設</small></h3>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<form>
									<fieldset disabled>
										<div class="form-group">
											<label>インプット</label>
											<input type="text" class="form-control" placeholder="入力できません">
										</div>
										<div class="form-group">
											<label>セレクトメニュー</label>
											<select class="form-control">
												<option>選択できません</option>
											</select>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox"> チェックできません
											</label>
										</div>
										<button type="submit" class="btn btn-primary">登録</button>
									</fieldset>
								</form>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;form&gt;
  &lt;fieldset <span class="alert-danger">disabled</span>&gt;
    &lt;div class="form-group"&gt;
      &lt;label &gt;インプット&lt;/label&gt;
      &lt;input type="text" class="form-control" placeholder="入力できません"&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
      &lt;label&gt;セレクトメニュー&lt;/label&gt;
      &lt;select class="form-control"&gt;
        &lt;option&gt;選択できません&lt;/option&gt;
      &lt;/select&gt;
    &lt;/div&gt;
    &lt;div class="checkbox"&gt;
      &lt;label&gt;
        &lt;input type="checkbox"&gt; チェックできません
      &lt;/label&gt;
    &lt;/div&gt;
    &lt;button type="submit" class="btn btn-primary"&gt;登録&lt;/button&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>fieldset</code>に<code>disabled</code>属性を入れる</li>
							</ul>
							<p>【注意】</p>
							<ul>
								<li>Internet Explorer9以下では<code>fieldset[disabled]</code>はサポートされていないが、これらのブラウザでは<code>fieldset</code>を無効にするカスタムJavaScriptを使用して対応している</li>
								<li><code>a.btn btn-xxx</code>ボタンのリンク機能を不能にするため<code>pointer-events: none</code>のスタイルを使用しているが、このCSSのプロパティはまだ標準化されていないためInternet Explorer11やOpera18以下ではサポートされていないが、これらのブラウザではこのようなリンクを無効にするカスタムJavaScriptを使用して対応している</li>
							</ul>
						</div>

						<h2 id="readonly">読み取り専用コントロール（Readonly inputs） <small>新設（3.2.0）</small></h2>
						<p>ユーザー入力を防止し、無効などの入力のスタイルを設定（フォーカスは可能）</p>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<input class="form-control" type="text" placeholder="ここは読み取り専用です" readonly>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;input class="form-control" type="text" placeholder="ここは読み取り専用です" <span class="alert-danger">readonly</span>&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>input</code>に<code>readonly</code>属性を入れる</li>
							</ul>
						</div>

						<h2 id="control-color">ラベル、コントロールの外枠、ヘルプテキストの色指定（Validation states） <small>設定変更</small></h2>
						<div class="row">
							<div class="col-sm-6">
								<h4>Bootstrap2.xの設定例 <small><span class="alert-success">緑背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;div class="<span class="alert-success">control-group xxx</span>"&gt;
  &lt;label class="control-label" for="inputColor"&gt;見出し&lt;/label&gt;
  &lt;input type="text" id="inputColor"&gt;
  &lt;span class="help-block"&gt;ヘルプテキスト&lt;/span&gt;
&lt;/div&gt;
</pre>
							</div>
							<div class="col-sm-6">
								<h4>Bootstrap3.xの設定例 <small><span class="alert-danger">赤背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;div class="<span class="alert-danger">form-group has-xxx</span>"&gt;
  &lt;label class="control-label" for="inputColor"&gt;見出し&lt;/label&gt;
  &lt;input type="text" <span class="alert-danger">class="form-control"</span> id="inputColor"&gt;
  &lt;span class="help-block"&gt;ヘルプテキスト&lt;/span&gt;
&lt;/div&gt;
</pre>
							</div>
						</div>
						<h4>色の種類 <small>クラス変更</small></h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p class="content">●Success：<code>.has-success</code></p>
								<div class="form-group has-success">
									<label class="control-label">見出し</label>
									<input type="text" class="form-control">
									<span class="help-block">ヘルプテキスト</span>
								</div>
								<p class="content">●Warning：<code>.has-warning</code></p>
								<div class="form-group has-warning">
									<label class="control-label">見出し</label>
									<input type="text" class="form-control">
									<span class="help-block">ヘルプテキスト</span>
								</div>
								<p class="content">●Error：<code>.has-error</code></p>
								<div class="form-group has-error">
									<label class="control-label">見出し</label>
									<input type="text" class="form-control">
									<span class="help-block">ヘルプテキスト</span>
								</div>
								<ul class="list-unstyled">
								</ul>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>.form-group</code>に<code>.has-xxx</code>を追加（<code>.has-xxx</code>は上記の「色の種類」から選択）</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li><code>.control-group.xxx</code>⇒<code>.form-group.has-xxx</code></li>
								<li>Success：<code>.success</code>⇒<code>.has-success</code></li>
								<li>Warning：<code>.warning</code>⇒<code>.has-warning</code></li>
								<li>Error：<code>.error</code>⇒<code>.has-error</code></li>
								<li>Info：<code>.info</code>は廃止</li>
							</ul>
						</div>
						<h3>アイコンつきコントロール（With optional icons） <small>新設（3.1.0）</small></h3>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="form-group has-success has-feedback">
								  <label class="control-label" for="inputSuccess2">完了</label>
								  <input type="text" class="form-control" id="inputSuccess2">
								  <span class="glyphicon glyphicon-ok form-control-feedback"></span>
								</div>
								<div class="form-group has-warning has-feedback">
									<label class="control-label" for="inputWarning2">注意</label>
									<input type="text" class="form-control" id="inputWarning2">
									<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
								</div>
								<div class="form-group has-error has-feedback">
									<label class="control-label" for="inputError2">エラー</label>
									<input type="text" class="form-control" id="inputError2">
									<span class="glyphicon glyphicon-remove form-control-feedback"></span>
								</div>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;div class="form-group has-success <span class="alert-danger">has-feedback</span>"&gt;
  &lt;label class="control-label" for="inputSuccess2"&gt;完了&lt;/label&gt;
  &lt;input type="text" class="form-control" id="inputSuccess2"&gt;
  &lt;span class="glyphicon glyphicon-ok <span class="alert-danger">form-control-feedback</span>"&gt;&lt;/span&gt;
&lt;/div&gt;

&lt;div class="form-group has-warning <span class="alert-danger">has-feedback</span>"&gt;
  &lt;label class="control-label" for="inputWarning2"&gt;注意&lt;/label&gt;
  &lt;input type="text" class="form-control" id="inputWarning2"&gt;
  &lt;span class="glyphicon glyphicon-warning-sign <span class="alert-danger">form-control-feedback</span>"&gt;&lt;/span&gt;
&lt;/div&gt;

&lt;div class="form-group has-error<span class="alert-danger"> has-feedback</span>"&gt;
  &lt;label class="control-label" for="inputError2"&gt;エラー&lt;/label&gt;
  &lt;input type="text" class="form-control" id="inputError2"&gt;
  &lt;span class="glyphicon glyphicon-remove <span class="alert-danger">form-control-feedback</span>"&gt;&lt;/span&gt;
&lt;/div&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>.form-group.has-feedback</code> > <code>span.glyphicon.glyphicon-xxx.form-control-feedback</code></li>
								<li>横並びフォームや水平フォームでも使用可能</li>
							</ul>
						</div>

						<h2 id="control-size">コントロールのサイズ（Control sizing）</h2>
						<h3>コントロールの大きさ（Height sizing） <small>新設</small></h3>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;input type="text" class="form-control <span class="alert-danger">input-xx</span>"&gt;
&lt;select class="form-control <span class="alert-danger">input-xx</span>"&gt;...&lt;/select&gt;
</pre>
						<h4>サイズの種類</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p class="content">●大きめ：<code>.input-lg</code></p>
								<input type="text" class="form-control input-lg">
								<select class="form-control input-lg">...</select></li>
								<br>
								<p class="content">●小さめ：<code>.input-sm</code></p>
								<input type="text" class="form-control input-sm">
								<select class="form-control input-sm">...</select>
								<br>
								<p class="content">※標準（参考）</p>
								<input type="text" class="form-control">
								<select class="form-control">...</select></li>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>.form-control</code>に<code>.input-xx</code>（上記の「サイズの種類」から選択）を追加</li>
							</ul>
							<p>【変更】</p>
							<ul>
								<li>大きめ：<code>.input-large</code>⇒<code>.input-lg</code>（3RC1の途中）</li>
								<li>小さめ：<code>.input-small</code>⇒<code>.input-sm</code>（3RC1の途中）</li>
							</ul>
						</div>
						<h3>水平フォームのサイズ（Horizontal form group sizes） <small>新設（3.2.0）</small></h3>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;form class="form-horizontal" role="form"&gt;
  &lt;div class="form-group <span class="alert-danger">form-group-xx</span>"&gt;
    &lt;label class="col-sm-2 control-label" for="formGroupInput"&gt;ラベル&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
      &lt;input class="form-control" type="text" id="formGroupInput" placeholder="入力コントロール"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;
</pre>
						<h4>サイズの種類</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<form class="form-horizontal" role="form">
									<p class="content">●大きめ：<code>.form-group-lg</code></p>
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="formGroupInputLarge">ラベル</label>
										<div class="col-sm-10">
											<input class="form-control" type="text" id="formGroupInputLarge" placeholder="入力コントロール">
										</div>
									</div>
									<br>
									<p class="content">●小さめ：<code>.form-group-sm</code></p>
									<div class="form-group form-group-sm">
										<label class="col-sm-2 control-label" for="formGroupInputSmall">ラベル</label>
										<div class="col-sm-10">
											<input class="form-control" type="text" id="formGroupInputSmall" placeholder="入力コントロール">
										</div>
									</div>
									<p class="content">※標準（参考）</p>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="formGroupInput">ラベル</label>
										<div class="col-sm-10">
											<input class="form-control" type="text" id="formGroupInput" placeholder="入力コントロール">
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>.form-group</code>に<code>.form-group-xx</code>（上記の「サイズの種類」から選択）を追加</li>
							</ul>
						</div>
						<h3>コントロールの幅サイズ（Column sizing） <small>設定変更</small></h3>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<div class="col-xs-2">
										<input type="text" class="form-control" placeholder=".col-xs-2">
									</div>
									<div class="col-xs-3">
										<input type="text" class="form-control" placeholder=".col-xs-3">
									</div>
									<div class="col-xs-4">
										<input type="text" class="form-control" placeholder=".col-xs-4">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Bootstrap2.xの設定例 <small><span class="alert-success">緑背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
&lt;input type="text" class="<span class="alert-success">input-small</span>"&gt;
&lt;input type="text" class="<span class="alert-success">input-medium</span>"&gt;
&lt;input type="text" class="<span class="alert-success">input-large</span>"&gt;
</pre>
							</div>
							<div class="col-sm-6">
								<h4>Bootstrap3.0の設定例 <small><span class="alert-danger">赤背景</span>が変更箇所</small></h4>
<pre class="prettyprint">
<span class="alert-danger">&lt;div class="row"&gt;</span>
  <span class="alert-danger">&lt;div class="col-xs-2"&gt;</span>
    &lt;input type="text" class="<span class="alert-danger">form-control</span>"&gt;
  <span class="alert-danger">&lt;/div&gt;</span>
  <span class="alert-danger">&lt;div class="col-xs-3"&gt;</span>
    &lt;input type="text" class="<span class="alert-danger">form-control</span>"&gt;
  <span class="alert-danger">&lt;/div&gt;</span>
  <span class="alert-danger">&lt;div class="col-xs-4"&gt;</span>
    &lt;input type="text" class="<span class="alert-danger">form-control</span>"&gt;
  <span class="alert-danger">&lt;/div&gt;</span>
<span class="alert-danger">&lt;/div&gt;</span>
</pre>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>div.row</code> > <code>div.col-xx-*</code> > <code>.form-control</code></li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li>極短：<code>.input-mini</code><br>短め：<code>.input-small</code><br>中ぐらい：<code>.input-medium</code><br>長め：<code>.input-large</code><br>極大：<code>.input-xlarge</code><br>超極大：<code>.input-xxlarge</code><br>はすべて廃止</li>
							</ul>
						</div>

						<h2 id="helptext">ヘルプテキスト（Help text）</h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
<input type="text" class="form-control">
<span class="help-block">ここにヘルプテキストが入ります</span>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;input type="text" class="form-control"&gt;
&lt;span <span class="alert-danger">class="help-block"</span>&gt;ここにヘルプテキストが入ります&lt;/span&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>ヘルプテキストを<code>span.help-block</code>で囲む</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li>横並びヘルプテキスト：<code>.help-inline</code>は廃止</li>
							</ul>
						</div>

						<h2 id="abolished-form">その他Bootstrap3.0で廃止になったもの（フォーム関連）</h2>
						<div class="alert alert-info">
							<ul>
								<li>検索用フォーム（Search form）：<code>form.form-search</code>、<code>input.search-query</code></li>
								<li>ブロックタイプのコントロール（Block level inputs）：<code>input.input-block-level</code></li>
								<li>複数グリッドコントロール（Multiple grid inputs）：<code>.controls</code>/<code>.controls-row</code></li>
								<li>フォームボタン用スタイル（Form actions）：<code>.form-actions</code></li>
								<li>無効インプット（Invalid inputs）：<code>required</code>属性の指定</li>
							</ul>
						</div>

						<div class="page-header">
							<h1 id="buttons">ボタン（Buttons）</h1>
						</div>
						<h2 id="basic-button">ボタンの設定（Options）</h2>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;!-- ボタンタグで設定 --&gt;
&lt;button type="button" class="<span class="alert-danger">btn btn-xxx</span>"&gt;ボタン名&lt;/button&gt;

&lt;!-- アンカーリンクで設定 --&gt;
&lt;a href="#" class="<span class="alert-danger">btn btn-xxx</span>"&gt;ボタン名&lt;/a&gt;

&lt;!-- インプットボタンで設定 --&gt;
&lt;input type="button" class="<span class="alert-danger">btn btn-xxx</span>" value="ボタン名"&gt;
</pre>
						<h4>色の種類</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p><button type="button" class="btn btn-default">Default</button>　<code>.btn-default</span></code></p>
								<p><button type="button" class="btn btn-primary">Primary</button>　<code>.btn-primary</code></p>
								<p><button type="button" class="btn btn-info">Info</button>　<code>.btn-info</code></p>
								<p><button type="button" class="btn btn-success">Success</button>　<code>.btn-success</code></p>
								<p><button type="button" class="btn btn-warning">Warning</button>　<code>.btn-warning</code></p>
								<p><button type="button" class="btn btn-danger">Danger</button>　<code>.btn-danger</code></p>
								<p><button type="button" class="btn btn-link">Link</button>　<code>.btn-link</code></p>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>button</code>、<code>a</code>、<code>input[type="button"]</code>、<code>input[type="reset"]</code>、<code>input[type="submit"]</code>のいずれかに<code>.btn.btn-xxx</code>（<code>.btn-xxx</code>は上記の「色の種類」から選択）を追加（<code>.btn</code>単独での使用は不可）</li>
							</ul>
							<p>【注意】</p>
							<ul>
								<li>ボタン名が英数字のみの場合、<code>&lt;input&gt;</code>タグで設定するとブラウザがFirefoxではボタンの高さが狭くなるバグがあるので、<code>&lt;button&gt;</code>タグでの設定が推奨されている（ボタン名に日本語が入るとバグは発生しない）⇒Firefox30で修正された模様</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li>Default：<code>.btn</code>⇒<code>.btn.btn-default</code>（初期3RC1では濃いグレー色だったが白色に戻った）</li>
								<li>Inverse：<code>.btn-inverse</code>は廃止</li>
							</ul>
						</div>

						<h2 id="button-size">ボタンのサイズ（Sizes）</h2>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;button type="button" class="btn btn-default <span class="alert-danger">btn-xx</span>"&gt;...&lt;/button&gt;
</pre>
						<h4>サイズの種類 <small>クラス変更</small></h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p><button type="button" class="btn btn-default btn-lg">大きめ</button>　<code>.btn-lg</code></p>
								<p><button type="button" class="btn btn-default btn-sm">小さめ</button>　<code>.btn-sm</code></p>
								<p><button type="button" class="btn btn-default btn-xs">極小</button>　<code>.btn-xs</code></p>
								<p><button type="button" class="btn btn-default">※標準</button>（参考）</p>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>.btn.btn-xxx</code>に<code>.btn-xx</code>（上記の「サイズの種類」から選択）を追加</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li>大きめ：<code>.btn-large</code>⇒<code>.btn-lg</code>（3RC1の途中）</li>
								<li>小さめ：<code>.btn-small</code>⇒<code>.btn-sm</code>（3RC1の途中）</li>
								<li>極小：<code>.btn-mini</code>⇒<code>.btn-xs</code>（初期3RC1では廃止⇒途中で復活）</li>
							</ul>
						</div>

						<h2 id="block-button">ブロックタイプのボタン（Block level buttons）</h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<button type="button" class="btn btn-default btn-block">ブロックタイプのボタン</button>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;button type="button" class="btn btn-default <span class="alert-danger">btn-block</span>"&gt;ブロックタイプのボタン&lt;/button&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>.btn.btn-xxx</code>に<code>.btn-block</code>を追加</li>
							</ul>
						</div>

						<h2 id="active-button">ボタンのアクティブ化（Active state）</h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<button type="button" class="btn btn-default active">アクティブボタン</button>
								<button type="button" class="btn btn-default">非アクティブボタン</button>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;button type="button" class="btn btn-default <span class="alert-danger">active</span>"&gt;アクティブボタン&lt;/button&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>.btn.btn-xxx</code>に<code>.active</code>を追加</li>
							</ul>
						</div>

						<h2 id="disabled-button">ボタンの無効化（Disabled state）</h2>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<button type="button" class="btn btn-default" disabled>無効ボタン</button>
								<button type="button" class="btn btn-default">有効ボタン</button>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;button type="button" class="btn btn-default" <span class="alert-danger">disabled</span>&gt;無効ボタン&lt;/button&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>ボタンの設定に<code>disabled</code>属性を入れる</li>
							</ul>
						</div>

						<div class="page-header">
							<h1 id="images">イメージ（Images）</h1>
						</div>
						<h2 id="image-corner">イメージ枠（Image shapes）</h2>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;img src="..." alt="..." class="<span class="alert-danger">img-xxx</span>"&gt;
</pre>
						<h4>イメージ枠の種類 <small>一部クラス変更</small></h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p><img src="image/140image.png" alt="140サイズ" class="img-rounded">　角丸：<code>.img-rounded</code></p>
								<p><img src="image/140image.png" alt="140サイズ" class="img-circle">　丸：<code>.img-circle</code></p>
								<p><img src="image/140image.png" alt="140サイズ" class="img-thumbnail">　枠付：<code>.img-thumbnail</code></p>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>img</code>に<code>.img-xxx</code>（上記の「イメージ枠の種類」から選択）を入れる</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li>枠付：<code>.img-polaroid</code>⇒<code>.img-thumbnail</code></li>
							</ul>
						</div>

						<h2 id="responsive-image">レスポンシブイメージ（Responsive images） <small>新設</small></h2>
						<p>常に<code>max-width:100%;</code>、<code>height:auto;</code>で表示</p>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;img src="..." alt="..." class="<span class="alert-danger">img-responsive</span>"&gt;
</pre>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p class="content">●<code>.img-responsive</code>あり<div><img src="image/image_r.jpg" alt="木片" class="img-responsive"></div></p>
<br>
								<p class="content">●<code>.img-responsive</code>なし（原寸大）<span class="text-muted">※画面からはみ出すので横スライドで表示するようにしています</span><div style="overflow-x:scroll"><img src="image/image_r.jpg" alt="木片"></div></p>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>img</code>に<code>.img-responsive</code>を入れる</li>
							</ul>
						</div>

						<div class="page-header">
							<h1 id="helper-classes">ヘルパークラス（Helper classes）</h1>
						</div>
						<h2 id="color">文字の色（Contextual colors）</h2>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;p class="<span class="alert-danger">text-xxx</span>"&gt;...&lt;/p&gt;
</pre>
						<h4>色の種類 <small>一部変更</small></h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p><span class="text-muted">Muted</span>：<code>.text-muted</code></p>
								<p><span class="text-primary">Primary</span>：<code>.text-primary</code></p>
								<p><span class="text-info">Info</span>：<code>.text-info</code></p>
								<p><span class="text-success">Success</span>：<code>.text-success</code></p>
								<p><span class="text-warning">Warning</span>：<code>.text-warning</code></p>
								<p><span class="text-danger">Danger</span>：<code>.text-danger</code></p>
								<p>※標準の文字の色（参考）</p>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>テキスト要素に<code>.text-xxx</code>（上記の「色の種類」から選択）を入れる</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li>Muted</span>：<code>.muted</code>⇒<code>.text-muted</code></li>
								<li>Danger</span>：<code>.text-error</code>⇒<code>.text-danger</code></li>
								<li>Primary</span>：<code>.text-primary</code>が新設</li>
							</ul>
						</div>

						<h2 id="background">文字の背景色（Contextual backgrounds） <small>新設（3.1.0）</small></h2>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;p class="<span class="alert-danger">bg-xxx</span>"&gt;...&lt;/p&gt;
</pre>
						<h4>背景色の種類</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p><span class="bg-primary">Primary</span>：<code>.bg-primary</code></p>
								<p><span class="bg-info">Info</span>：<code>.bg-info</code></p>
								<p><span class="bg-success">Success</span>：<code>.bg-success</code></p>
								<p><span class="bg-warning">Warning</span>：<code>.bg-warning</code></p>
								<p><span class="bg-danger">Danger</span>：<code>.bg-danger</code></p>
							</div>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>テキスト要素に<code>.bg-xxx</code>（上記の「背景色の種類」から選択）を入れる</li>
							</ul>
						</div>

						<h2 id="closed-icon">閉じるアイコン（Close icon）</h2>
						<p><a href="components.php#alerts">アラート</a>や<a href="javascript.php#modals">モーダル</a>で使用する。</p>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">閉じる</span></button>
							</div>
						</div>
						<h4>設定例 <small>変更（3.2.0）</small></h4>
<pre class="prettyprint">
&lt;button type="button" class="<span class="alert-danger">close</span>" <span class="alert-danger">data-dismiss="alert"</span>&gt;&lt;span <span class="alert-danger">aria-hidden="true"</span>&gt;&amp;times;&lt;/span&gt;&lt;span class="sr-only"&gt;閉じる&lt;/span&gt;&lt;/button&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>button.close[data-dismiss="xxx"]</code> > [<code>&lt;span aria-hidden="true"&gt;&amp;times;&lt;/span&gt;</code> + <code>&lt;span class="sr-only"&gt;閉じる&lt;/span&gt;</code>（ユーザー補助用）]<br>※<code>data-dismiss="xxx"</code>にはアラートの時は<code>alert</code>、モーダルの時は<code>modal</code>を入れる</li>
								<li>ボタン名の<code>&times;</code>は、<code>&amp;times;</code>と記述してエスケープ処理をする</li>
							</ul>
							<p>【変更】</p>
							<ul>
								<li>3.2.0～：<code>aria-hidden="true"</code>は<code>button</code>内より独立した<code>span</code>に移動し、<code>&lt;span class="sr-only"&gt;閉じる&lt;/span&gt;</code>を追加（従来のものでも使用可能）</li>
							</ul>
						</div>

						<h2 id="caret">キャレット（Carets）</h2>
						<p><a href="http://bootstrap.s1.adexd.net/components1.php#dropdowns">ドロップダウン</a>や<a href="http://bootstrap.s1.adexd.net/components1.php#btn-dropdowns">ボダンドロップダウン</a>等で使用する。</p>
						<h4>見本</h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<span class="caret"></span>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;span class="<span class="alert-danger">caret</span>"&gt;&lt;/span&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li><code>span.caret</code>（独立した要素として使用）</li>
								<li><a href="http://bootstrap.s1.adexd.net/components1.php#btn-dropup" target="_blank" class="alert-link">ボタンドロップアップ</a>で使用する場合は上向きになる</li>
							</ul>
						</div>

						<h2 id="float">配置（Quick floats/Center content blocks/Clearfix） <small>一部新設（3.0.1）</small></h2>
						<h4>クラスの種類 <small>見やすいよう色を付けています</small></h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p class="content">●ブロックを変えて左寄せ/右寄せ/センタリング</p>
								<div class="container-fluid">
									<div class="row grid">
										<p class="content">要素全体を左寄せ（float:left）：<code>.pull-left</code></p>
										<div class="pull-left column">ここは<br>左寄せ部分</div>
										<div class="clearfix"></div>
										<p class="content">要素全体を右寄せ（float:right）：<code>.pull-right</code></p>
										<div class="pull-right column">ここは<br>右寄せ部分</div>
										<div class="clearfix"></div>
										<p class="content">ブロックのセンタリング：<code>.center-block</code> <span class="text-muted">新設（3.0.1）</span></p>
										<div class="center-block column" style="width:6.5em">ここは<br>センタリング</div>
										<p>要素のfloatをクリア（クリアフィックス）：<code>.clearfix</code></p>
									</div>
								</div>
								<br>
								<p class="content">●同じブロック内で左寄せ/右寄せ/センタリング</p>
								<div class="container-fluid">
									<div class="row grid">
										<div class="pull-left column">ここは<br>左寄せ部分</div>
										<div class="pull-right column">ここは<br>右寄せ部分</div>
										<div class="center-block column" style="width:6.5em">ここは<br>センタリング</div>
									</div>
								</div>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;!-- ブロックを変えて左寄せ/右寄せ/センタリング --&gt;
&lt;!-- 要素全体を左寄せ --&gt;
&lt;div class="<span class="alert-danger">pull-left</span>"&gt;ここは&lt;br&gt;左寄せ部分&lt;/div&gt;
&lt;!-- 要素のfloatをクリア（クリアフィックス） --&gt;
<span class="alert-danger">&lt;div class="clearfix"&gt;&lt;/div&gt;</span>
&lt;!-- 要素全体を右寄せ --&gt;
&lt;div class="<span class="alert-danger">pull-right</span>"&gt;ここは&lt;br&gt;右寄せ部分&lt;/div&gt;
&lt;!-- 要素のfloatをクリア（クリアフィックス） --&gt;
<span class="alert-danger">&lt;div class="clearfix"&gt;&lt;/div&gt;</span>
&lt;!-- ブロックのセンタリング --&gt;
&lt;div class="<span class="alert-danger">center-block</span>" <span class="alert-danger">style="width:6em"</span>&gt;ここは&lt;br&gt;センタリング&lt;/div&gt;

&lt;!-- 同じブロックで左寄せ/右寄せ/センタリング --&gt;
&lt;!-- 要素全体を左寄せ --&gt;
&lt;div class="<span class="alert-danger">pull-left</span>"&gt;ここは&lt;br&gt;左寄せ部分&lt;/div&gt;
&lt;!-- 要素全体を右寄せ --&gt;
&lt;div class="<span class="alert-danger">pull-right</span>"&gt;ここは&lt;br&gt;右寄せ部分&lt;/div&gt;
&lt;!-- ブロックのセンタリング --&gt;
&lt;div class="<span class="alert-danger">center-block</span>" <span class="alert-danger">style="width:6em"</span>&gt;ここは&lt;br&gt;センタリング&lt;/div&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>要素に<code>.xxx</code>（上記の「クラスの種類」から選択）を入れる</li>
							</ul>
							<p>【注意】</p>
							<ul>
								<li><code>.center-block</code>を指定するときは、同時にブロック部分の幅widthを指定</li>
								<li>テキストの配置を設定する場合は<a href="#alignment" class="alert-link">文字の配置</a>を参照</li>
							</ul>
						</div>

						<h2 id="show-hidden">コンテンツの表示と非表示（Showing and hiding content/Screen reader content） <small>一部変更</small></h2>
						<h4>クラスの種類 <small>見やすいよう領域に枠を付けています</small></h4>
						<div class="panel panel-default">
							<div class="panel-body">
								<p class="content">●表示：<code>.show</code></p>
								<div class="container-fluid">
									<div class="row grid">
										<div class="show">表示されます</div>
									</div>
								</div>
								<br>
								<p class="content">●非表示（領域自体も非表示）：<code>.hidden</code> <span class="text-muted">新設</span></p>
								<div class="container-fluid">
									<div class="row grid">
										<div class="hidden">表示されません</div>
									</div>
								</div>
								<br>
								<p class="content">●非表示（領域自体は表示）：<code>.invisible</code></p>
								<div class="container-fluid">
									<div class="row grid">
										<div class="invisible">表示されません</div>
									</div>
								</div>
								<br>
								<p class="content">●スクリーンリーダーを除いて非表示：<code>.sr-only</code> <span class="text-muted">新設（3RC2）</span></p>
								<div class="container-fluid">
									<div class="row grid">
										<div class="sr-only">表示されません</div>
									</div>
								</div>
								<br>
								<p class="content">●スクリーンリーダーを除いて非表示（フォーカス時には表示）：<code>.sr-only.sr-only-focusable</code> <span class="text-muted">新設（3.2.0）</span></p>
								<div class="container-fluid">
									<div class="row grid">
										<div class="sr-only sr-only-focusable">表示されません</div>
									</div>
								</div>
							</div>
						</div>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;!-- 表示 --&gt;
&lt;div class="<span class="alert-danger">show</span>"&gt;表示されます&lt;/div&gt;

&lt;!-- 非表示（領域自体も非表示） --&gt;
&lt;div class="<span class="alert-danger">hidden</span>"&gt;表示されません&lt;/div&gt;

&lt;!-- 非表示（領域自体は表示） --&gt;
&lt;div class="<span class="alert-danger">invisible</span>"&gt;表示されません&lt;/div&gt;

&lt;!-- スクリーンリーダーを除いて非表示 --&gt;
&lt;div class="<span class="alert-danger">sr-only</span>"&gt;表示されません&lt;/div&gt;

&lt;!-- スクリーンリーダーを除いて非表示（フォーカス時には表示） --&gt;
&lt;div class="sr-only <span class="alert-danger">sr-only-focusable</span>"&gt;表示されません&lt;/div&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>表示/非表示したい要素に<code>.xxx</code>（上記の「クラスの種類」から選択）を入れる</li>
							</ul>
							<p>【注意】</p>
							<ul>
								<li><code>.hide</code>でも非表示になるが、3.0.1より非推奨となった（<code>.hidden</code>または<code>.sr-only</code>を使用）</li>
							</ul>
						</div>

						<h2 id="image-replace">画像置換（Image replacement） <small>クラス変更</small></h2>
						<p>テキストで実装した見出しなどを画像に置換するのに役立つ。</p>
						<h4>設定例</h4>
<pre class="prettyprint">
&lt;h1 class="<span class="alert-danger">text-hide</span>"&gt;カスタム見出し&lt;/h1&gt;
</pre>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>見出しの部分に<code>.text-hide</code>を入れる</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
								<li><code>.hide-text</code>⇒<code>.text-hide</code></li>
							</ul>
						</div>

						<div class="page-header">
							<h1 id="responsive-utilities">レスポンシブユーティリティ（Responsive utilities）</h1>
						</div>
						<h2 id="available">閲覧時の表示/非表示（Available classes） <small>クラス変更</small></h2>
						<h4>クラスの種類 <small>一部変更（3.2.0）<code>*</code>の種類は下記の表示可能クラスの種類から選択</small></h4>
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr>
									<th></th>
									<th>モバイルサイズ</th>
									<th>タブレットサイズ</th>
									<th>デスクトップサイズ</th>
									<th>大画面サイズ<br><span class="text-muted">新設（3RC2）</span></th>
								</tr>
								<tr>
									<td>表示領域の幅</td>
									<td class="text-center">768px未満</td>
									<td class="text-center">768px～991px</td>
									<td class="text-center">992px～1199px</td>
									<td class="text-center">1200px以上</td>
								</tr>
								<tr>
									<td><code>.visible-xs-*</code><br><span class="text-muted">新設（3.2.0）</span></td>
									<td class="success text-center"><span class="text-success">[表示]</span></td>
									<td class="active text-center"><span class="text-muted">[非表示]</span></td>
									<td class="active text-center"><span class="text-muted">[非表示]</span></td>
									<td class="active text-center"><span class="text-muted">[非表示]</span></td>
								</tr>
								<tr>
									<td><code>.visible-sm-*</code><br><span class="text-muted">新設（3.2.0）</span></td>
									<td class="active text-center"><span class="text-muted">[非表示]</span></td>
									<td class="success text-center"><span class="text-success">[表示]</span></td>
									<td class="active text-center"><span class="text-muted">[非表示]</span></td>
									<td class="active text-center"><span class="text-muted">[非表示]</span></td>
								</tr>
								<tr>
									<td><code>.visible-md-*</code><br><span class="text-muted">新設（3.2.0）</span></td>
									<td class="active text-center"><span class="text-muted">[非表示]</span></td>
									<td class="active text-center"><span class="text-muted">[非表示]</span></td>
									<td class="success text-center"><span class="text-success">[表示]</span></td>
									<td class="active text-center"><span class="text-muted">[非表示]</span></td>
								</tr>
								<tr>
									<td><code>.visible-lg-*</code><br><span class="text-muted">新設（3.2.0）</span></td>
									<td class="active text-center"><span class="text-muted">[非表示]</span></td>
									<td class="active text-center"><span class="text-muted">[非表示]</span></td>
									<td class="active text-center"><span class="text-muted">[非表示]</span></td>
									<td class="success text-center"><span class="text-success">[表示]</span></td>
								</tr>
								<tr>
									<td><code>.hidden-xs</code></td>
									<td class="active text-center"><span class="text-muted">[非表示]</span></td>
									<td class="success text-center"><span class="text-success">[表示]</span></td>
									<td class="success text-center"><span class="text-success">[表示]</span></td>
									<td class="success text-center"><span class="text-success">[表示]</span></td>
								</tr>
								<tr>
									<td><code>.hidden-sm</code></td>
									<td class="success text-center"><span class="text-success">[表示]</span></td>
									<td class="active text-center"><span class="text-muted">[非表示]</span></td>
									<td class="success text-center"><span class="text-success">[表示]</span></td>
									<td class="success text-center"><span class="text-success">[表示]</span></td>
								</tr>
								<tr>
									<td><code>.hidden-md</code></td>
									<td class="success text-center"><span class="text-success">[表示]</span></td>
									<td class="success text-center"><span class="text-success">[表示]</span></td>
									<td class="active text-center"><span class="text-muted">[非表示]</span></td>
									<td class="success text-center"><span class="text-success">[表示]</span></td>
								</tr>
								<tr>
									<td><code>.hidden-lg</code></td>
									<td class="success text-center"><span class="text-success">[表示]</span></td>
									<td class="success text-center"><span class="text-success">[表示]</span></td>
									<td class="success text-center"><span class="text-success">[表示]</span></td>
									<td class="active text-center"><span class="text-muted">[非表示]</span></td>
								</tr>
							</table>
						</div>
						<p class="content">表示可能クラスの種類 <span class="text-muted"><code>xx</code>の種類は<code>xs</code>,<code>sm</code>,<code>md</code>,<code>lg</code></span></p>
						<div class="table-responsive">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>クラスのグループ</th>
										<th>CSS <code>display</code></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><code>.visible-xx-block</code></td>
										<td><code>display: block;</code>（ブロック（縦積み）表示）</td>
									</tr>
									<tr>
										<td><code>.visible-xx-inline</code></td>
										<td><code>display: inline;</code>（インライン（横並び）表示）</td>
									</tr>
									<tr>
										<td><code>.visible-xx-inline-block</code></td>
										<td><code>display: inline-block;</code>（インラインブロック（横並びで幅や高さも持たせる）表示）</td>
									</tr>
								</tbody>
							</table>
						</div>
						<p style="margin-top:-20px;margin-bottom:20px;">※例：モバイルサイズの場合のクラス<code>.visible-xs-block</code>, <code>.visible-xs-inline</code>, <code>.visible-xs-inline-block</code></p>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>表示領域の幅によって表示/非表示を切り替えたい要素に上記のクラスを入れる</li>
							</ul>
							<p>【変更】</p>
							<ul>
								<li>3.2.0～：<code>.visible-xx</code>が<code>.visible-xx-block</code>,<code>.visible-xx-inline</code>,<code>.visible-xx-inline-block</code>に分離</li>
								<li><code>.visible-xs</code>, <code>.visible-sm</code>, <code>.visible-md</code>, <code>.visible-lg</code>は3.2.0より非推奨（<code>table</code>関連の要素に特別に追加する場合を除いて<code>.visible-*-block</code>とほぼ同等）</li>
							</ul>
							<p>【Bootstrap2.xとの変更箇所】</p>
							<ul>
<li><code>.visible-phone</code>⇒<code>.visible-sm</code>（3RC1）</span>⇒<code>.visible-xs</code>（3RC2）⇒<code>.visible-xs-*</code>（3.2.0）</li>
<li><code>.visible-tablet</code>⇒<code>.visible-md</code>（3RC1）⇒<code>.visible-sm</code>（3RC2）⇒<code>.visible-sm-*</code>（3.2.0）</li>
<li><code>.visible-desktop</code>⇒<code>.visible-lg</code>（3RC1）⇒<code>.visible-md</code>/<code>.visible-lg</code>（3RC2）⇒<code>.visible-md-*</code>/<code>.visible-lg-*</code>（3.2.0）</li>
<li><code>.hidden-phone</code>⇒<code>.hidden-sm</code>（3RC1）⇒<code>.hidden-xs</code>（3RC2）</li>
<li><code>.hidden-tablet</code>⇒<code>.hidden-md</code>（3RC1）⇒<code>.hidden-sm</code>（3RC2）</li>
<li><code>.hidden-desktop</code>⇒<code>.hidden-lg</code>（3RC1）⇒<code>.hidden-md</code>/<code>.hidden-lg</code>（3RC2）</li>
							</ul>
						</div>

						<h2 id="print">印刷時の表示/非表示（Print classes） <small>新設</small></h2>
						<h4>クラスの種類 <small>一部変更（3.2.0）</small></h4>
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr>
									<th></th>
									<th>閲覧時</th>
									<th>印刷時</th>
								</tr>
								<tr>
									<td><code>.visible-print-block</code><span class="text-muted">新設（3.2.0）</span><br><code>.visible-print-inline</code><span class="text-muted">新設（3.2.0）</span><br><code>.visible-print-inline-block</code><span class="text-muted">新設（3.2.0）</span></td>
									<td class="active text-center"><span class="text-muted">[非表示]</span></td>
									<td class="success text-center"><span class="text-success">[表示]</span></td>
								</tr>
								<tr>
									<td><code>.hidden-print</code></td>
									<td class="success text-center"><span class="text-success">[表示]</span></td>
									<td class="active text-center"><span class="text-muted">[非表示]</span></td>
								</tr>
							</table>
						</div>
						<div class="alert alert-info">
							<p>【設定】</p>
							<ul>
								<li>印刷時に表示/非表示を切り替えたい要素に上記のクラスを入れる</li>
							</ul>
							<p>【変更】</p>
							<ul>
								<li>3.2.0～：<code>.visible-print</code>が<code>.visible-print-block</code>,<code>.visible-print-inline</code>,<code>.visible-print-inline-block</code>に分離</li>
								<li><code>.visible-print</code>は3.2.0より非推奨（<code>table</code>関連の要素に特別に追加する場合を除いて<code>.visible-print-block</code>とほぼ同等）</li>
							</ul>
						</div>

						<div class="center-block hidden-xs sponsored2">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- bootatrap用728x90 -->
							<ins class="adsbygoogle"
							     style="display:inline-block;width:728px;height:90px"
							     data-ad-client="ca-pub-5922383921992325"
							     data-ad-slot="7256848711"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="footer">
		<div class="container">
			<p class="text-muted credit">&copy; cccabinet. Coordinated by <a href="http://getbootstrap.com/">Bootstrap 3.2.0</a></p>
		</div>
	</div>

	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="style.js"></script>
	<script src="j-sample.js"></script>
	<script src="prettify.js"></script>
	<script>prettyPrint();</script>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	<script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
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
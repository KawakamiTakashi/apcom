<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<?= $this->Html->charset() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $this->fetch('title')?></title>

	<?= $this->Html->meta('icon') ?>

	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('flat-ui.css') ?>

	<!-- 自作CSS -->
	<?= $this->Html->css('/private/css/default.css') ?>
	<?= $this->Html->css('/private/css/flat_overwrite.css') ?>

	<?= $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js') ?>
	<?= $this->Html->script('video.js') ?>
	<?= $this->Html->script('flat-ui.min.js') ?>
	<?= $this->Html->script('application.js') ?>
	<?= $this->Html->script('prettify.js') ?>

	<!-- 自作JS -->
	<?= $this->Html->script('/private/js/index.js') ?>

	<script>
		videojs.options.flash.swf = "flat-ui/js/video-js.swf"
	</script>

	<?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>
	<?= $this->fetch('script') ?>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" id="navbar">
<div class="container-fluid">
	<div class="navbar-header">
		<a class="navbar-brand" href="#">応用情報 ど.com</a>
	</div>
	<div class="navbar-collapse collapse">
		<div class="nav navbar-nav navbar-right">
			<p class="navbar-text">試験まであと<a href="https://ja.wikipedia.org/wiki/9" target="_brank">9</a>日です</p>
			<li class="dropdown navbar-buttton">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
					<img src="icon.jpg" class="dropdown-img">
					ようこそ、<?= $this->fetch('username')?>さん
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">ログアウト</a></li>
				</ul>
			</li>
		</div>
	</div>
</div>
</nav>

<div class="container-fluid all">
<div class="row">
	<!-- サイドカラム -->
	<button class="btn btn-hm fui-list floating" id="list"></button>
	<div class="col-xs-2 floating" id="sidebar">
		<div class="row">
			<button class="btn btn-hm fui-cross" id="cross"></button>
		</div>
		<div class="row">
			<table class="table table-hover">
				<tr class="info"><td><a href="#">トップページ</a></td></tr>
				<?= $this->fetch('sidebar')?>
				<tr class="danger"><td><a href="#">ログアウト</a></td></tr>
			</table>
		</div>
	</div>

	<!-- メインカラム -->
	<div class="col-xs-8 col-xs-offset-2" id="col-main">
		<div class="row">
			<?= $this->fetch('content') ?>
		</div>
	</div>
</div>
</div>
</body>
</html>

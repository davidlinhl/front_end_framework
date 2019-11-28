<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>前端框架汇总</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- SyntaxHighlighter -->
	<script src="https://cdn.bootcss.com/SyntaxHighlighter/3.0.83/scripts/shCore.js"></script>
	<link href="https://cdn.bootcss.com/SyntaxHighlighter/3.0.83/styles/shThemeDefault.css" rel="stylesheet">
	<style>
	/* Custom Styles */
	    ul.nav-tabs{
	        width: 140px;
	        margin-top: 20px;
	        border-radius: 4px;
	        border: 1px solid #ddd;
	        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.067);
	    }
	    ul.nav-tabs li{
	        margin: 0;
	        border-top: 1px solid #ddd;
	    }
	    ul.nav-tabs li:first-child{
	        border-top: none;
	    }
	    ul.nav-tabs li a{
	        margin: 0;
	        padding: 8px 16px;
	        border-radius: 0;
	    }
	    ul.nav-tabs li.active a, ul.nav-tabs li.active a:hover{
	        color: #fff;
	        background: #0088cc;
	        border: 1px solid #0088cc;
	    }
	    ul.nav-tabs li:first-child a{
	        border-radius: 4px 4px 0 0;
	    }
	    ul.nav-tabs li:last-child a{
	        border-radius: 0 0 4px 4px;
	    }
	    ul.nav-tabs.affix{
	        top: 30px; /* Set the top position of pinned element */
	    }
	</style>
</head>
<body οnlοad="prettyPrint()">
<?php
	require_once("../util.php");
	show_head();
?>
	<div class="row" style="margin-left:3%;">
		<div class="col-xs-1" id="myScrollspy" style="padding-right:40px;">
			<?php
				$bookmark_list=array("Bootstrap简介","网格系统","表格","表单","按钮","导航栏","面板");
				show_bookmark($bookmark_list);
			?>
		</div>
		<div class="col-xs-10">

			<div class="container">
				<?php
				show_section_head($bookmark_list,0);



				$code='<!-- 标准的按钮 -->
<button type="button" class="btn btn-default">默认按钮</button>
<!-- 提供额外的视觉效果，标识一组按钮中的原始动作 -->
<button type="button" class="btn btn-primary">原始按钮</button>
<!-- 表示一个成功的或积极的动作 -->
<button type="button" class="btn btn-success">成功按钮</button>
<!-- 信息警告消息的上下文按钮 -->
<button type="button" class="btn btn-info">信息按钮</button>
<!-- 表示应谨慎采取的动作 -->
<button type="button" class="btn btn-warning">警告按钮</button>
<!-- 表示一个危险的或潜在的负面动作 -->
<button type="button" class="btn btn-danger">危险按钮</button>
<!-- 并不强调是一个按钮，看起来像一个链接，但同时保持按钮的行为 -->
<button type="button" class="btn btn-link">链接按钮</button>';
				show_section_head($bookmark_list,1);
				show_code($code);
				?>

			</div>
	</div>


	</div>
	</div>
</body>
</html>

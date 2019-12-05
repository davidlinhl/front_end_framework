<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Frozenui</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="http://i.gtimg.cn/vipstyle/frozenui/2.0.0/css/frozen.css">


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
				$bookmark_list=array("Aui简介","文本样式","导航栏","表单","按钮","导航栏","面板");
				show_bookmark($bookmark_list);
			?>
		</div>
		<div class="col-xs-10">

			<div class="container">
				<?php
				show_section_head($bookmark_list,0);
				?>

				<div class="row">
					<div class="col-sm-3">
						<img src="http://aui.dianm.cc/Public/Image/logo.png" width="80%" style="background:grey;">
					</div>
					<div class="col-sm-9">
						<h4>
							AUI 2.0是一套全新的AUI框架，在1.X基础上进行了重新架构。<br>
							结合实际项目出发，站在开发者和项目的角度，重新定义AUI框架。在2.0中使用了大量弹性响应式布局，采用容器+布局结构+控件的嵌套形式，方便开发者快速布局样式。
							<br>
							<a href="http://aui.dianm.cc/"><strong>AUI 官网链接</strong></a>
						</h4>
					</div>
				</div>

				<?php
				show_section_head($bookmark_list,1);

				$code='
<section class="aui-content-padded">
<h1>标题一 H1</h1>
<h2>标题二 H2</h2>
<h3>标题三 H3</h3>
<h4>标题四 H4</h4>
<h5>标题五 H5</h5>
<h6>标题六 H6</h6>
<p>P标签字体，默认为14px</p>
<div class="aui-content">
内容区域，AUI 2.0色彩及尺寸按照Material Design标准设计
</div>
</section>';
				show_section_head($bookmark_list,1);
				show_code($code,false);
				?>
				<iframe src="http://aui.dianm.cc/aui2.0/html/text_frm.html" height="500" width="700" style="overflow-y: scroll; border: 2px solid #ddd !important;"></iframe>
				<?php
				show_section_head($bookmark_list,2);

				$code='
<header class="aui-bar aui-bar-nav">顶部导航栏</header>
<header class="aui-bar aui-bar-nav" style="padding-top:25px;">
    <a class="aui-pull-left">
        <span class="aui-iconfont aui-icon-left"></span>
    </a>
    <div class="aui-title">fixStatusBar效果</div>
</header>
<header class="aui-bar aui-bar-nav">
    <a class="aui-pull-left aui-btn">
        <span class="aui-iconfont aui-icon-left"></span>
    </a>
    <div class="aui-title">Title</div>
</header>
<header class="aui-bar aui-bar-nav aui-bar-light">
    <a class="aui-pull-left aui-btn">
        <span class="aui-iconfont aui-icon-left"></span>
    </a>
    <div class="aui-title">Title</div>
</header>
<header class="aui-bar aui-bar-nav aui-bar-light">
    <a class="aui-pull-left aui-btn">
        <span class="aui-iconfont aui-icon-left"></span>
    </a>
    <div class="aui-title">Title</div>
    <a class="aui-pull-right aui-btn aui-btn-outlined">
        <span class="aui-iconfont aui-icon-search"></span>
    </a>
</header>
<header class="aui-bar aui-bar-nav">
    <a class="aui-pull-left aui-btn">
        <span class="aui-iconfont aui-icon-left"></span>返回
    </a>
    <div class="aui-title">Title</div>
</header>
<header class="aui-bar aui-bar-nav">
    <a class="aui-pull-left aui-btn aui-btn-outlined">
        <span class="aui-iconfont aui-icon-menu"></span>
    </a>
    <div class="aui-title">Title</div>
    <a class="aui-pull-right aui-btn aui-btn-outlined">
        <span class="aui-iconfont aui-icon-search"></span>
    </a>
</header>
';
				show_section_head($bookmark_list,1);
				show_code($code,false);
				?>
				<iframe src="http://aui.dianm.cc/aui2.0/html/header_frm.html" height="500" width="700" style="overflow-y: scroll; border: 2px solid #ddd !important;"></iframe>

				<?php
				show_section_head($bookmark_list,2);

				$code='
<div class="aui-content-padded">
<p>.aui-progress</p>
<div class="aui-progress aui-progress">
<div class="aui-progress-bar" style="width: 60%;"></div>
</div>
<p>.aui-progress-sm</p>
<div class="aui-progress aui-progress-sm">
<div class="aui-progress-bar" style="width: 60%;"></div>
</div>
<p>.aui-progress-xs</p>
<div class="aui-progress aui-progress-xs">
<div class="aui-progress-bar" style="width: 60%;"></div>
</div>
<p>.aui-progress-xxs</p>
<div class="aui-progress aui-progress-xxs">
<div class="aui-progress-bar" style="width: 60%;"></div>
</div>
</div>';
				show_code($code,false);
				?>
				<iframe src="http://aui.dianm.cc/aui2.0/html/progress_frm.html" height="500" width="700" style="overflow-y: scroll; border: 2px solid #ddd !important;"></iframe>

			</div>

	</div>


	</div>
	</div>
</body>
</html>

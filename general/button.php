<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>前端框架汇总</title>
  <script src="https://cdn.bootcss.com/SyntaxHighlighter/3.0.83/scripts/shCore.js"></script>
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://cdn.bootcss.com/SyntaxHighlighter/3.0.83/styles/shThemeDefault.css" rel="stylesheet">
	<link href="https://cdn.bootcss.com/Buttons/2.0.0/css/buttons.css" rel="stylesheet">
  <link href="https://cdn.bootcss.com/Buttons/2.0.0/css/buttons.min.css" rel="stylesheet">
  <script src="https://cdn.bootcss.com/Buttons/2.0.0/js/buttons.js"></script>
  <script src="https://cdn.bootcss.com/Buttons/2.0.0/js/buttons.min.js"></script>
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- SyntaxHighlighter -->
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
				$bookmark_list=array("Button简介","形状和尺寸","有无边框","3D按钮","光晕效果");
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
						<img src="http://b.zol-img.com.cn/soft/5/976/ceEk1xMoV5qWg.png" width="80%">
					</div>
					<div class="col-sm-9">
						<h5>
							Buttons 是一个高度可定制的、免费并且开源的按钮 CSS 样式库。
							使用 Buttons 时应当考虑可访问性。如果是链接到外部资源或内部页面的链接应当使用 链接 标签。如果是应用程序中的功能按钮，例如：添加到购物车，应当使用 button 标签。如果实在表单中使用，应当使用 input 标签（例如提交按钮）。
						</h5>
					</div>
				</div>

				<?php

				$code=
'<div class="showcase-examples l-center">
  <a href="#" class="button button-tiny">Go</a>
  <a href="#" class="button button-rounded button-tiny">Go</a>
  <a href="#" class="button button-pill button-tiny">Go</a>
  <br/>
  <a href="#" class="button button-primary button-small">Go</a>
  <a href="#" class="button button-primary button-rounded button-small">Go</a>
  <a href="#" class="button button-primary button-pill button-small">Go</a>
  <br/>
  <a href="#" class="button button-action">Go</a>
  <a href="#" class="button button-action button-rounded">Go</a>
  <a href="#" class="button button-action button-pill">Go</a>
  <br/>
  <a href="#" class="button button-highlight button-large">Go</a>
  <a href="#" class="button button-highlight button-rounded button-large">Go</a>
  <a href="#" class="button button-highlight button-pill button-large">Go</a>
  <br/>
  <a href="#" class="button button-caution button-jumbo">Go</a>
  <a href="#" class="button button-caution button-rounded button-jumbo">Go</a>
  <a href="#" class="button button-caution button-pill button-jumbo">Go</a>
  <br/>
  <a href="#" class="button button-royal button-giant">Go</a>
  <a href="#" class="button button-royal button-rounded button-giant">Go</a>
  <a href="#" class="button button-royal button-pill button-giant">Go</a>
    </div>
';
				show_section_head($bookmark_list,1);
				show_code($code);


				$code='
        <div class="showcase-examples l-center">
  <button class="button button-large button-plain button-border button-circle"><i class="fa fa-reply"></i>Go</button>
  <button class="button button-large button-plain button-border button-box"><i class="fa fa-star"></i>Go</button>
  <button class="button button-large button-plain button-border button-square"><i class="fa fa-trash-o"></i>Go</button>
  <button class="button button-large button-plain button-borderless"><i class="fa fa-tag"></i>Go</button>
  </div>';
				show_section_head($bookmark_list,2);
				show_code($code);


				$code=
'  <div class="showcase-examples l-center">
  <button class="button button-3d button-box button-jumbo"><i class="fa fa-thumbs-up"></i></button>
  <a href="#" class="button button-3d button-primary button-rounded">Check out the new site!</a>
  <a href="#" class="button button-3d button-action button-pill">Visit Us!</a>
  <button class="button button-3d button-action button-circle button-jumbo"><i class="fa fa-thumbs-up"></i></button>
  <a href="#" class="button button-3d button-caution"><i class="fa fa-camera"></i> Go</a>
  <a href="#" class="button button-3d button-royal">Say Hi!</a></div>';
				show_section_head($bookmark_list,3);
				show_code($code);

				$code=
'<div class="showcase-examples l-over l-center">
  <a href="#" class="button button-glow button-rounded button-raised button-primary">Go</a>
  <a href="#" class="button button-glow button-border button-rounded button-primary">Go</a>
  <button class="button button-glow button-circle button-action button-jumbo"><i class="fa fa-thumbs-up"></i></button>
  <a href="#" class="button button-glow button-rounded button-highlight">Go</a>
  <a href="#" class="button button-glow button-rounded button-caution">Go</a>
  <a href="#" class="button button-glow button-rounded button-royal">Go</a>
  </div>
';
				show_section_head($bookmark_list,4);
				show_code($code);

				?>

			</div>
	</div>


	</div>
	</div>

	
	<div class="container" style="margin:50px;">
		<p align="center" class="mt-5 mb-3 text-muted">© 2019-2020</p>
	</div>


</body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>前端框架汇总</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
require_once("./util.php");
show_head();
?>

	<!-- 轮播图 -->
	<div class="container">
		<div id="myCarousel" class="carousel slide">
			<!-- 轮播（Carousel）指标 -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<!-- 轮播（Carousel）项目 -->
			<div class="carousel-inner">
				<div class="item active" align="center">
					<a href="https://getbootstrap.com/">
						<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1576157778&di=ad56a4ef7ea35e2480a38f28b225729f&imgtype=jpg&er=1&src=http%3A%2F%2Fimage.uisdc.com%2Fwp-content%2Fuploads%2F2016%2F04%2Ffull-bootstrap-4-illustrator-gui-pack.jpg" alt="Bootstrap">
					</a>
				</div>
				<div class="item" align="center">
					<a href="https://amazeui.clouddeep.cn/">
						<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1575563127459&di=4bc458872565ad71576baad06f2987ad&imgtype=jpg&src=http%3A%2F%2Fimg3.imgtn.bdimg.com%2Fit%2Fu%3D1883631393%2C1515687533%26fm%3D214%26gp%3D0.jpg" alt="Amaze UI">
					</a>
				</div>
				<div class="item" align="center">
					<a href="https://www.echartsjs.com/en/index.html">
						<img src="https://www.echartsjs.com/en/images/index-feature.jpg" alt="Baidu Echart">
					</a>
				</div>
			</div>
			<!-- 轮播（Carousel）导航 -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>


	<!-- 新闻列表 -->

	<div class="container" style="margin-top:20px;">
		<div class="panel panel-primary">
		    <div class="panel-heading">框架新闻</div>
		    <ul class="list-group">
		        <li class="list-group-item">
					<a href="https://github.com/twbs/bootstrap/releases/tag/v4.4.1">
						Bootstrap新版发布
					</a>
					<span class="badge">新</span>
				</li>

		        <li class="list-group-item">
					<a href="https://www.echartsjs.com/en/cheat-sheet.html">
						百度Echart常用图表
					</a>
				</li>
		        <li class="list-group-item">
					<a href="https://blog.getbootstrap.com/2019/11/26/bootstrap-icons/">
						Bootstrap框架添加新图标
					</a>
				</li>
		    </ul>
		</div>
	</div>

	<!-- 框架入口 -->
	<div class="container">

		<!-- 通用框架 -->
		<h2>通用框架</h2>
		<HR></HR>
		<div class="row" >
			<div class="col-sm-4">
				<div class="well well-sm" style="margin-top:5px">
					<h3>Bootstrap</h3>
					<a href="http://dxy.zdcd.online/front/general/bootstrap.php">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAIAAABuYg/PAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDE0IDc5LjE1Njc5NywgMjAxNC8wOC8yMC0wOTo1MzowMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6REVCRDg5NzlCNjI4MTFFN0EyRkNBODVFRjEyMTIzRjQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6REVCRDg5N0FCNjI4MTFFN0EyRkNBODVFRjEyMTIzRjQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpERUJEODk3N0I2MjgxMUU3QTJGQ0E4NUVGMTIxMjNGNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpERUJEODk3OEI2MjgxMUU3QTJGQ0E4NUVGMTIxMjNGNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PjRUavEAAAW3SURBVHjahFdbaBxVGD5n5szsLZvLZmOzSXMxkSC0DxUrvhTsSxCNPvjgi+2TiMUX+6CCUinog9A+SsXbS0HfbKWgRcEapCL1giDVYosSU0OatUk2t73N7sz8/mdu57KbdFhmZ87tv33f//9DX5u9CAQvAALBnT/jvzRIwqnoAeRBaSOI9fpGiB6YeugekpTjFPH3kCRembwoMEyRRJJDkxuJtUokiZVdPSTcwJS5DknRUl0JsT85lXR4COLHRATrHicKvg+e68diuvlHKAHxfqCUGIziXYiSxLOucWo1XTvD8gMZCK4uQUo8K49T/l/bcRo1x04xom4hYcx0SU67fyibzdtO0+UzVD8U9fb5ybrP0Q+U0OJwvl61Kv/tsJQpBYg/sUhQsAfNd5pcUs9Aury46TTaxFAOBREO0AASssL3fTvNShMDuG2tvG2lzWRxaJnQDpemMgxtQkmu66WyDAB255MEk2gKLTNdz1teXB8e68vkrFbLNQyS6MdksLqu39efcZw22mRnQ6O5vyiFrUrDa3syqREI6Zxlp0wfIKYN/zOZ0Wy06rVWKmvhA0VpsfcU6KMb+HqfUCPxFY6BBzA2XWC2ISMbDyrf3lhd2RweHzAM6vM4xkAxKA+hDyFEE8cwOYahwABVkIy4ba/ZaL/67tzUwX1Eve78U7nwwbXvLv1RHMlTqjE1SQjCz0yjM79RAjJ7Aot7B7P4On/h92bDRRNRg5HJgUNH7n/5zJznevOXro9MFhJUJ/vUREPimMXEkVeBZJ9p8kCfe+PrjdVqT38Ko9uoOs+cePTkmaeOv3L02pVbLYcrQcR2AAHgaMSQcprIbzJqQph4HoaTjE4VxmcGR6cHJx8cGpspXv3iBgZmaKQXuYXslJyvZ9FwyojPEwKSigCJOHRtEJNGADOn0UKzlhfW+os5hAbyaWWpgvQSSSxOY6ByhqkZT46WTOQIVJZtItYN0wDqP3x0+oU3ZxE7505d9j3gWAWQ9CadRYCBzs0YkqBgaXujXizl37/yogbIsyc///KTnw8dmeIQ9ndRNPYWU4AQ6UWljBejlnGA/HV9BbGHluEdyfTAgdKJ04+jEhc//qE0UdCKbRwRIldqoT5IeU91AvT0pfH91LFPN9aqud4UMhaZPjkz9Pb5Y8+/Pntncf2n+Vv3jfYl6yVpwpOGjL09SrAf5IfCcA/HXik/tL8Ps9+v3//93unLOD53/JFWq+2HCUihs6I60worqItAoJ9fiD0a/HCMmkZvIbtVqeF4rjedQjSiQiYVdRU0mCS5ERSnab0Cp0hA6vJSBUmd4y4FrJDIrSefO4zjC3+W61VnsJTXFFW1J6yzt5E5Hl0E3JaL77PPPlTfaWIRx44BifXY0wcPHJ7AEvjZh1f7ilmJxnqNjqEPSvqSUpSolDxgAalfeusJDfo3frn90TtfIakxN/KeJepFhNZymJgWw7BXkehJmGVke+zzZ79FEBoYkjgoWPbK/27c/G3J87zRyYLr+Sr2lKwUHUW6dE40KEWRddSkFjN//OamE2e/MJ2gWljWewsZTCuuK0viFZ/rbUg9IHRkECy+2BsNDufttIn6GkhkiAwtDOc7ms7owfd9EBkVJXlYrDNZu7K6jeiVSoqoZyRseJo1p1G1SpMDywvrDi/qZM9uNX6IKxkKRkn7p4oIzlq1aWFDB6C2clLHgtPrd6sYmH3j/Qju6BR6j08NGWKZnF2vNVfLW+jeOJNEBjEJ5dGgZRtr5a10zk5nrcBDndQh6kdN3AnySJD1u9v1apOhpI7WliV8kuesNENibTZbmtYKZ6GDSUHPg4hVvae1BaB+sAT6YrRY1IVB6MdgAxXygMpTJOz6RGeuSQrTFXT51AGiuFa3TP1y0ZsqASKiFFJQ65nUhZGuSsiFcRdYdvsEiZwHTFNNkijXbqndA60eKZJIN0nJaf8LMABlrhVsnvvxsgAAAABJRU5ErkJggg==" />
					<strong>Twitter开发，倍受欢迎的前端库</storng>
					</a>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="well well-sm" style="margin-top:5px">
					<h3>AUI</h3>
					<a href="http://dxy.zdcd.online/front/general/aui.php">
					<img src="http://dxy.zdcd.online/front/resource/aui.png" style="width:40px;height:40px;border-radius:5px;"> </img>
					<strong>轻量级前端框架 更专注更快捷</storng>
					</a>
				</div>
			</div>

		</div>



		<!-- 按钮库 -->
		<h2>按钮库</h2>
		<HR></HR>
		<div class="row" >
			<div class="col-sm-4">
				<div class="well well-sm" style="margin-top:5px">
					<h3>Buttons</h3>
					<a href="http://dxy.zdcd.online/front/button/buttons.php" >
						<img src="http://dxy.zdcd.online/front/resource/buttons.png" style="width:40px;height:40px;border-radius:5px;"> </img>
						<strong>Buttons 是一个高度可定制的、免费并且开源的按钮 CSS 样式库。</storng>
					</a>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="well well-sm" style="margin-top:5px">
					<h3>Bttn.css</h3>
					<a href="http://dxy.zdcd.online/front/button/bttn.php" >
						<img src="https://ph-files.imgix.net/149cdf10-0017-45b1-b014-768a2acaa612?auto=format&auto=compress&codec=mozjpeg&cs=strip&w=367.16216216216213&h=380&fit=max" style="width:40px;height:40px;border-radius:5px;"> </img>
						<strong>Buttons 是一个高度可定制的、免费并且开源的按钮 CSS 样式库。</storng>
					</a>
				</div>
			</div>

		</div>

		<h2>图表库</h2>
		<HR></HR>
		<div class="row" >
			<div class="col-sm-4">
				<div class="well well-sm" style="margin-top:5px">
					<h3>百度Echart</h3>
					<a href="http://dxy.zdcd.online/front/chart/echart.php">
						<img src="https://www.echartsjs.com/images/builder/chart/pie.svg"  style="width:40px;height:40px;border-radius:5px;"/>
						<strong>ECharts: A Declarative Framework for Rapid Construction of Web-based Visualization</storng>
					</a>
				</div>
			</div>

		</div>


	</div>

	<div class="container" style="margin-top:200px;">
		<p align="center" class="mt-5 mb-3 text-muted">韩霖 聂晨飞 刘思佳 All Rights Reserved <br>© 2019-2020</p>
	</div>


</body>
</html>

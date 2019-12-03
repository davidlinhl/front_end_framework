<?php
function show_head()
{
	print <<<EOT
	<!-- 顶栏 -->
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
		    <div class="navbar-header">
		        <a class="navbar-brand" href="http://dxy.zdcd.online/front">前端框架汇总</a>
		    </div>

		    <div>
		        <!--向左对齐-->
		        <ul class="nav navbar-nav navbar-left">
		            <li class="dropdown">
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                    通用框架
		                    <b class="caret"></b>
		                </a>
		                <ul class="dropdown-menu">
		                    	<li><a href="http://dxy.zdcd.online/front/general/bootstrap.php">Bootstrap</a></li>
								<li><a href="http://dxy.zdcd.online/front/general/amazeui.php">AmazeUI</a></li>
		                </ul>
		            </li>


					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							按钮组
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
								<li><a href="http://dxy.zdcd.online/front/button.php">Bootstrap</a></li>
								<li><a href="mi.com">AmazeUI</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							数据
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
								<li><a href="http://dxy.zdcd.online/front/chart/echart.php">百度Echart</a></li>
								<li><a href="http://dxy.zdcd.online/front/chart/echart.php">AmazeUI</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							文件
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
								<li><a href="http://dxy.zdcd.online/front/chart/echart.php">Bootstrap</a></li>
								<li><a href="mi.com">AmazeUI</a></li>
						</ul>
					</li>

		        </ul>

				<ul class="nav navbar-nav navbar-right">
			      <li><a href="#"><span class="glyphicon glyphicon-user"></span> 注册</a></li>
			      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> 登录</a></li>
			    </ul>

		    </div>
		</div>
	</nav>
EOT;
}

function show_code($code,$show_preview=true)
{
	print <<<EOT
	<div class="panel panel-default">
	    <div class="panel-heading">
	        <h3 class="panel-title">
				示例
	        </h3>
	    </div>
	    <div class="panel-body">
			<pre name="code" class="brush: html" style="margin:0px;">
				<xmp>
$code
				</xmp>
			</pre>

	    </div>
		<div align="left" style="padding-left:15px;padding-buttom:0px;">
			<a href='run.php' >
				<button type="button" class="btn btn-success" >尝试一下</button>
			</a><br><br>
		</div>
	</div>
	<h4>运行结果如下</h4>
EOT;
	if($show_preview)
	{
		echo $code;
	}
}

function show_bookmark($bookmark_list)
{
	echo('<ul class="nav nav-tabs nav-stacked" data-spy="affix" data-offset-top="125">');
	for($i=0;$i<count($bookmark_list);$i++)
	{
		if($i==0)
		{
			echo("<li class='active'><a href='#section-$i'>$bookmark_list[$i]</a></li>");
		}
		else
		{
			echo("<li><a href='#section-$i'>$bookmark_list[$i]</a></li>");
		}
	}
	echo("</ul>");
}

function show_section_head($bookmark_list,$i)
{
	echo("<HR></HR>");
	echo("<h2 id='#section-$i'>$bookmark_list[$i]</h4>");
}
?>

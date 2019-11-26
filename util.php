<?php
function show_head()
{
	print <<<EOT
	<!-- 顶栏 -->
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
		    <div class="navbar-header">
		        <a class="navbar-brand" href="#">前端框架汇总</a>
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
		                    	<li><a href="baidu.com">Bootstrap</a></li>
								<li><a href="mi.com">AmazeUI</a></li>
		                </ul>
		            </li>


					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							按钮组
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
								<li><a href="baidu.com">Bootstrap</a></li>
								<li><a href="mi.com">AmazeUI</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							数据
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
								<li><a href="baidu.com">Bootstrap</a></li>
								<li><a href="mi.com">AmazeUI</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							文件
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
								<li><a href="baidu.com">Bootstrap</a></li>
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

function show_code($code)
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
			<a href="" >
				<button type="button" class="btn btn-success" >尝试一下</button>
			</a><br><br>
		</div>
	</div>

	<div class="container">

			<div align="right" style="offset:0px;">
				<a href="http://zdcd.online/front/run.php?code=$code">
					<button type="button" class="btn btn-success" >尝试一下</button>
				</a><br><br>
			</div>
		</pre>
	$code




EOT;
}
?>

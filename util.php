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
	<div class="container">
		<pre name="code" class="brush: html">
			<xmp>
$code
			</xmp>
			<a href="https://www.runoob.com/try/try.php?filename=bootstrap3-table-basic" style>
				<button type="button" class="btn btn-success">尝试一下</button>
			</a><br><br>
		</pre>
	$code




EOT;
}
?>

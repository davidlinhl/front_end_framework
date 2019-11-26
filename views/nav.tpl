<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Bootstrap 实例 - 组件对齐方式</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<!-- 顶栏 -->
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
		    <div class="navbar-header">
		        <a class="navbar-brand" href="#">前端框架集锦</a>
		    </div>

		    <div>
		        <!--向左对齐-->
		        <ul class="nav navbar-nav navbar-left">
					{{range $type,$dropdowns := .navs}}

		            <li class="dropdown">
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                    {{$type}}
		                    <b class="caret"></b>
		                </a>
		                <ul class="dropdown-menu">
							{{range $dropdowns}}
		                    	<li><a href="{{.url}}">{{.name}}</a></li>
		                    {{end}}
		                </ul>

		            </li>
					{{end}}
		        </ul>

		        <ul class="nav navbar-nav navbar-right">
					<button type="button" name="button">登录</button>
		        </ul>

		    </div>
		</div>
	</nav>


</body>
</html>


</body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>前端框架汇总</title>
	<script src="https://cdn.bootcss.com/SyntaxHighlighter/3.0.83/scripts/shCore.js"></script>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://cdn.bootcss.com/SyntaxHighlighter/3.0.83/styles/shThemeDefault.css" rel="stylesheet">
	<script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
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
	<iframe id="iframe" src="https://bttn.surge.sh/" width="100%" height="1100px" style="overflow-y: scroll; border: 2px solid #ddd !important;" seamless></iframe>
	<script type="text/javascript">
	$(document).ready(function(){
		  $("#but").click(function(){
			  console.log("in");
			  console.log(document.getElementById('iframe').innerHTML);
			  document.getElementById('iframe').innerHTML=" ";
		  });
		});


</body>
</html>

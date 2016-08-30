<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "/templates/static/css/bootstrap.min.css" />
	<script type = "text/javascript" src = "/templates/static/js/jquery.min.js"></script>
	<script type = "text/javascript" src = "/templates/static/js/script.js"></script>
	<script type = "text/javascript" src="/templates/static/js/jquery.liTranslit.js"></script>
	<script type = "text/javascript">
		$(function(){
			$('.text').liTranslit({
				elAlias: $('.translit_text')
			});
		});
	</script>


	<title><?=$title?></title>
</head>	
<body>
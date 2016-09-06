<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "/templates/static/css/bootstrap.min.css" />
	<link rel = "stylesheet" type = "text/css" href = "/templates/static/css/style.css" />
	<script type = "text/javascript" src = "/templates/static/js/jquery.min.js"></script>
	<script type = "text/javascript" src = "/templates/static/js/bootstrap.min.js"></script>
	<script type = "text/javascript" src = "/templates/static/js/script.js"></script>
	<script type = "text/javascript" src="/templates/static/js/jquery.liTranslit.js"></script>
	<script type = "text/javascript">
		$(function(){
			$('.text').liTranslit({
				elAlias: $('.translit_text')
			});
		});
	</script>

	<script type = "text/javascript" src = "/templates/plugins/tinymce/tinymce.min.js"></script>	
	<script type = "text/javascript">tinymce.init({ selector:'textarea' });</script>

	<title><?=$title?></title>
</head>	
<body>
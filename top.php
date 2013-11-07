<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>XChanging Evaluation to five axis</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Le styles -->
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<style>
			body {
				padding-top: 60px; /* 60px to make the container go all the way
				 to the bottom of the topbar */
			}
			
			/*div.alert-error {
				margin-top: 2px;
				margin-bottom: 0px;
			}*/
		</style>
		<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
		</script>
		<![endif]-->
		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="assets/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.placeholder.min.js"></script>
		<script type="text/javascript">
			jQuery.validator.addClassRules({
				percentage: {
					required: true,
					digits: true,
					range: [0,100]
				}
			});
			
			$(document).ready(function(){
				$("#axisform").validate({
					errorClass: "alert alert-error",
					errorPlacement: function(error, element) {
						//error.appendTo(element.closest(".control-group"));
					},
					errorElement: "div",
					highlight: function(element) {
						$(element).closest('.control-group').removeClass('success').addClass('error');
					},
					unhighlight: function(element) {
						$(element).closest('.control-group').removeClass('error').addClass('success');
					},					
					success: function(element) {
						$(element).closest('.control-group').removeClass('error').addClass('success');
						$(element).closest('.alert-error').remove();
					}
				});
				
				$(".pager a").click(
					function(e){
						$("#leftNav li").removeClass("active");
						$("#leftNav [href=\""+$(this).attr("href")+"\"]").parent().addClass("active");
						window.scrollTo(0);
					}
				)
				
				//IE-fix for placeholder
				$('input, textarea').placeholder();
			});
		</script>
	</head>
<body>
<div class="navbar navbar-fixed-top navbar-inverse">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="index.php">XChanging</a>
			<ul class="nav" id="topnav"> 
				<li id="welcome-li">
					<a href="index.php">Welcome</a>
				</li>
				<li id="evaluate-li">
					<a href="evaluate.php">Evaluate your company</a>
				</li>
				<li id="results-li" style="display: none;">
					<a href="result.php">Results</a>
				</li>
			</ul>
		</div>
	</div>
</div>
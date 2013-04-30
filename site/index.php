<!DOCTYPE html>
<?php date_default_timezone_set('America/Toronto'); ?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>What Day of the Week?</title>
		<meta name="author" content="Myles Braithwaite <myles@monkeyinyoursoul.com>">
		<meta name="description" content="Have you ever asked yourself what day of the week is it today? While ask no more!" />
		<meta name="keywords" content="what,day,week,monday,tuseday,thursday,friday,saturday,sunday,mon,tuse,thurs,fri,sat,sun,weekday,today" />
		<link rel="alternate" type="application/rss+xml" title="RSS" href="http://feeds.feedburner.com/WhatDayOfTheWeek" />
		
		<!-- Le styles -->
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
		<style type="text/css">
			body { padding-top: 20px; padding-bottom: 40px; }
			.container-narrow { margin: 0 auto; max-width: 700px; }
			.container-narrow > hr { margin: 30px 0; }
			.jumbotron { margin: 60px 0; text-align: center; }
			.jumbotron h1 { font-size: 72px; line-height: 1; }
			.jumbotron .btn { font-size: 21px; padding: 14px 24px; }
			.marketing { margin: 60px 0; }
			.marketing p + h4 { margin-top: 28px; }
		</style>
	</head>
	
	<body>
		<div class="container-narrow">
			<div class="masthead">
				<ul class="nav nav-pills pull-right">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="birthday_day.php">Birthday</a></li>
				</ul>
				<h3 class="muted">What Day of the Week?</h3>
			</div>
			
			<hr>
			
			<div class="jumbotron">
				<h1><?php echo date("l");?></h1>
			</div>
			
			<hr>
			
			<div class="footer">
				<p>A <a href="http://mylesbraithwaite.com/">Myles Braithwaite</a> project.</p>
			</div>
		</div>
	</body>
</html>
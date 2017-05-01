<!DOCTYPE html>
<?php date_default_timezone_set('America/Toronto'); ?>
<?php
	$year = $_REQUEST["year"];
	$month = $_REQUEST["month"];
	$day = $_REQUEST["day"];
	/* if (is_numeric($year) == false) {
		die("Only numbers.");
	} elseif (is_numeric($month) == false) {
		die("Only numbers.");
	} elseif (is_numeric($day) == false) {
		die("Only numbers.");
	} */
	if($year == '' & $month == '' & $day == '') {
		$day_of_birth = "";
	} else {
		$day_of_birth = date("l", mktime(0, 0, 0,$month, $day, $year));
	}
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>What weekday were you born on?</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Myles Braithwaite <myles@monkeyinyoursoul.com>">
		<meta name="description" content="Have you ever asked yourself what day of the week is it today? While ask no more!" />
		<meta name="keywords" content="what,day,week,monday,tuseday,thursday,friday,saturday,sunday,mon,tuse,thurs,fri,sat,sun,weekday,today" />
		<link rel="alternate" type="application/rss+xml" title="RSS" href="http://feeds.feedburner.com/WhatDayOfTheWeek" />
		
		<!-- Le styles -->
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
		<style type="text/css">
			body { padding-top: 20px; padding-bottom: 40px; }
			.container-narrow { margin: 0 auto; max-width: 700px; }
			.container-narrow > hr { margin: 30px 0; }
			.jumbotron { margin: 60px 0; text-align: center; }
			.jumbotron h1 { font-size: 72px; line-height: 1; }
			.jumbotron .btn { font-size: 21px; padding: 14px 24px; }
			.marketing { margin: 60px 0; }
			.marketing p + h4 { margin-top: 28px; }
			.footer { text-align: center; }
			.footer .fa-heart { font-size: 1.5em; vertical-align: middle; color: #da3a35; }
		</style>
	</head>
	
	<body>
		<div class="container-narrow">
			<div class="masthead">
				<ul class="nav nav-pills pull-right">
					<li><a href="index.php">Home</a></li>
					<li class="active"><a href="birthday_day.php">Birthday</a></li>
				</ul>
				<h3 class="muted">What weekday were you born on?</h3>
			</div>
			
			<?php if ( $day_of_birth ) { ?>
			
			<hr>
			
			<div class="jumbotron">
				<h1><?php print $day_of_birth; ?></h1>
			</div>
			
			<?php }; ?>
			
			<div class="marketing">
				<form action="birthday_day.php" method="get" class="form-horizontal">
					<fieldset>
						<legend>Input your Date of Birth.</legend>
						
						<div class="control-group">
							<label class="control-label" for="year">Year</label>
							<div class="controls">
								<input type="number" name="year" value="<?php print $year?>" min="1900" max="2500" size="4" maxlength="4" required>
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="month">Month</label>
							<div class="controls">
								<select name="month" value="<?php print $month ?>" required>
									<option value="1" <?php if ($month == 1) echo 'selected="selected"' ?>>January</option>
									<option value="2" <?php if ($month == 2) echo 'selected="selected"' ?>>February</option>
									<option value="3" <?php if ($month == 3) echo 'selected="selected"' ?>>March</option>
									<option value="4" <?php if ($month == 4) echo 'selected="selected"' ?>>April</option>
									<option value="5" <?php if ($month == 5) echo 'selected="selected"' ?>>May</option>
									<option value="6" <?php if ($month == 6) echo 'selected="selected"' ?>>June</option>
									<option value="7" <?php if ($month == 7) echo 'selected="selected"' ?>>July</option>
									<option value="8" <?php if ($month == 8) echo 'selected="selected"' ?>>August</option>
									<option value="9" <?php if ($month == 9) echo 'selected="selected"' ?>>September</option>
									<option value="10" <?php if ($month == 10) echo 'selected="selected"' ?>>October</option>
									<option value="11" <?php if ($month == 11) echo 'selected="selected"' ?>>November</option>
									<option value="12" <?php if ($month == 12) echo 'selected="selected"' ?>>December</option>
								</select>
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="day">Day</label>
							<div class="controls">
								<input type="number" name="day" value="<?php print $day?>" maxlength="2" size="2" min="1" max="31" required>
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			
			<hr>
			
			<div class="footer">
				<p>Made by <a href="https://mylesb.ca/" title="Myles Alden Braithwaite">Myles Braithwaite</a> with <i class="fa fa-heart"></i> in Toronto.</p>
			</div>
		</div>
	</body>
</html>
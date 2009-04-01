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
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>What Day of the Week were you Born?</title>
	<style type="text/css" media="screen">
		body {font: 75% "Lucida Grande", "Trebuchet MS", Verdana, sans-serif;text-align: center;color: #204a87;}
		div {font-size: 10em;}
	</style>
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://feeds.feedburner.com/WhatDayOfTheWeek" />
	<meta name="description" content="Have you ever asked yourself what day of the week is it today? While ask no more!" />
	<meta name="keywords" content="what,day,week,monday,tuseday,thursday,friday,saturday,sunday,mon,tuse,thurs,fri,sat,sun,weekday,today" />
</head>
<body>
	<div><?php print $day_of_birth; ?></div>
	<form action="birthday_day.php" method="get">
		<legend>Input your Date of Birth.</legend>
		<fieldset>
			<p>
				<label for="year">Year</label>
				<input type="text" name="year" value="<?php print $year?>" size="4" maxlength="4" />
			</p>
			<p>
				<label for="month">Month</label>
				<select name="month" value="<?php print $month?>">
					<option value="1">January</option>
					<option value="2">February</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
					<option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
			</p>
			<p>
				<label for="day">Day</label>
				<input type="text" name="day" value="<?php print $day?>" maxlength="2" size="2" />
			</p>
		</fieldset>
		<input type="submit" value="Submit" />
	</form>
</body>
</html>

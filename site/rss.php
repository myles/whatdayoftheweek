<?php header("Content-Type: application/rss+xml"); print "<?xml version=\"1.0\"?>\n"; ?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel>
		<title>What Day of the Week?</title>
		<atom:link href="http://whatdayoftheweek.com/rss.php" rel="self" type="application/rss+xml" />
		<link>http://whatdayoftheweek.com/rss.php</link>
		<description>Have you ever asked yourself what day of the week is it?</description>
		<language>en-us</language>
		<pubDate><?php print date("D, d M Y H:i:s T"); ?></pubDate>
		<lastBuildDate><?php print date("D, d M Y H:i:s T"); ?></lastBuildDate>
		<docs>http://whatdayoftheweek.com/</docs>
		<generator>One Monkey and PHP</generator>
		<managingEditor>myles@monkeyinyoursoul.com (Myles Braithwaite)</managingEditor>
		<webMaster>myles@monkeyinyoursoul.com (Myles Braithwaite)</webMaster>
		<item>
			<guid>http://whatdayoftheweek.com/?d=<?php print date("N"); ?></guid>
			<title><?php print date("l");?></title>
			<link>http://whatdayoftheweek.com/?d=<?php print date("N"); ?></link>
		</item>
	</channel>
</rss>

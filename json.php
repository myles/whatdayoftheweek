<?php header("Content-Type: application/json"); ?>
{"day": { "name": "<?php print date("l");?>", "link": "http://whatdayoftheweek.com/?d=<?php print date("N"); ?>" } }

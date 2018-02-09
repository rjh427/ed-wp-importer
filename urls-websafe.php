Note: This file is not provided as a working script. It is only provided as an example of my work. Not responsible for any unauthorized use or misuse of this non-working script.

<?php
	require 'arrays.php'; // list of .html files found with "find . -name '*.html'"

	function niceDisplay($page) {
		// suppress part of local path for browser display
		return substr($page, 69);
	}
?>
<html>
<body>
<?php

	echo '<h5>URLs</h5>';
	$index = 2;
	foreach ($pages as $page) {
		// file names correspond with post ID. "Hello World" has post ID 1, so start our count at 2
		// with comment type: 0 = none, 1 = simple, 2 = nested
		echo $index++ . '.xml  <a href="' . $page[0] . '" target="_blank">' . niceDisplay($page[0]) . '</a> ' . $page[1] . '<br />';
		// without comment type
//		echo $index++ . '.xml  <a href="' . $page[0] . '" target="_blank">' . niceDisplay($page[0]) . '</a> <br />';
	}

	echo '<p>&nbsp;</p>';
	echo '<h5> Commenters </h5>', '<ol>';

	// get a nice, numbered list of commenters by name and url (where url was provided)
	foreach ($users as $user) {
		$str = ($user['site'] != '') ? '<a href="' . $user['site'] . '"> clickable link</a>' : '';
		echo '<li>' . $user['name'] . '&nbsp;&nbsp;&nbsp;' . $user['site'] . $str . '</li>';
	}

	echo '</ol>';
?>
<p>&nbsp;</p>
</body>
</html>


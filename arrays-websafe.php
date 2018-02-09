Note: This file is not provided as a working script. It is only provided as an example of my work. Not responsible for any unauthorized use or misuse of this non-working script.

<?php 

$pages = [
	/* 
		A 2-level multi-dimentional array. URLs have been redacted, to preserve the anonymity of my client. Entries looked like:

			['http://localhost/www/<client-name>/<path>/<filename1>.html', '0'],
			['http://localhost/www/<client-name>/<path>/<filename2>.html', '1'],
			...
			['http://localhost/www/<client-name>/<path>/<filename3>.html', '2'],

		for a total of 60 urls. The trailing digit indicates the type of comments present in that post:
			0 = no comments
			1 = simple (no nested) comments
			2 = nested comments
		See importer.php at around line 74 to see how these were was used.

		Luckily as it turned out, the coding to process type 1 comments worked just about as well for type 2 comments so rather than spend 80% more time for that last 20% of functionality, I took an Agile approach and went with the minimum viable product and ran with the converter script as it was, made minor corrections as necessary while QA-checking the XML fragments before they were later joined together.
	*/
];

$categories = [
	/* 
		A single-level array. Categories have been redacted to preserve the anonymity of my client. Entries were simple strings and looked like:
		'foo',
		'bar',
		'baz',
	*/
];

$users = [
	[
		/* 
			A 2-level multi-dimentional array. Commenter entries have been redacted, to preserve the anonymity of my client. Entries looked like:

		'name' => '<display name>',
		'site' => '<URL if present, empty string otherwise>',
		'email' => '<the actual email if available. a generated, fake address otherwise, to satisfy Wordpress's name & email requirement for commenters',
		'perm' => 'subscriber',
		'first' => 'first-name',
		'last' => '<last-name, if provided>',
		'id' => '<an assigned id number in order to have well-formed XML for the import>',
	],
	...
	[
		'name' => 'name',
		'site' => '',
		'email' => 'name@fixme.asap',
		'perm' => 'subscriber',
		'first' => 'name',
		'last' => '',
		'id' => '79',
	],
];


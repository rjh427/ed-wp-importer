To help a friend restore his personal blog, I wrote a script to parse his HTML-file backups from his now-defunct old blogging platform. The HTML files were turned into a well-formed XML file that could be imported into Wordpress.

I opted for a procedural instead of an OOP approach for this one-off. Should I ever take on a task like this again, I will revisit refactoring as OO.

I do not consider the main importer script finished. This being a one-off, I took an Agile-like approach and stopped script development when I had a minimum viable product. I saw no benefit in spending 80% more time for a 20% improvement in functionality. 

The importer script uses two include files, an 'arrays' file with links to the HTML files to be converted and some data on users/commenters, and the Simple_HTML_DOM.php parser library. Each HTML file or "post" was converted to an XML fragment which was then saved as a file, then after QA checks all the post fragments were concatenated with RSS header and footer fragments to create a well-formed RSS-style XML file. Concatenation was done on the command line with the command 

`cat fragments/header.xml xml/{2..61}.xml fragments/footer.xml > allposts.xml`

Some rework was needed to satisfy Wordpress's proprietary XML format for import in areas where its documentation could stand improvement. That went quickly, all posts and their comments were successfully imported, with the correct categories, timedate stamps. Nested comments properly display as nested where WP themes support nested comments display (not all themes do). 

The allposts.xml file, a ZIP archive with uploaded attachments, and a comprehensive instructions tips and caveats sheet was turned over to my friend, who quickly restored his personal blog without further assistance. The uploaded files archive was given instructions on how/where to upload and additional instructions given on how to get those files registered in the Wordpress Media Library.

Note: The importer script and other files provided here are not working files. They have been redacted to preserve my friend's anonymity. These files are provided only as examples of my work, there is no warranty or guarantee that these files will work for anyone else. Not responsible for any damage caused by unauthorized use or misuse of these files. Caveat emptor.


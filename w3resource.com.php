<?
	//Get PHP version and configuration information
	//phpinfo();
	
	/*2. Write a PHP script to display the following strings. Go to the editor
		Sample String : 
		'Tomorrow I \'ll learn PHP global variables.'
		'This is a bad command : del c:\\*.*' 
		Expected Output : 
		Tomorrow I 'll learn PHP global variables.
		This is a bad command : del c:\*.* 
	*/
	echo ("Tomorrow I 'll learn PHP global variables. <br>
	This is a bad command : del c:\*.*");
	
	/*3. $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within a HTML document. Go to the editor 
		Sample Output :

		PHP Tutorial
		PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, 
		HTML embedded server-side scripting language and is especially suited for web development.
	*/
	$var = 'PHP Tutorial';
	echo ("<title>$var</title>");
	echo ("<h3>$var</h3>");
	echo ("PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, 
		HTML embedded server-side scripting language and is especially suited for web development.");
?>
<?
	//=============================================
	//PHP Basic - Exercises, Practice, Solution
	//=============================================

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
	
	
	// commit to github


	
	/* 4. Create a simple HTML form and accept the user name and display the name through PHP echo statement. Go to the editor
		Sample output of the HTML form :
		sample html form
	*/
?>	
	<form name="send_name" method="post">
		<h2>Please input your name:</h2>  
		<input type="text" name="user_name" placeholder="Input your name here">
		<input type="submit" name="Submit Name">
	</form>
	
<?
	$name = $_POST['user_name'];  
	if ($name !="") {
		echo ("Hello ".$name."!");
	} else { 
		echo "Please input your name";
	}
?>


<?
	echo "<br><br>
		<br>=============================================
		<br> 5. Write a PHP script to get the client IP address. 
		<br>============================================= 
		<br>";
	
	echo $_SERVER['REMOTE_ADDR'];


	echo "<br><br>Solution from w3resource.com<br>";
	echo "http://www.w3resource.com/php-exercises/php-basic-exercise-5.php";

	//whether ip is from share internet  
	if (!empty($_SERVER['HTTP_CLIENT_IP']))     
	  {  
	    $ip_address = $_SERVER['HTTP_CLIENT_IP'];  
	  }  
	//whether ip is from proxy  
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))    
	  {  
	    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];  
	  }  
	//whether ip is from remote address  
	else  
	  {  
	    $ip_address = $_SERVER['REMOTE_ADDR'];  
	  }  
	echo "<br>".$ip_address."<br>";  
?>  


<?
	echo "<br><br>
		<br>=============================================
		<br> 6. Write a simple PHP browser detection script. 
		<br>============================================= 
		<br>";
	echo $_SERVER['HTTP_USER_AGENT'];

?>


<?
	echo "<br><br>
		<br>=============================================
		<br> 7. Write a PHP script to get the current file name. 
		<br>============================================= 
		<br>";
	echo __FILE__;


	echo "<br><br>Solution from w3resource.com<br>";
	echo "http://www.w3resource.com/php-exercises/php-basic-exercise-7.php";
	$current_file_name = basename($_SERVER['PHP_SELF']);  
	echo $current_file_name;  
?>
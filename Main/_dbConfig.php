<?php
	// Connection variables
	$host = "localhost"; 
	$username = "root"; 
	$password = ""; 
	$db_name = "cds_dev"; 
	
	// Connect to server and select database.
	$connection = mysqli_connect("$host", "$username", "$password", "$db_name")or die("cannot connect");


#############################################################################
#
#	Function name: cleanText
#
#	Purpose: Clean user submitted data for insertion into the database. Works regardless of magic_quotes.
#
#	Incoming parameters: 
#		$string - $_GET or $_POST string to be cleaned
#		$allowedTags - Choose which HTML tags you want to allow in this format: <a>, <b>, <strong>, <i>, etc.
#
#	Returns: Cleaned data ready to be inserted
#
#############################################################################
	
	function cleanText($string, $allowedTags = "") {
		$string = strip_tags($string, $allowedTags);
	
		if(get_magic_quotes_gpc()) {
            return mysql_real_escape_string(stripslashes($string));
        } else {
            return mysql_real_escape_string($string);
        }
		
	}
?>
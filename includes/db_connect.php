<?php
/**
 * @author arif
 * @copyright 2011
 * @email delwar.hossain.arif@gmail.com
 * @date 8.3.2011 21:34
 */

//variables for database connection
$host="localhost";
$username = "root";
$password = "amimanik";
$db_name = "ictfest2011";

//connection to the database....
$connect = @mysql_connect($host,$username,$password) or die("Can't connect to the Database! Try again later!"); 
/*if($connect){
echo "connected!";
}
*/
//select the database to use...
$select = @mysql_select_db($db_name,$connect) or die("Can't select the specified Database! Try again later");
/*if($select){
echo $db_name . " selected!";
}*/
?>
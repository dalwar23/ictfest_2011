<?php

/**
 * @author arif
 * @copyright 2011
 * @email delwar.hossain.arif@gmail.com
 * @date 25.3.2011 14:45
 */

include("../db_connect.php");

$query = "UPDATE registration_status SET status = '0',remarks = 'closed' WHERE id = '1'";

$update = mysql_query($query) or die ("Query not successfull!");

if($update){
echo "
<title>.:: REGISTRATION CLOSING SUCCESSFUL ::.</title>
<style>
body
{
     line-height: 1.6em;
     background-color:#C62020;
     color: #fff;
}
.code
{
	text-align: center;
	text-transform: uppercase;
	font-family: thsans-serif sserif mmonospace;
	font-style: normal;
	font-size: 32px;
	font-weight: bold;
}

#success
{
	color:#fff;
	background-color:#000;
	width: 36%;
	padding:2%;
	margin-bottom:3%;
	-moz-border-radius:10px;
	-o-border-radius:10px;
	border-radius:10px;

}
.cat82
{
	text-align:center;
	font-size:large;
	font-weight:bold;
	font-family:Thoma;
}
.cat02
{
	text-align:left;
}
.back
{
	font-size:24px;
	text-align:center;
}
.back a
{
	text-decoration:none;
	color:#F5C314;
	font-weight:bold;
}
.back a:hover
{
	text-decoration:underline;
	color:#F5C314;
}
</style>

<center>
            <div id=success class='cat82'>
				REGISTRATION SUCCESSFULLY CLOSED !
            </div>
";
echo "	
            <div id=success class='cat02'>
            THANK YOU MR. ADMINISTRATOR !! <br>
			ENJOY THE FEST !! <br>
";
echo "
		<div class='back'>
			[ <a href='../../main/index.php'>BACK</a> ]
		</div>
";
echo "     </div>
            </center>

";
}

?>
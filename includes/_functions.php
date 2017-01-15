<?php
/**
 * @author arif
 * @copyright 2011
 * @email delwar.hossain.arif@gmail.com
 * @date 8.3.2011 21:34
 */

 
//--------------------------------- HEADER FUNCTION ------------------------------------//
function _header(){
echo "
		<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'
		'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
		<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
		<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8' >
		<meta name='robots' content='index,follow' >
		<meta name='description' content='Designed by Delwar Hossain Arif' >
		<meta name='keywords' content='ictfest,ictfestbd,ictfest2011,iut,iutictfest' >
		<meta name='author' content='info@arrowheadbd.com' >
		<meta name='copyright' content='www.arrowheadbd.com' >
		
		
		<link rel='stylesheet' type='text/css' href='../css/main_style.css' media='screen, print, projection, handheld' />
		<link rel='shortcut icon' href='../images/index.ico' type='image/x-icon' />
		<link rel='stylesheet' type='text/css' href='../css/print.css' media='print' />
		<!--[if lte IE 6]>
		 <link rel='stylesheet' type='text/css' href='../css/ie.css' media='screen, projection' />
		<![endif]-->
		<!--[if IE 7.0]>
		 <link rel='stylesheet' type='text/css' href='./css/ie7.css' media='screen, projection' />
		<![endif]-->
		
		
		</head>
		<title>WELCOME TO IBBL IUT 3rd ICTFEST 2011</title>
		<body>
				<div id='wraper'>
					<div id='header'>
					
						<div class='header_left'>
							<img src='../images/header.jpg'/ width='100%' height='150' alt='IBBL IUT ICTFEST LOGO'>
						</div> ";
				/*	<div class='header_right'>
							<img src='../images/cs_logo.jpg'/ width='inherit' height='150' alt='IUTCS LOGO'>
						</div>*/
echo"					</div>
";
}
//--------------------------------------- HEADER ENDS ------------------------------------------------------//				
function _menu($id){
$page_id = $id;

if ($page_id == 1){
$current1 = "current";
}
elseif($page_id == 2){
$current2 = "current";
}
elseif($page_id == 3){
$current3 = "current";
}
elseif($page_id == 4){
$current4 = "current";
}
elseif($page_id == 5){
$current5 = "current";
}
elseif($page_id == 6){
$current6 = "current";
}
elseif($page_id == 7){
$current7 = "current";
}
elseif($page_id == 8){
$current8 = "current";
}
elseif($page_id == 9){
$current3 = "current";
}

echo"			<div id='menu'>
						<ul>
							<li class=$current8><a href='contact.php'>Contact</a></li>
							<li class=$current7><a href='iutcs.php'>IUTCS</a></li>
							<li class=$current6><a href='schedule.php'>Schedule</a></li>
							<li class=$current5><a href='rules.php'>Rules</a></li>
	";
						//	<li class=$current4><a href='events.php'>Events</a></li>
						
echo"						<li class=$current3><a href='register.php'>Registration</a></li>
							<li class=$current2><a href='transport.php'>Transportation Route</a></li>
							<li class=$current1><a href='index.php'>Home</a></li>
						</ul>
					</div>
";
}

//-------------------------------------- END OF HEADER FUNCTION -------------------------------------//

//-------------------------------------- LEFT SIDE SUMMARY ------------------------------------------//

function _left(){
echo "
			<div id='content'> 
            	<div id='left_column'>";
                summary();
echo"            </div>
";
}

//------------------------------------- END OF LEFT SUMMARY -----------------------------------------//

//------------------------------------- CENTER COLUMN UP --------------------------------------------//

function _centerup(){
echo "
            <div id='center_column'>
                <h1 align='center'>WELCOME TO IBBL IUT 3rd NATIONAL ICT FEST 2011</h1> <br>";
              //  <hr align='center' width='100%' size='2'  color='#000000'/>

}
//------------------------------------- END OF CENTER COLUMN UP -------------------------------------// 

//------------------------------------- RIGHT SIDEBAR -----------------------------------------------//

function _right(){

echo "
		 </div>
                <div id='right_column'>
<table border='0' width='100%' cellpadding='2px' class='left_color'>
<tr>
	<td class='summary' colspan='3'>VENUE DATE - TIME</td>
</tr>
<tr>
<td>Venue</td>
<td> : </td>
<td> IUT CAMPUS, Board Bazar, Gazipur.</td>
</tr>
<tr>
<td>Date - Time </td>
<td> : </td>
<td>7th - 8th April , 2011</td>
</tr>
<tr>
<td>Registration </td>
<td> : </td>
<td>27th March - 4th April , 2011 </td>
</tr>
<tr>
<td>E - Mail</td>
<td> : </td>
<td><a href='mailto:iutcs@iut-dhaka.edu'>iutcs@iut-dhaka.edu</a></td>
</tr>
</table>
<br>
<table border='0' width='100%' cellpadding='2px' class='left_color' align='justify'>

<tr>
	<td class='summary'>LATEST FEST UPDATES</td>
</tr>

	<tr>
		<td class='left_td'>
		-> Catch the Special live adda Of IBBL IUT 3rd NATIONAL ICT FEST 2011 on <b> 3rd April @2:15 PM </b> AT <b> RADIO TODAY , 89.6 FM </b>
		</td>
	</tr>
	<tr>
		<td class='left_td'>
		-> Chief guest of the Prize giving ceremony will be <br> 
		<b>Mr. Hasanul Haq Inu MP </b><br> 
		Chairman,Parliamentary Standing Committee on <br>
		Ministry of Post and Telecommunications <br>
		</td>
	</tr>
	<tr>
		<td class='left_td'>
		-> Keep your eyes on <b> THE INDEPENDENT </b> Newspaper for regular updates and Registration details.
		</td>

	</tr>
	<tr>
		<td class='left_td'>
		-> Check <a href='http://www.bdnews24.com'>BDNEWS24.COM</a> for regular upadtes.
		</td>
	</tr>
	<tr>
		<td class='left_td'>
		-> Advertisement Scope Available in the Magazine <b>FOOTPRINTS</b> , the Only publication of IBBL IUT 3rd National ICT Fest 2011
		</td>

</tr>
	<tr>
		<td class='left_td'>
		
		</td>
	<tr>
		<td class='left_td'>
		
		</td>
	</tr>

</table>


                </div>
				 </div>
";
}

//------------------------------------- END OF RIGHT SIDEBAR ----------------------------------------//

//------------------------------------- FOOTER ------------------------------------------------------//

function _footer(){
$year = date("Y");

echo "
            <div id='sponsors'>
            <img src='../images/sponsor.jpg' width='100%'/>
            </div>
            <div id='footer'>";

echo "
<hr align='center' width='100%' size='2' color='#000000'>
(BEST VIEWED IN FIREFOX 3.0 OR LATER)<br>
<a href='index.php'>Home</a> | <a href='transport.php'>Transportation Route</a> | <a href='rules.php'>Rules</a> | <a href='register.php'>Registration</a> | <a href='contact.php'>Contact</a>
";

echo "
<br>All Rights Reserved. &copy; $year IUTCS
";

echo "
<br>Designed By : <a href='http://www.binarydreamers.net/arif23'>arif</a>
";

echo "
<br>Powered By : <a href='http://www.binarydreamers.net'>binaryDreamers web solutions</a>
";

echo"
       </div>
        </div>
</body>
</html>
";
}

//----------------------------------- END OF FOOTER -----------------------------------------------------//

//----------------------------------- SITE SUMMARY ------------------------------------------------------//

function summary(){
/*
echo "
            <div id=choice class='cat9'>
				[ LAST REGISTERED ]
            </div>
";
*/
last_registered();
/*
echo "		<br>
            <div id=choice class='cat9'>
				[ ONLINE REGISTRATION SUMMARY ]
            </div>
";
*/
echo "<br>
<table border='0' width='100%' cellpadding='2px' class='left_color'>";
echo "
<tr>
	<td colspan='3'>&nbsp;&nbsp;</td>
</tr>
";
echo "
<tr>
	<td colspan='3' class='summary'>ONLINE REGISTRATION SUMMARY</td>
</tr>
";
echo"
	<tr>
		<td class='left_td'>Programming Contest Teams</td>
		<td> : </td>
		<td class='right_td'>";
		total_acm();
echo"</td>";
echo"
	</tr>
	<tr>
		<td class='left_td'>FIFA'11 Contestants</td>
		<td> : </td>
		<td class='right_td'>";
		total_fifa();
 echo "</td>";
echo" 
	</tr>
	<tr>
		<td class='left_td'>Counter Strike Teams</td>
		<td> : </td>
		<td class='right_td'>";
		total_cs();
echo "</td>" ;
echo"
	</tr>
	<tr>
		<td class='left_td'>ICT Olympiad Contestants</td>
		<td> : </td>
		<td class='right_td'>";
		total_olympiad();
	echo"</td>";
echo"
	</tr>
	<tr>
		<td class='left_td'>General Knowledge Teams</td>
		<td> : </td>
		<td class='right_td'>";
		total_gk();
echo "</td>";
echo"	
</tr>
	<tr>
		<td class='left_td'>Project Showcasing Teams</td>
		<td> : </td>
		<td class='right_td'>";
		total_showcase(); 
echo "</td>";
echo"
	<tr>
		<td class='left_td'>Total Registered So Far</td>
		<td> : </td>
		<td class='right_td'>";
		total_registered(); 
echo "</td>";
echo"	</tr>
<tr>
	<td colspan='3'>&nbsp;&nbsp;</td>
</tr>

</table>
";
}
//----------------------------------- END OF SITE SUMMARY -----------------------------------------------//

//----------------------------------- REGISTRATION STATUS -----------------------------------------------//

function reg_status(){
include("db_connect.php");

$query = "SELECT status FROM registration_status";
$result = mysql_query($query) or die("Can't execute the query right now. Try again later!");

	while ($row = mysql_fetch_assoc($result)){
		$db_status = $row['status'];
		return $db_status;
	}

}

//----------------------------------- REGISTRATION STATUS ENDS ------------------------------------------//

//----------------------------------- REGISTRATION NOTICE -----------------------------------------------//

function reg_notice(){
echo "
	<h2 align='left'> PLEASE NOTE : </h2>
	1. Clicking the<b> REGISTER </b>means that you have<b> ACCEPTED </b>all the RULES and POLICIES of the Fest.
	2. You can DOWNLOAD the REGISTRATION and PAYMENT details from [ <a href='../documents/details.pdf'>HERE</a> ] <br>
	3. Must fillup all the boxes to REGISTER successfully.<br>
	4. Must Read the [ <a href='../main/rules.php'>RULES</a> ] before Registering. <br>
	5. Perticipent are allowed to bring their Mouse/Keybord or any necessary kit if they want. <br>
	6. Payment is welcome on site. <br>
	7. For further information please [ <a href='../main/contact.php'>CONTACT</a> ] with the organizing Team. <br>

";
}
//----------------------------------- REGISTRATION NOTICE ENDS-------------------------------------------//

//----------------------------------- CATEGORY FUNCTION -------------------------------------------------//

function category_header(){
echo "
            <div id=choice class='cat8'>
				[ REGISTRATION CATEGORIES ]
            </div>
";

echo "
            <div id=choice class='cat0'>
			Welcome to the registration of the 'IBBL IUT 3rd NATIONAL ICT FEST - 2011'. Make your choices and register for one or more events. Before registering in any event it's highly recomended that you read the RULES and FILL UP all the fields. You can register in as many events as you want. So, Join us and let's enjoy the biggest ICT Festival in Bangaldesh.
            </div>
";
//------------------------------------------------- CATEGORY HEADER ENDS --------------------------------//
}
function category($status){

//----------------------------------------- [CAT1] PROGRAMMING -------------------------------------------//
echo"    <div id=choice class='cat1'>
          	<div class='align_left'><img src='../images/code.jpg' /></div>
            <h2 align='left'>PROGRAMMING CONTEST</h2>
Registered teams from different public, private & international universities of Bangladesh will take part in the Programming Contest.<br />
";

if($status == "OPEN"){
reg_link($status ,"cat1");
}

echo " 
            </div>
            <br>
            <br>
";
//----------------------------------------- [CAT2] FIFA 2011 ------------------------------------------------------//
echo "   
            <div id=choice class='cat2'>
            	<div class='align_left'><img src='../images/fifa11.jpg' /></div>
             <h2 align='left'>FIFA'11</h2>
				FIFA11 Gaming contest is one of the most exciting events in ICTFEST.Students will be here from different palces and they will paly against each other to win the Prize money. So if you think you can win the prize money and defeast others then without any delay register yourself. TERMS AND RULES WILL UPDATED.
				<br />
";

if($status == "OPEN"){
reg_link($status ,"cat2");
}

echo "  
            </div>
            <br>
";
//----------------------------------------- [CAT3] COUNTER STRIKE ------------------------------------------------------//
echo"     
            <div id=choice class='cat3'>
            	<div class='align_left'><img src='../images/Counter_Strike.jpg' /></div>
            <h2 align='left'>COUNTER STRIKE</h2>
				Every team will need five(5) members and they can be from different Institutions. So to join the ultimate battle register now and let everyone know that you can shoot. TERMS AND RULES WILL UPDATED.
				<br />
";

if($status == "OPEN"){
reg_link($status ,"cat3");
}

echo "   
            </div>
            <br>
            <br>
";
//----------------------------------------- [CAT4] ICT OLYMPIAD ------------------------------------------------------//
echo"     
            <div id=choice class='cat4'>
            	<div class='align_left'><img src='../images/ict_olympiad.jpg' /></div>
            <h2 align='left'>ICT OLYMPIAD</h2>
This was the first, foremost and pioneering venture in the ICT arena of Bangladesh that IUTCS organized ICT Olympiad in 'Prime Bank 1st IUT National ICT Fest-2008' and in 'AB Bank 2nd IUT National ICT Fest-2009'. We want to arrange ICT Olympiad this year also. It will be comprised of ICT related questions, clues, problem case design and solution with a non regular innovative approach. Open only for the students of <b>universities</b> and <b>colleges.</b> <br />
";

if($status == "OPEN"){
reg_link($status ,"cat4");
}

echo "  
            </div>
            <br>
            <br>
";
//----------------------------------------- [CAT5] GENERAL KNOWLEDGE -------------------------------------------------//
echo"     
            <div id=choice class='cat5'>
            	<div class='align_left'><img src='../images/gk.jpg' /></div>
            <h2 align='left'>GENERAL KNOWLEDGE</h2>
The general knowledge competition will be open only for the students of <b>schools</b> and <b>colleges</b>. Feature questions related to general knowledge and current world affairs. General IQ standard will be maintained during questioning.<br />
";

if($status == "OPEN"){
reg_link($status ,"cat5");
}

echo "  
            </div>
            <br>
            <br>
";
//----------------------------------------- [CAT6] PROJECT SHOWCASE --------------------------------------------------//
echo"     
            <div id=choice class='cat6'>
            	<div class='align_left'><img src='../images/showcase.jpg' /></div>
            <h2 align='left'>SOFTWARE AND HARDWARE PROJECT SHOWCASING</h2>
Exposition featuring projects related to various fields of Computer Science, IT, EEE, MCE, Civil & Architecture.
<br />
";

if($status == "OPEN"){
reg_link($status ,"cat6");
}

echo "   
         </div>
            <br>
            <br>
";
/*
//----------------------------------------- [CAT7] GUEST ------------------------------------------------------------//
echo"     
            <div id=choice class='cat7'>
            	<div class='align_left'><img src='../images/guest.jpg' /></div>
            <h2 align='left'>REGISTER AS A GUEST VISITOR</h2>
If you aren't participating in any of the events you can Register as a Visitor as well. You can enjoy all the events and can have a great time with your friends and family. Wait no longer and register to join the biggest IT festival in BANGLADESH.<br />
";

if($status == "OPEN"){
reg_link($status ,"cat7");
}

echo " 
            </div>
";
//----------------------------------------------------------------------------------------------------------------------//
*/
}

//----------------------------------- CATEGORY FUNCTION ENDS --------------------------------------------//

//----------------------------------- EXTRA CATEGORY EVENTS ---------------------------------------------//
function xtra_events(){
echo "
            <div id=choice class='cat8'>
				[ ICTFEST - 2011 EVENTS ]
            </div>
";
echo "		
            <div id=choice class='cat0'>
        	<h2 align='left'>PROFESSORS' TOGATHER</h2>
			Professors Together is a unique event of the festival. It will be a discussion amongst   all Departmental Heads of Computer Science and related departments and Professors. To know in details about it , click [ <a href='prof2g.php'>HERE</a> ]
            </div>
";

echo "		
            <div id=choice class='cat0'>
        <h2 align='left'>ICT SEMINAR</h2>
			Information about ICT Seminar is now available in the site. There will be two seminars. The topics and the schedule of the seminars are available [ <a href='seminar.php'>HERE</a> ]
            </div>
";

}
//----------------------------------- EXTRA CATEGORY EVENTS END -----------------------------------------//

//----------------------------------- REGISTRATION CLOSED -----------------------------------------------//
function reg_closed(){
echo "
            <div id=choice class='cat8'>
				REGISTRATION CLOSED
            </div>
";
}

//--------------------------------- REGISTRATION CLOSED ENDS ---------------------------------------------//

//--------------------------------- REGISTRATION LINK FUNCTION -------------------------------------------//

function reg_link($status,$cat){
echo "
[<a href='reg_form.php?stat=$status&cat=$cat'> REGISTER </a>] 
&nbsp; &nbsp; [<a href='rules.php?stat=$status&cat=$cat'> RULES </a>]
";
}

function reg_link2($status,$cat){
echo "
&nbsp; &nbsp; &nbsp; &nbsp; [<a href='reg_form.php?stat=$status&cat=$cat'> REGISTER </a>] 
";
}

//--------------------------------- REGISTRATION LINK FUNCTION ENDS --------------------------------------//

//--------------------------------- REGISTRATION FORM OF PROGRAMMING CONTEST[CAT1] -----------------------------//

function reg_programming(){
echo "
            <div id=choice class='cat8'>
				[ PROGRAMMING CONTEST REGISTRATION ]
            </div>
";

echo "
		<div id=choice class='cat0'>
";

include("forms/pc_reg_form.php");

echo "
		</div>
";

echo "
			<div id=choice class='cat0'>
";

	reg_notice();

echo "
			</div>
";
}

//--------------------------------- REGISTRATION FORM OF PROGRAMMING CONTEST ENDS ------------------------//

//--------------------------------- REGISTRATION FORM OF FIFA'11 CONTEST[CAT2] -----------------------------//

function reg_fifa(){
echo "
            <div id=choice class='cat8'>
				[ FIFA'11 REGISTRATION ]
            </div>
";

echo "
		<div id=choice class='cat0'>
";

include("forms/fifa11_reg_form.php");

echo "
		</div>
";

echo "
			<div id=choice class='cat0'>
";

	reg_notice();

echo "
			</div>
";
}

//--------------------------------- REGISTRATION FORM OF FIFA'11 CONTEST ENDS ------------------------//

//--------------------------------- REGISTRATION FORM OF COUNTER STRIKE CONTEST[CAT3] ----------------------//

function reg_counter_strike(){
echo "
            <div id=choice class='cat8'>
				[ COUNTER STRIKE REGISTRATION ]
            </div>
";

echo "
		<div id=choice class='cat0'>
";

include("forms/cs_reg_form.php");

echo "
		</div>
";

echo "
			<div id=choice class='cat0'>
";

	reg_notice();

echo "
			</div>
";
}

//--------------------------------- REGISTRATION FORM OF COUNTER STRIKE CONTEST ENDS -----------------//

//--------------------------------- REGISTRATION FORM OF ICT OLYMPIAD CONTEST[CAT4] ------------------------//

function reg_ict_olympiad(){
echo "
            <div id=choice class='cat8'>
				[ ICT OLYMPIAD REGISTRATION (ALSO AVAILABLE ONSITE) ]
            </div>
";

echo "
		<div id=choice class='cat0'>
";

include("forms/ict_olympiad_reg_form.php");

echo "
		</div>
";

echo "
			<div id=choice class='cat0'>
";

	reg_notice();

echo "
			</div>
";
}

//--------------------------------- REGISTRATION FORM OF ICT OLYMPIAD CONTEST ENDS -------------------//

//--------------------------------- REGISTRATION FORM OF GENERAL KNOWLEDGE CONTEST[CAT5] -------------------//

function reg_gk(){
echo "
            <div id=choice class='cat8'>
				[ GENERAL KNOWLEDGE CONTEST REGISTRATION ]
            </div>
";

echo "
		<div id=choice class='cat0'>
";

include("forms/gk_reg_form.php");

echo "
		</div>
";

echo "
			<div id=choice class='cat0'>
";

	reg_notice();

echo "
			</div>
";
}

//--------------------------------- REGISTRATION FORM OF GENERAL KNOWLEDGE CONTEST ENDS --------------//

//--------------------------------- REGISTRATION FORM OF SHOWCASING CONTEST[CAT6] --------------------------//

function reg_showcase(){
echo "
            <div id=choice class='cat8'>
				[ PROJECT SHOWCASING REGISTRATION ]
            </div>
";

echo "
		<div id=choice class='cat0'>
";

include("forms/showcase_reg_form.php");

echo "
		</div>
";

echo "
			<div id=choice class='cat0'>
";

	reg_notice();

echo "
			</div>
";
}

//--------------------------------- REGISTRATION FORM OF SHOWCASING CONTEST ENDS ---------------------//

//--------------------------------- REGISTRATION FORM OF GUEST[CAT7] --------------------------------------//
/*
function reg_guest(){
echo "
            <div id=choice class='cat8'>
				[ GUEST VISITOR REGISTRATION ]
            </div>
";

echo "
		<div id=choice class='cat0'>
";

include("forms/guest_reg_form.php");

echo "
		</div>
";

echo "
			<div id=choice class='cat0'>
";

	reg_notice();

echo "
			</div>
";
}
*/
//--------------------------------- REGISTRATION FORM OF GUEST ENDS ---------------------------------//

//--------------------------------- RANDOM NUMBER GENERATOR -----------------------------------------//

function random(){
				$length = 4 ;
				$charset = "0123456789" ;

				for( $x=1 ; $x <= $length ; $x++ )
					{
						$rand = rand() % strlen($charset);
						$temp = substr( $charset , $rand , 1 );
						$rand_num .= $temp ;
					}
				return $rand_num;
}

//--------------------------------- RANDOM NUMBER GENERATOR ENDS ------------------------------------//

//--------------------------------- REGISTRATION SUMMARY --------------------------------------------//

function all_reg($reg_id , $nameReg , $insName , $reg_date , $ip_address){
include("db_connect.php");
$query = "
			INSERT INTO 
			all_reg
			( reg_id , nameReg , insName , reg_date , ip_address )
			VALUES
			( '$reg_id' , '$nameReg' , '$insName' , '$reg_date' , '$ip_address' )
		";
$result = @mysql_query($query) or die("QUERY ERROR! " . mysql_error());
}

//--------------------------------- REGISTRATION SUMMARY ENDS ---------------------------------------//

//--------------------------------- CATEGORY SELECTOR -----------------------------------------------------//
function category_selector($status , $script_name){
echo "
            <div id=choice class='cat8'>
				[ CATEGORIES ]
            </div>
";
echo"         	
			<div class='align_left'>
				<a href='$script_name?stat=$status&cat=cat1'> <img src='../images/code-rule.jpg' />
				<br>PROGRAMMING<br>CONTEST </a>
			</div>
	      	<div class='align_left'>
				<a href='$script_name?stat=$status&cat=cat2'> <img src='../images/fifa-rule.jpg' /> <br> FIFA </a>
			</div>
          	<div class='align_left'>
				<a href='$script_name?stat=$status&cat=cat3'> <img src='../images/cs-rule.jpg' /> <br> CS </a>
			</div>
            <div class='align_left'>
				<a href='$script_name?stat=$status&cat=cat4'> <img src='../images/ict-rule.jpg' /> <br> ICT </a>
			</div>
            <div class='align_left'>
			     <a href='$script_name?stat=$status&cat=cat5'> <img src='../images/gk-rule.jpg' /> <br> GK </a> 
			</div>   
            <div class='align_left'>
				<a href='$script_name?stat=$status&cat=cat6'> <img src='../images/showcase-rule.jpg' /> <br> SHOWCASING </a> 
			</div>       	
";

}
//--------------------------------- CATEGORY SELECTOR ENDS ------------------------------------------------//

//--------------------------------- RULES -----------------------------------------------------------------//
/*
//GUEST
function rule_guest($status){
echo "
            <div id=choice class='cat8'>
				[ GUEST VISITORS' RULES ]
            </div>
";

echo "
		<div id=choice class='cat0'>
";

include("rules/guest_rules.php");

if($status == "OPEN"){
reg_link2($status ,"cat7");
}

echo "
		</div>
";
}
*/
//PROGRAMMING
function rule_programming($status){
echo "
            <div id=choice class='cat8'>
				[ PROGRAMMING CONTEST RULES ]
            </div>
";

echo "
		<div id=choice class='cat0'>
";

include("rules/pc_rules.php");

if($status == "OPEN"){
reg_link2($status ,"cat1");
}

echo "
		</div>
";
}
//FIFA
function rule_fifa11($status){
echo "
            <div id=choice class='cat8'>
				[ FIFA'11 CONTEST RULES ]
            </div>
";

echo "
		<div id=choice class='cat0'>
";

include("rules/fifa_rules.php");

if($status == "OPEN"){
reg_link2($status ,"cat2");
}

echo "
		</div>
";
}
//COUNTER STRIKE
function rule_counter_strike($status){
echo "
            <div id=choice class='cat8'>
				[ COUNTER STRIKE CONTEST RULES ]
            </div>
";

echo "
		<div id=choice class='cat0'>
";

include("rules/cs_rules.php");

if($status == "OPEN"){
reg_link2($status ,"cat3");
}

echo "
		</div>
";
}
//ICT OLYMPIAD
function rule_ict_olympiad($status){
echo "
            <div id=choice class='cat8'>
				[ ICT OLYMPIAD CONTEST RULES ]
            </div>
";

echo "
		<div id=choice class='cat0'>
";

include("rules/olympiad_rules.php");

if($status == "OPEN"){
reg_link2($status ,"cat4");
}

echo "
		</div>
";
}
//GENERAL KNOWLEDGE
function rule_gk($status){
echo "
            <div id=choice class='cat8'>
				[ GENERAL KNOWLEDGE CONTEST RULES ]
            </div>
";

echo "
		<div id=choice class='cat0'>
";

include("rules/gk_rules.php");

if($status == "OPEN"){
reg_link2($status ,"cat5");
}

echo "
		</div>
";
}
//PROJECT SHOWCASING
function rule_showcase($status){
echo "
            <div id=choice class='cat8'>
				[ PROJECT SHOWCASING CONTEST RULES ]
            </div>
";

echo "
		<div id=choice class='cat0'>
";

include("rules/showcase_rules.php");

if($status == "OPEN"){
reg_link2($status ,"cat6");
}

echo "
		</div>
";
}
//--------------------------------- RULES END --------------------------------------------------------------//

//--------------------------------- POSTAL REGISTRATION ADDRESS --------------------------------------------//

function postal(){
echo "
            <div id=choice class='cat8'>
				[ POSTAL REGISTRATION ADDRESS ]
            </div>
";

echo "	
            <div id=choice class='cat0'>
            <b> Prof. Dr. M. A. Mottalib </b> <br>
				Head of the Department <br>
				Department of Computer Science and Information Technology (CIT) <br>
				Islamic University of Technology (IUT) <br>
				Board Bazar, Gazipur-1704, Bangladesh
            </div>
";
}
//--------------------------------- POSTAL REGISTRATION ADDRESS ENDS ---------------------------------------//

//--------------------------------- SUCCESS MESSAGE --------------------------------------------------------//
function success_msg($id){
	
//--------------------------------------------------------------------------------------------//
echo "
<title>.:: REGISTRATION SUCCESSFUL ::.</title>
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
				REGISTRATION SUCCESSFUL!
            </div>
";
echo "	
            <div id=success class='cat02'>
            THANK YOU !! <br>
            PLEASE BE SURE TO SAVE THE SIX(6) DIGIT CODE BELOW <br> <br> 
";

echo "
		<div class='code'>
			$id <br> <br>
		</div>
" ;

echo "		THIS CODE IS REQUIRED FOR THE ON SITE REGISTRATION AND OTHER NECESSARY PURPOSE. <br>
			ENJOY THE FEST!! <br>
";
echo "
		<div class='back'>
			[ <a href='../main/register.php'>BACK</a> ]
		</div>
";
echo "     </div>
            </center>
";

}
//--------------------------------- SUCCESS MESSAGE ENDS ---------------------------------------------------//

//--------------------------------- FAIL MESSAGE START ----------------------------------------------------//
function fail_msg(){
	
//--------------------------------------------------------------------------------------------//
echo "
<title>.:: REGISTRATION UNSUCCESSFUL ::.</title>
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
				REGISTRATION UNSUCCESSFUL !
            </div>
";
echo "	
            <div id=success class='cat02'>
            THANK YOU FOR TRYING..... !! <br>
            SOMETHING WENT WRONG. <br> (1)YOU MAY NOT FILLED UP ALL THE BOXES. CHECK YOUR INPUT!<BR> 
			(2) YOU MAY NOT CHECKED THE ACCEPT BOX <BR>
			(3) MAY BE DATABSE IS NOT REACHABLE  <BR>
";

echo "	<BR>PLEASE TRY AGAIN LATER OR <br>";
echo " <div class='back'>
[ <a href='../main/contact.php'>CONTACT</a> ] 
	</div>";
echo "
WITH WEB SUPPORT TEAM.<br>
			ENJOY THE FEST!! <br>
";
echo "
		<div class='back'>
			[ <a href='../main/register.php'>BACK</a> ]
		</div>
";
echo "     </div>
            </center>
";

}
//--------------------------------- FAIL MESSAGE ENDS -----------------------------------------------------//

//--------------------------------- TRANSPORTATION ROUTE ---------------------------------------------------//
function transport(){
echo "
            <div id=choice class='cat8'>
				[ TRANSPORTATION ROUTES ]
            </div>
";
include ("xtra/transport-route.php");
}
//--------------------------------- TRANSPORTATION ROUTE ENDS ----------------------------------------------//

//--------------------------------- SCHEDULE ---------------------------------------------------//
function schedule(){
echo "
            <div id=choice class='cat8'>
				[ ICTFEST - 2011 PROGRAMME SCHEDULE ]
            </div>
";
include ("xtra/schedule-page.php");
}
//--------------------------------- SCHEDULE ENDS ----------------------------------------------//

//--------------------------------- ABOUT IUTCS ------------------------------------------------//
function iutcs_page(){
echo "
            <div id=choice class='cat8'>
				[ ABOUT IUTCS ]
            </div>
";
echo "<div class='cat2'>";
include ("xtra/iutcs-page.php");
echo "</div>";
}
//--------------------------------- ABOUT IUTCS ENDS -------------------------------------------//

//--------------------------------- CONTACTS ------------------------------------------------//
function contact_page(){
echo "
            <div id=choice class='cat8'>
				[ CONTACTS ]
            </div>
";
include ("xtra/contact-page.php");
}
//--------------------------------- CONTACTS ENDS -------------------------------------------//

//--------------------------------- SITE SUMMURY FUNCTIONS FOR LEFT COLUMN ---------------------//
function last_registered(){
include_once("db_connect.php");
$query = "SELECT * FROM all_reg ORDER BY reg_date DESC LIMIT 1" ;
$result = mysql_query($query) or die("Can't fetch data!");

while($row = mysql_fetch_assoc($result))
	{
		$id = $row['reg_id'];
		$name = $row['nameReg'];
		$from = $row['insName'];
		$date = $row['reg_date'];
		$ip = $row['ip_address'];
	}
//--------------- match for the pattern of id for section ----------------------//
if($ip == "::1" or $ip == "127.0.0.1"){
$ip = "Localhost";
}
else{
$ip = $ip ;
}

$pattern = "/^[A-Z]{2}/";
preg_match($pattern,$id,$section_arr);
$matched_section = $section_arr[0];

if($matched_section == "PC"){
	$section = "Programming Contest";
}
elseif($matched_section == "FA"){
	$section = "FIFA'11 Contest";
}
elseif($matched_section == "CS"){
	$section = "Counter Strike Contest";
}
elseif($matched_section == "IC"){
	$section = "ICT Olympiad Contest";
}
elseif($matched_section == "GK"){
	$section = "General Knowledge Contest";
}
elseif($matched_section == "SH"){
	$section = "Project Showcasing Contest";
}
elseif($matched_section == "GV"){
	$section = "Guest Visitor";
}
//------------------------------------------------------------------------------//
echo "
<table border='0' width='100%' cellpadding='2px' class='left_color'>

<tr>
	<td colspan='3' class='summary'>LAST REGISTERED</td>
</tr>
	<tr>
		<td class='left_td'>Registration ID </td>
		<td> : </td>
		<td class='right_td'>[ Secured ]</td>
	</tr>
	<tr>
		<td class='left_td'>Registration Name </td>
		<td> : </td>
		<td class='right_td'>$name</td>
	</tr>
	<tr>
		<td class='left_td'>Institute's Name </td>
		<td> : </td>
		<td class='right_td'>$from</td>
	</tr>
	<tr>
		<td class='left_td'>Registered Section </td>
		<td> : </td>
		<td class='right_td'>$section</td>
	</tr>
	<tr>
		<td class='left_td'>Registration Date - Time </td>
		<td> : </td>
		<td class='right_td'>$date</td>
	</tr>
	<tr>
		<td class='left_td'>Registred IP Address </td>
		<td> : </td>
		<td class='right_td'>$ip</td>
	</tr>
</table>
";
}

function total_registered(){
include_once("db_connect.php");
$query = "SELECT * FROM all_reg" ;
$result = mysql_query($query) or die("Can't fetch data!");
$rows = mysql_num_rows($result);
echo " 
		<div class='stat_view'>
			$rows
		</div>
";
}

function total_acm(){
include_once("db_connect.php");
$query = "SELECT * FROM programming_contest" ;
$result = mysql_query($query) or die("Can't fetch data!");
$rows = mysql_num_rows($result);
echo "
		<div class='stat_view'>
			$rows
		</div>
";
}

function total_fifa(){
include_once("db_connect.php");
$query = "SELECT * FROM fifa11_contest" ;
$result = mysql_query($query) or die("Can't fetch data!");
$rows = mysql_num_rows($result);
echo "
		<div class='stat_view'>
			$rows
		</div>
";
}

function total_cs(){
include_once("db_connect.php");
$query = "SELECT * FROM counter_strike_contest" ;
$result = mysql_query($query) or die("Can't fetch data!");
$rows = mysql_num_rows($result);
echo "
		<div class='stat_view'>
			$rows
		</div>
";
}

function total_olympiad(){
include_once("db_connect.php");
$query = "SELECT * FROM ict_olympiad_contest" ;
$result = mysql_query($query) or die("Can't fetch data!");
$rows = mysql_num_rows($result);
echo "
		<div class='stat_view'>
			$rows
		</div>
";
}

function total_gk(){
include_once("db_connect.php");
$query = "SELECT * FROM gk_contest" ;
$result = mysql_query($query) or die("Can't fetch data!");
$rows = mysql_num_rows($result);
echo "
		<div class='stat_view'>
			$rows
		</div>
";
}

function total_showcase(){
include_once("db_connect.php");
$query = "SELECT * FROM showcase_contest" ;
$result = mysql_query($query) or die("Can't fetch data!");
$rows = mysql_num_rows($result);
echo "
		<div class='stat_view'>
			$rows
		</div>
";
}
/*
function total_guest(){
include_once("db_connect.php");
$query = "SELECT SUM(noOfGuest) FROM guest_register" ;
$result = mysql_query($query) or die("Can't fetch data!");
if($row = mysql_fetch_assoc($result))
	{
		$total_guests = $row['SUM(noOfGuest)'];
	}
else
	{
		die("Can't fetch the required data!!");
	}
echo "
		<div class='stat_view'>
			$total_guests
		</div>
";
}*/
//--------------------------------- SITE SUMMURY FUNCTIONS FOR LEFT COLUMN ENDS ----------------------------//
?>
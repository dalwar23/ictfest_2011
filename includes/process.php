<?php
//START THE OUTPUT BUFFER
ob_start(); 
?>

<?php

/**
 * @author arif
 * @copyright 2011
 * @email delwar.hossain.arif@gmail.com
 * @date 16.3.2011 0:21
 */

//----------------------- FUNCTION FILE INCLUSION ---------------------------------//

include("../includes/_functions.php");

//----------------------- END OF FUNCTION FILE INCLUSION ----------------------------//

//----------------------- REGISTRATION STATUS -------------------------------------//

$reg_status = reg_status();
if($reg_status == 1){
$status = "OPEN";
}
else{
$status = "CLOSED";
}

//---------------------- END OF REGISTRATION STATUS --------------------------------//

//---------------------- ASSIGNING THE _GET[] VARIABLES ----------------------------//

$reg_do = $_GET['do'];

//---------------------- END OFASSIGNING THE _GET[] VARIABLES ----------------------//

//--------------------- REGISTRATION PROCESS ---------------------------------------//

if($status == "OPEN"){
	if(isset($reg_do)){
		switch($reg_do){
			case reg_prog:
			reg_prog();
			break;
			case reg_fifa:
			reg_fifa11();
			break;
			case reg_cs:
			reg_cs();
			break;
			case reg_ict_olympiad:
			reg_ict();
			break;
			case reg_gk:
			reg_general_knowledge();
			break;
			case reg_showcase:
			reg_project_showcase();
			break;
		/*	case reg_guest:
			reg_guest_visitor();
			break;*/
		}
	}
	else{
	header("Location:../main/register.php");
	exit;
	}
}
else{
	header("Location:../main/register.php");
	exit;
}

//-------------------- REGISTRATION PROCESS ENDS -----------------------------------//

?>

<!-- *************************************** PROGRAMMING CONTEST REGISTRATION ****************************** -->

<?php
function reg_prog(){
//------------------ POSTED VARIABLES ---------------------------------//
	$teamName = $_POST['teamName'];
	$insName = $_POST['insName'];
	$coachName = $_POST['coachName']; 
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$teamLeader = $_POST['teamLeader'];
	$memberOne = $_POST['memberOne'];
	$memberTwo = $_POST['memberTwo'];
	$accept = $_POST['accept'];
//---------------------------------------------------------------------//
	$reg_date = date("Y-m-d H:i:s");;
	$ip_address = $_SERVER['REMOTE_ADDR'];
	$reg_id = "PC" . random();
//---------------------------------------------------------------------//

	if(isset($_POST['Register4'])){
		include_once("db_connect.php");
		$query = "
					INSERT INTO 
					programming_contest 
					(
					reg_id , teamName , insName , coachName , contact , email , teamLeader , memberOne , memberTwo ,
					reg_date , ip_address 
					)
					VALUES
					(
					'$reg_id' , '$teamName' , '$insName' , '$coachName' , '$contact' , '$email' , '$teamLeader' , '$memberOne',
					'$memberTwo' , '$reg_date' , '$ip_address'
					) 
				";
		if($teamName & $insName & $contact & $email & $accept){
			$result = @mysql_query($query) or die("mySQL query ERROR! " . mysql_error());
				if($result){
					all_reg($reg_id , $teamName , $insName , $reg_date , $ip_address);
					success_msg($reg_id);
				}
		else{
			fail_msg();
		}
	
		}
		else{
		fail_msg();
		}
		
	}
	else{
		header("Location:../main/register.php");
		exit;
	}
}
?>

<!-- *************************************** FIFA CONTEST REGISTRATION ******************************************* -->

<?php
function reg_fifa11(){
//------------------ POSTED VARIABLES ---------------------------------//
	$insName = $_POST['insName'];
	$partName = $_POST['partName'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$accept = $_POST['accept'];
//---------------------------------------------------------------------//
	$reg_date = date("Y-m-d H:i:s");;
	$ip_address = $_SERVER['REMOTE_ADDR'];
	$reg_id = "FA" . random();
//---------------------------------------------------------------------//

	if(isset($_POST['Register2'])){
		include_once("db_connect.php");
		$query = "
					INSERT INTO 
					fifa11_contest 
					(
					reg_id , insName , partName , contact , email , reg_date , ip_address 
					)
					VALUES
					(
					'$reg_id' , '$insName' , '$partName' , '$contact' , '$email' , '$reg_date' , '$ip_address'
					) 
				";
		if($partName & $insName & $contact & $email & $accept){
		$result = @mysql_query($query) or die("mySQL query ERROR! " . mysql_error());
			if($result){
			all_reg($reg_id , $partName , $insName , $reg_date , $ip_address);
			success_msg($reg_id);
			}
		else{
			fail_msg();
		}
		}
		else{
		fail_msg();
		}
	}
	else{
		header("Location:../main/register.php");
		exit;
	}

}
?>

<!-- *************************************** CS CONTEST REGISTRATION ******************************************* -->

<?php
function reg_cs(){
//------------------ POSTED VARIABLES ---------------------------------//
	$teamName = $_POST['teamName'];
	$insName = $_POST['insName'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$playerOne = $_POST['playerOne'];
	$playerTwo = $_POST['playerTwo'];
	$playerThree = $_POST['playerThree'];
	$playerFour = $_POST['playerFour'];
	$playerFive = $_POST['playerFive'];
	$accept = $_POST['accept'];
//---------------------------------------------------------------------//
	$reg_date = date("Y-m-d H:i:s");;
	$ip_address = $_SERVER['REMOTE_ADDR'];
	$reg_id = "CS" . random();
//---------------------------------------------------------------------//

	if(isset($_POST['Register3'])){
		include_once("db_connect.php");
		$query = "
					INSERT INTO 
					counter_strike_contest 
					(
					reg_id , teamName , insName , contact , email , playerOne , playerTwo , playerThree , playerFour , 
					playerFive , reg_date , ip_address 
					)
					VALUES
					(
					'$reg_id' , '$teamName' , '$insName' , '$contact' , '$email' ,'$playerOne', '$playerTwo' , '$playerThree' , 
					'$playerFour' , '$playerFive' , '$reg_date' , '$ip_address'
					) 
				";
		if($teamName & $insName & $contact & $email & $accept){
		$result = @mysql_query($query) or die("mySQL query ERROR! " . mysql_error());
			if($result){
			all_reg($reg_id , $teamName , $insName , $reg_date , $ip_address);
			success_msg($reg_id);
		}
		else{
			fail_msg();
		}
		}
		else{
		fail_msg();
		}
	}
	else{
		header("Location:../main/register.php");
		exit;
	}
}
?>

<!-- *************************************** OLYMPIAD CONTEST REGISTRATION *************************************** -->

<?php
function reg_ict(){
//------------------ POSTED VARIABLES ---------------------------------//
	$insName = $_POST['insName'];
	$partName = $_POST['partName'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$accept = $_POST['accept'];
//---------------------------------------------------------------------//
	$reg_date = date("Y-m-d H:i:s");;
	$ip_address = $_SERVER['REMOTE_ADDR'];
	$reg_id = "IC" . random();
//---------------------------------------------------------------------//

	if(isset($_POST['Register1'])){
		include_once("db_connect.php");
		$query = "
					INSERT INTO 
					ict_olympiad_contest 
					(
					reg_id , insName , partName , contact , email , reg_date , ip_address 
					)
					VALUES
					(
					'$reg_id' , '$insName' , '$partName' , '$contact' , '$email' , '$reg_date' , '$ip_address'
					) 
				";
		if($insName & $partName & $contact & $email & $accept){
		$result = @mysql_query($query) or die("mySQL query ERROR! " . mysql_error());
			if($result){
			all_reg($reg_id , $partName , $insName , $reg_date , $ip_address);
			success_msg($reg_id);
			}
			else{
			fail_msg();
			}
		}
		else{
		fail_msg();
	}

	}
	else{
		header("Location:../main/register.php");
		exit;
	}
}
?>

<!-- *************************************** GENERAL KNOWLEDGE CONTEST REGISTRATION ****************************** -->

<?php
function reg_general_knowledge(){
//------------------ POSTED VARIABLES ---------------------------------//
	$teamName = $_POST['teamName'];
	$insName = $_POST['insName'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$partNameOne = $_POST['partNameOne'];
	$partNameTwo = $_POST['partNameTwo'];
	$accept = $_POST['accept'];
//---------------------------------------------------------------------//
	$reg_date = date("Y-m-d H:i:s");;
	$ip_address = $_SERVER['REMOTE_ADDR'];
	$reg_id = "GK" . random();
//---------------------------------------------------------------------//

	if(isset($_POST['Register0'])){
		include_once("db_connect.php");
		$query = "
					INSERT INTO 
					gk_contest 
					(
					reg_id , teamName , insName , contact , email , partNameOne , partNameTwo ,	reg_date , ip_address 
					)
					VALUES
					(
					'$reg_id' , '$teamName' , '$insName' , '$contact' , '$email' , '$partNameOne' , '$partNameTwo',
					'$reg_date' , '$ip_address'
					) 
				";
		if($teamName & $insName & $contact & $email & $accept){
		$result = @mysql_query($query) or die("mySQL query ERROR! " . mysql_error());
			if($result){
			all_reg($reg_id , $teamName , $insName , $reg_date , $ip_address);
			success_msg($reg_id);
			}
			else{
			fail_msg();
			}
		}
		else{
		fail_msg();
		}
	}
	else{
		header("Location:../main/register.php");
		exit;
	}
}
?>

<!-- *************************************** PROJECT SHOCASING CONTEST REGISTRATION ****************************** -->

<?php
function reg_project_showcase(){
//------------------ POSTED VARIABLES ---------------------------------//
	$insName = $_POST['insName'];
	$partName = $_POST['partName'];
	$partnerName1 = $_POST['partnerName1'];
	$partnerName2 = $_POST['partnerName2'];
	$projectName = $_POST['projectName'];
	$projectType = $_POST['projectType'];
	$projectDesc = $_POST['projectDesc'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$accept = $_POST['accept'];
//---------------------------------------------------------------------//
	$reg_date = date("Y-m-d H:i:s");;
	$ip_address = $_SERVER['REMOTE_ADDR'];
	$reg_id = "SH" . random();
//---------------------------------------------------------------------//

	if(isset($_POST['Register'])){
		include_once("db_connect.php");
		$query = "
					INSERT INTO 
					showcase_contest 
					(
					reg_id , insName , partName , partnerName1 , partnerName2 , projectName , projectType , projectDesc , contact , email ,
					reg_date , ip_address 
					)
					VALUES
					(
					'$reg_id' , '$insName' , '$partName' , '$partnerName1' , '$partnerName2' , '$projectName' , '$projectType' , 
					'$projectDesc' , '$contact' , '$email' , '$reg_date' , '$ip_address'
					) 
				";
		if($partName & $insName & $contact & $email & $accept){
		$result = @mysql_query($query) or die("mySQL query ERROR! " . mysql_error());
			if($result){
			all_reg($reg_id , $partName , $insName , $reg_date , $ip_address);
			success_msg($reg_id);
			}
			else{
				fail_msg();
			}
		}
		else{
		fail_msg();
		}
	}
	else{
		header("Location:../main/register.php");
		exit;
	}

}
?>

<!-- *************************************** ICTFEST GUEST VISITOR REGISTRATION ****************************** -->

<?php
/*
function reg_guest_visitor(){
//------------------ POSTED VARIABLES ---------------------------------//
	$insName = $_POST['insName'];
	$partName = $_POST['partName'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$noOfGuest = $_POST['noOfGuest'];
//---------------------------------------------------------------------//
	$reg_date = date("Y-m-d H:i:s");;
	$ip_address = $_SERVER['REMOTE_ADDR'];
	$reg_id = "GV" . random();
//---------------------------------------------------------------------//

	if(isset($_POST['Register5'])){
		include_once("db_connect.php");
		$query = "
					INSERT INTO 
					guest_register 
					(
					reg_id , insName , partName , contact , email , noOfGuest , reg_date , ip_address 
					)
					VALUES
					(
					'$reg_id' , '$insName' , '$partName' , '$contact' , '$email' , '$noOfGuest' , '$reg_date' , '$ip_address'
					) 
				";
		$result = mysql_query($query) or die("mySQL query ERROR! " . mysql_error());
		
		if($result){
			all_reg($reg_id , $partName , $insName , $reg_date , $ip_address);
			success_msg($reg_id);
		}
		else{
			fail_msg();
		}
	}
	else{
		header("Location:../main/register.php");
		exit;
	}
}*/
?>

<!-- ******************************************************************************************************************** -->

<!-- CLOSE THE OUTPUT BUFFER -->
<?php
ob_flush();
?>

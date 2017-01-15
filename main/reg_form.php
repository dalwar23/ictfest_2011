<?php
//START THE OUTPUT BUFFER
ob_start(); 
?>
<?php
/**
 * @author arif
 * @copyright 2011
 * @email delwar.hossain.arif@gmail.com
 * @date 8.3.2011 21:34
 */
 
 //----------------------- SCRIPT NAME ---------------------------------------------//

$script_name = "reg_form.php";

//---------------------------------------------------------------------------------//

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

$reg_status = $_GET['stat'];
$category = $_GET['cat'];

//---------------------- END OFASSIGNING THE _GET[] VARIABLES ----------------------//
?>


<?php
_header();
?>


<?php
_menu(9);
?>

	
<?php
_left();
?>


<?php
_centerup();
?>


            <div class="stat">REGISTRATION <?php echo $status; ?> </div><br />
            <?php
				if(isset($category)){
					switch($category){
						case cat1:
							reg_programming();
							postal();
							category_selector($status , $script_name);
						break;
						case cat2:
							reg_fifa();
							postal();
							category_selector($status,$script_name);
						break;
						case cat3:
							reg_counter_strike();
							postal();
							category_selector($status,$script_name);
						break;
						case cat4:
							reg_ict_olympiad();
							postal();
							category_selector($status,$script_name);
						break;
						case cat5:
							reg_gk();
							postal();
							category_selector($status,$script_name);
						break;
						case cat6:
							reg_showcase();
							postal();
							category_selector($status,$script_name);
						break;
						case cat7:
							reg_guest();
							postal();
							category_selector($status,$script_name);
						break;
					}
				}
				else{
				header("Location:register.php");
				exit;
				} 
			?>
            

<?php 
_right();
?>


<?php
_footer();
?>


<?php
ob_flush();
?>


<?php

/**
 * @author arif
 * @copyright 2011
 * @email delwar.hossain.arif@gmail.com
 * @date 16.3.2011 21:18
 */

//----------------------- SCRIPT NAME ---------------------------------------------//

$script_name = "rules.php";

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

//---------------------- COLLECTING THE GET VARIABLES ------------------------------//

$category = $_GET["cat"];

//----------------------------------------------------------------------------------//

?>


<?php
_header();
?>


<?php
_menu(5);
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
										rule_programming($status);
										category_selector($status,$script_name);
									break;
									case cat2:
										rule_fifa11($status);
										category_selector($status,$script_name);
									break;
									case cat3:
										rule_counter_strike($status);
										category_selector($status,$script_name);
									break;
									case cat4:
										rule_ict_olympiad($status);
										category_selector($status,$script_name);
									break;
									case cat5:
										rule_gk($status);
										category_selector($status,$script_name);
									break;
									case cat6:
										rule_showcase($status);
										category_selector($status,$script_name);
									break;
									case cat7:
										rule_guest($status);
										category_selector($status,$script_name);
									break;
								}
						}
						else{
						category_selector($status,$script_name);
						}
					?>


<?php 
_right();
?>


<?php
_footer();
?>

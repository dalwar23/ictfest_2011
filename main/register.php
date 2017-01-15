<?php
/**
 * @author arif
 * @copyright 2011
 * @email delwar.hossain.arif@gmail.com
 * @date 8.3.2011 21:34
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

?>


<?php
_header();
?>


<?php
_menu(3);
?>

	
<?php
_left();
?>


<?php
_centerup();
?>




            <div class="stat">REGISTRATION <?php echo $status; ?> </div><br />
            <?php
            if($status == "OPEN"){
				category_header();
            	category($status);
			}
			else{
			reg_closed();
			}
			?>

<?php 
_right();
?>


<?php
_footer();
?>


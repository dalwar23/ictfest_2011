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

<!-- HEADER OF THE SITE -->
<?php
_header();
?>

<!-- MENU -->
<?php
_menu(4);
?>

<!-- LEFT COLUMN OF THE SITE -->	
<?php
_left();
?>

<!-- CENTER COLUMN OF THE SITE -->
<?php
_centerup();
?>

<!-- ************************* CONTENT OF CENTER COLUMN ************************* -->

            <!-- ICTFEST 2011 EVENTS-->
            <div class="stat">REGISTRATION <?php echo $status; ?> </div><br />
            
            		<?php
            			xtra_events();
						category($status); 
					?>

<!-- ************************* END OF CONTENT OF CENTER COLUMN ************************* -->

<!-- RIGHT COLUMN OF THE SITE -->
<?php 
_right();
?>

<!-- FOOTER OF THE SITE -->
<?php
_footer();
?>

<!-- END OF THE SITE -->

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
_menu(1);
?>

	
<?php
_left();
?>


<?php
_centerup();
?>

			    <div class="stat">REGISTRATION <?php echo $status; ?> </div>
                <br >
				<div id="choice1">
				    <div class="cat2">
						Welcome. We are very pleased to inform you that IUT Computer Society (IUTCS) is going to organize 
						<b>IBBL IUT 3rd NATIONAL ICT FEST - 2011.</b> After the Successful completion of PRIME BANK IUT 1st NATIONAL ICT FEST - 2008 and AB BANK IUT 2nd NATIONAL ICT FEST - 2009 , IUTCS in keeping with this tradition of success to hold yet another National ICT Fest this year.
						</div> <br>
                	<table border="0px solid black" align="center" width="450">

                    	<tr>
                        	<td colspan="2" width="inherit" align="center" id="choice1">
                           <script type="text/javascript" src="../javascripts/slide_show.js" language="javascript"></script> 
                            </td>
                        </tr>
                        <tr>
                        	<td colspan="2" align="center" class="left_outline">
                            <h2> IBBL IUT 3rd NATIONAL ICT FEST 2011 </h2> 
                            </td>
                        </tr>
                        <tr>
                        	<td colspan="2">
                            <br >
                            </td>
                        </tr>
                        <tr>
                        	<td width="50%" align="left" class="outline">
                            <a href="http://www.iutoic-dhaka.edu/ictfest2008" target="_new"><img src="../images/iut_fest1.jpg" ></a>
                            </td>
                            <td width="50%" align="right" class="outline">
                           <a href="http://www.iutoic-dhaka.edu/ictfest2009" target="_new"><img src="../images/iut_fest2.jpg" ></a>
                            </td>
                        </tr>
                        <tr>
                        	<td align="left">
                            <a href="http://www.iutoic-dhaka.edu/ictfest2008" target="_new"><h2>PRIME BANK IUT 1st ICT FEST 2008</h2></a>
                            </td>
                        	<td align="right">
                            <a href="http://www.iutoic-dhaka.edu/ictfest2009" target="_new"><h2>AB BANK IUT 2nd ICT FEST 2009</h2></a>
                            </td>                            
                        </tr>
                    </table> 
</div>

<?php 
_right();
?>

<?php
_footer();
?>


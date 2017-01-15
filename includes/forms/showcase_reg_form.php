<?php

/**
 * @author arif
 * @copyright 2011
 * @email delwar.hossain.arif@gmail.com
 * @date 15.3.2011 0:14
 */
 echo "
<form method='POST' action='../includes/process.php?do=reg_showcase'>
		<table border='0' style='border-collapse: collapse' width='100%'>
								<tr>
									<td align='left' valign='top'>Institution Name</td>
									<td align='left' valign='top'>:</td>
									<td align='left' valign='top'>
									<input type='text' name='insName' size='30' class='textbox' value=''></td>
								</tr>
								<tr>
									<td align='left' valign='top'>Team Leader</td>
									<td align='left' valign='top'>:</td>
									<td align='left' valign='top'>
									<input type='text' name='partName' size='30' class='textbox' value=''></td>
								</tr>
								<tr>
									<td align='left' valign='top'>Partner's Name [ 1 ]</td>
									<td align='left' valign='top'>:</td>
									<td align='left' valign='top'>
									<input type='text' name='partnerName1' size='30' class='textbox' value=''></td>
								</tr>
								<tr>
									<td align='left' valign='top'>Partner's Name [ 2 ]</td>
									<td align='left' valign='top'>:</td>
									<td align='left' valign='top'>
									<input type='text' name='partnerName2' size='30' class='textbox' value=''></td>
								</tr>
								<tr>
									<td align='left' valign='top'>Project Name</td>
									<td align='left' valign='top'>:</td>
									<td align='left' valign='top'>
									<input type='text' name='projectName' size='30' class='textbox' value=''></td>
								</tr>
								<tr>
									<td align='left' valign='top'>Project Type</td>
									<td align='left' valign='top'>:</td>
									<td align='left' valign='top'>
									<select size='1' name='projectType' class='dropdown'>
									<option selected value='Software'>Software</option>
									<option value='Hardware'>Hardware</option>
									</select></td>
								</tr>
								<tr>
									<td align='left' valign='top'>Project Description</td>
									<td align='left' valign='top'>:</td>
									<td align='left' valign='top'>
									<textarea rows='3' name='projectDesc' cols='31' class='textarea'></textarea></td>
								</tr>
								<tr>
									<td align='left' valign='top'>Contact</td>
									<td align='left' valign='top'>:</td>
									<td align='left' valign='top'>
									<input type='text' name='contact' size='30' class='textbox' value=''></td>
								</tr>
								<tr>
									<td align='left' valign='top'>Email</td>
									<td align='left' valign='top'>:</td>
									<td align='left' valign='top'>
									<input type='text' name='email' size='30' class='textbox' value=''></td>
								</tr>
								<tr>
									<td align='left' valign='top'>&nbsp;</td>
									<td align='left' valign='top'>&nbsp;</td>
									<td align='left' valign='top'>&nbsp;
									</td>
								</tr>
								<tr>
								<td colspan='3'><input name='accept' type='checkbox'>I hereby accept all the rules stated and I understand and accept ANY DECISION TAKEN BY IUTCS. </td>
								</tr>
								<tr>
									<td align='left' valign='top'>&nbsp;</td>
									<td align='left' valign='top'>&nbsp;</td>
									<td align='right' valign='top'>
									<input type='submit' value='Register' name='Register' class='button'></td>
								</tr>
						</table>
			</form>
";
?>
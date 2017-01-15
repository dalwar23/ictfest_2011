<?php

/**
 * @author arif
 * @copyright 2011
 * @email delwar.hossain.arif@gmail.com
 * @date 14.3.2011 22:38
 */
echo "
<form method='POST' action='../includes/process.php?do=reg_fifa'>
		<table border='0' style='border-collapse: collapse' width='100%'>
								<tr>
									<td align='left' valign='top'>Institution Name</td>
									<td align='left' valign='top'>:</td>
									<td align='left' valign='top'>
									<input type='text' name='insName' size='30' class='textbox' value=''></td>
								</tr>
								<tr>
									<td align='left' valign='top'>Participant Name</td>
									<td align='left' valign='top'>:</td>
									<td align='left' valign='top'>
									<input type='text' name='partName' size='30' class='textbox' value=''></td>
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
									<input type='submit' value='Register' name='Register2' class='button'></td>
								</tr>
						</table>
		</form>
";

?>
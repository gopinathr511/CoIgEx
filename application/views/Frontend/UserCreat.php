<script type="text/javascript" src="<?php echo base_url('skin/js/RegFormVali.js');?>"></script>

<?php
echo "<br />&nbsp;&nbsp;&nbsp;Hai!!, $results['fname1']...";
?>
<input type="button" value="Back" class="button" onclick="translat()" style="float:right;margin-right:10%;width:55px;"/>
<br/>
<center>
	<h2 style="width:60%">User Registration Details</h2>
		<table border="0">
		
			<tr>
				<td colspan='2' align="center">
					<hr width='100%' />
				</td>
			</tr>
			
			<tr>
				<td class="inputLabelClass">
					Full Name :
				</td>
				
				<td class="inputTDClass">
					<?php echo $results['fname1'];?>
				</td>
			</tr>
			
			<tr>
				<td class="inputLabelClass">
					Gender :
				</td>
				
				<td class="inputTDClass">
					<?php echo $results['gender1'];?>
				</td>
			</tr>
			
			<tr>
				<td class="inputLabelClass">
					Age :
				</td>
				
				<td class="inputTDClass">
					<?php echo $results['age1'];?>
				</td>
			</tr>
			
			<tr>
				<td class="inputLabelClass">
					Address :
				</td>
				
				<td class="inputTDClass">
					<?php echo $results['raddr1'];?>
				</td>
			</tr>
			
			<tr>
				<td class="inputLabelClass">
					Contact :
				</td>
				
				<td class="inputTDClass">
					<?php echo $results['contact1'];?>
				</td>
			</tr>
			
			<tr>
				<td class="inputLabelClass">
					UserName :
				</td>
				
				<td class="inputTDClass">
					<?php echo $results['userna1'];?>
				</td>
			</tr>
			
			<tr>
				<td class="inputLabelClass">
					Password :
				</td>
				
				<td class="inputTDClass">
					<?php
						$le=strlen($results['passwr1']);
						for($i=0;$i<$le;$i++){
							echo "*";
						}
					?>
				</td>
			</tr>
			
			<tr>
				<td colspan='2' align="center"></td>
			</tr>
			
			<tr>
				<td colspan='2' align="center"><hr width='100%' /></td>
			</tr>
			
		</table>
	</form>
<center>
<br/><br/>
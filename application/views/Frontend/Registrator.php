<script type="text/javascript" src="<?php echo base_url('skin/js/RegFormVali.js');?>"></script>

<?php
echo "<br />&nbsp;&nbsp;&nbsp;Hai!!, Guest...";
?>
<input type="button" value="Back" class="button" onclick="translat()" style="float:right;margin-right:10%;width:55px;"/>
<br/>
<center>
	<h2 style="width:60%">User Registration Page</h2>
	<input type="hidden" id="usho" name="usho" value="0" />
	<input type="hidden" id="paho" name="paho" value="0" />
	<input type="hidden" id="pmho" name="pmho" value="0" />
	
	<form method="post" onsubmit="return totValida('usho','paho','pmho')" action="<?php echo base_url('index.php/Frontend/StartCont/regDetails/');?>">
		<table border="0">
		
			<tr>
				<td colspan='2' align="center">
					<hr width='100%' />
				</td>
			</tr>
			
			<tr>
				<td class="inputLabelClass">
					Full Name
				</td>
				
				<td class="inputTDClass">
					<input type="text" id="fullna1" name="fullna1" required placeholder="FullName" maxlength="30" class="inputElementClass" />
				</td>
			</tr>
			
			<tr>
				<td class="inputLabelClass">
					Gender
				</td>
				
				<td class="inputTDClass">
					<select id="gender1" name="gender1" class="inputElementClass">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<td class="inputLabelClass">
					Age
				</td>
				
				<td class="inputTDClass">
					<input type="number" id="ager1" name="ager1" required placeholder="Age" maxlength="3" class="inputElementClass" onkeyup="numerial('ager1','v','125')" onblur="numerial('ager1','v','125')"/>
				</td>
			</tr>
			
			<tr>
				<td class="inputLabelClass">
					Address
				</td>
				
				<td class="inputTDClass">
					<textarea name="address1" id="address1" rows="3" cols="30" required placeholder="Address" maxlength="90" class="textAreaClass"></textarea>
				</td>
			</tr>
			
			<tr>
				<td class="inputLabelClass">
					Contact
				</td>
				
				<td class="inputTDClass">
					<input type="number" id="contact1" name="contact1" required placeholder="Contact" maxlength="15" class="inputElementClass" onkeyup="numerial('contact1')" onblur="numerial('contact1')"/>
				</td>
			</tr>
			
			<tr>
				<td class="inputLabelClass">
					UserName
				</td>
				
				<td class="inputTDClass">
					<input type="text" id="userna1" name="userna1" required placeholder="UserName" maxlength="30" class="inputElementClass" onBlur="userVali('userna1','usho','userRs')"/>
					<div style="width:40%" id="userRs"></div>
				</td>
			</tr>
			
			<tr>
				<td class="inputLabelClass">
					Password
				</td>
				
				<td class="inputTDClass">
					<input type="password" id="passwr1" name="passwr1" required placeholder="Password" maxlength="12" class="inputElementClass" onBlur="passVali('passwr1','paho','passRs','6');passMVali('passwr2','passwr1','pmho','passmR')"/>
					<div style="width:40%" id="passRs"></div>
				</td>
			</tr>
			
			<tr>
				<td class="inputLabelClass">
					Retype Password
				</td>
				
				<td class="inputTDClass">
					<input type="password" id="passwr2" name="passwr2" required placeholder="Password" maxlength="12" class="inputElementClass" onBlur="passMVali('passwr2','passwr1','pmho','passmR')"/>
					<div style="width:40%" id="passmR"></div>
				</td>
			</tr>
			
			<tr>
				<td colspan='2' align="center"></td>
			</tr>
			
			<tr>
				<td colspan='2' align="center"><input type="submit" value="Inside" class="button"/></td>
			</tr>
			
			<tr>
				<td colspan='2' align="center"><hr width='100%' /></td>
			</tr>
			
		</table>
	</form>
<center>
<br/><br/>
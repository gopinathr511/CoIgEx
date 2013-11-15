<script>

	function translat(){
		location.href="<?php echo base_url('index.php/Frontend/StartCont/regist/');?>";
	}

</script>
<br/>
<center>
	<h2>User Login Page</h2>
	<hr width='30%' />
	<form method="post" action="<?php echo base_url('index.php/Frontend/StartCont/validatori/');?>">
		<table>
			<tr>
				<td>UserName</td>
				<td><input type="text" id="userna1" name="userna1" required placeholder="UserName" value="" /></td>
			</tr>
			
			<tr>
				<td>Password</td>
				<td><input type="password" id="passwr1" name="passwr1" required placeholder="Password" value="" /></td>
			</tr>
			<tr>
				<td colspan='2' align="center"><input type="submit" value="Get Through" class="button"/></td>
			</tr>
			<tr>
				<td colspan='2' align="center"><hr width='100%' /></td>
			</tr>
			<tr>
				<td colspan='2' align="right"><input type="button" value="Join Us" class="button" onclick="translat()" /></td>
			</tr>
		</table>
	</form>
<center>
<br/><br/>

<?php
	/*$udata = array("name"=> "userna2","id"=> "userna2","size"=> 15);
	$pdata = array("name"=> "passwr2","id"=> "passwr2","size"=> 15);
	echo form_open("/Frontend/StartCont/validatori/");
	echo '<p> <label for="userna2"> Username </label> <br/>';
	echo form_input($udata) . "</p>";
	echo '<p> <label for="passwr2"> Password </label> <br/>';
	echo form_password($pdata) . "</p>";
	echo form_submit("submit","Get Through");
	echo form_close();*/
?>


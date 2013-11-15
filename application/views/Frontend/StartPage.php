<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('skin/css/styles.css');?>"/>
		<title>My Experiments With CodeIgniter</title>
	</head>

	<body>
		<div id="totalbrooks">
			<div class="HeaderC">
			<?php $this->load->view('Frontend/Header');?>
			</div>
			<div class="MainContentC">
			<?php $this->load->view($maincontP);?>
			</div>
			<!--<div class="MainC1C">
			<?php //$this->load->view($mainc1P);?>
			</div>-->
			<div class="FooterC">
			<?php $this->load->view('Frontend/Footer');?>
			</div>
		</div>
	</body>
</html>
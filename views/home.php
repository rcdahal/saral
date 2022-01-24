<?php include('header.php');?>
<div class="container">
	<div class="jumbotron mt-4">
		<h2 align="center">ADMIN AND CO ADMIN DASHBOARD</h2><hr>
		<div class="mt-4">
			<div class="row">
				<?php if(($chkadmin)):?>
				<div class="col-md-4">
					<?php echo anchor("welcome/adminRegister","ADMIN REGISTER",['class'=>'btn btn-primary']);?>
				</div>
			<?php else:?>
				
			<?php endif;?>
				<div class="col-md-4">
					<?php echo anchor("welcome/login","ADMIN LOGIN",['class'=>'btn btn-primary']);?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>



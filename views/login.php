<?php 
include ('header.php');?>
<div class="container mt-4">
	<h2 align="center">ADMIN LOGIN</h2><hr>
    
        
<?php echo form_open('welcome/adminLogin');?>
<?php if($msg=$this->session->flashdata('message')):?>
	<div class="row">
		<div class="col-md-6">
			<div class="alert alert-dismissible alert-success">
				<?php echo $msg;?>
			</div>
			
		</div>
		
	</div>
<?php endif;?>


<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label">Email</label>
				<div class="col-md-9">
					<?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Email','value'=>set_value('email')]);?>
				</div>
				<?php echo form_error('email','<div class="text-danger">','</div>');?>
			</div>
	</div>

</div>


<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-md-3 control-label">Password</label>
				<div class="col-md-9">
					<?php echo form_input(['name'=>'password','type'=>'password','class'=>'form-control','placeholder'=>'Password']);?>
				</div>
						<?php echo form_error('password','<div class="text-danger">','</div>');?>

			</div>
	</div>
	
	

</div>


<div  style="margin-top:10px;">
    	<?php echo form_submit(['class'=>'btn btn-primary','type'=>'submit','value'=>'Login']);?>
    		<?php echo anchor("welcome","BACK",['class'=>'btn btn-primary']);?>


    </div>

</div>
	
    <?php 
include('footer.php');
?>

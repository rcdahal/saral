<?php 
include ('header.php');?>
<div class="container mt-4">
	<h2 align="center">ADMIN REGISTRATION</h2><hr>
    
        
<?php echo form_open('welcome/adminSIgnup');?>
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
		<div class="col-lg-6">
			<div class="form-group">
				<label class="col-lg-3 control-label">Username</label>
				<div class="col-lg-9">
					<?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Username','value'=>set_value('username')]);?>
				</div>
				<?php echo form_error('username','<div class="text-danger">','</div>');?>
			</div>
	</div>

</div>

<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label class="col-md-3 control-label">Email</label>
				<div class="col-lg-9">
					<?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Email','value'=>set_value('email')]);?>
				</div>
				<?php echo form_error('email','<div class="text-danger">','</div>');?>
			</div>
	</div>

</div>
<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label class="col-md-3 control-label">Gender</label>
				<select class="col-lg-9" name="gender">
					<option value="">Select</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					
				</select>
				<?php echo form_error('gender','<div class="text-danger">','</div>');?>
			</div>
	</div>
	


</div>
<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label class="col-md-3 control-label">Role</label>
				<select class="col-lg-9" name="role_id">
					<option value="">Select</option>
					<?php If(count($roles)):?>
					<?php foreach ($roles as $role): ?>
					
					<option value="<?php echo $role->role_id;?>"><?php echo $role->rolename;?></option>
					<?php endforeach;?>
					<?php endif;?>
				</select>
				<?php echo form_error('role_id','<div class="text-danger">','</div>');?>
			</div>
	</div>
	


</div>
<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label class="col-md-3 control-label">Password</label>
				<div class="col-lg-9">
					<?php echo form_input(['name'=>'password','type'=>'password','class'=>'form-control','placeholder'=>'Password']);?>
				</div>
						<?php echo form_error('password','<div class="text-danger">','</div>');?>

			</div>
	</div>
	
	

</div>
<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label class="col-lg-3 control-label">Confirm Password</label>
				<div class="col-lg-9">
					<?php echo form_input(['name'=>'againpassword','type'=>'password','class'=>'form-control','placeholder'=>'Password']);?>
				</div>
				<?php echo form_error('againpassword','<div class="text-danger">','</div>');?>
			</div>
	</div>
	


</div>



   

    
    <div  style="margin-top:10px;">
    	<?php echo form_submit(['class'=>'btn btn-primary','type'=>'submit','value'=>'Register']);?>
    		<?php echo anchor("welcome","BACK",['class'=>'btn btn-primary']);?>


    </div>

</div>
	
    <?php 
include('footer.php');
?>

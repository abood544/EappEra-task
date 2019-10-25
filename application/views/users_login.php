<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once('templates/header.php');
?>
	<div class="container">



		 <?php if ($msg = $this->session->flashdata('msg')):?>
  		<div class="alert alert-dismissible alert-danger">
     	 <strong>Warning! </strong><?php echo $msg;?>
   		 </div>
   		 <?php endif;?>  
		<?php echo form_open('users/user_login_validat'); ?>
		<div class=" mx-auto card text-whitef bg-secondaryform mb-3" style="max-width: 20rem;">
		  <h1 class="card-header">Login</h1>
		  <div class="card-body">
		    <div class="form-group">
			  <label class="col-form-label col-form-label-sm" for="inputSmall">Email</label>
			   <?php echo form_error('user_email', '<p class="text-danger">', '</p>'); ?>
          <?php echo form_input(['name'=>'user_email','placeholder'=>'Enter your Email','class'=>'form-control shadow'],set_value('user_email')); ?>
			</div>
			<div class="form-group">
			  <label class="col-form-label col-form-label-sm" for="inputSmall">Password</label>
			  <?php echo form_error('user_password', '<p class="text-danger">', '</p>'); ?>
          <?php echo form_password(['name'=>'user_password','placeholder'=>'Enter your Password','class'=>'form-control shadow'],set_value('user_password')); ?>
			</div>
		  </div>
		  <div class="card-body">
		  	 <div class="form-group">
		  		<?php echo form_submit(['name'=>'loginsubmit', 'value'=>'Login','class'=>'btn btn-success shadow bt-lg btn-block']); ?> 
		  		<?php echo anchor(base_url(), 'Cancel', ['class'=>'btn btn-light  shadow bt-lg btn-block']);?>
		  	 </div>
		  </div>
		</div>
	</div>
<?php
include_once('templates/footer.php');
?>
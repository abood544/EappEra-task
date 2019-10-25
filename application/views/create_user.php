<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once('templates/header.php');
?>
	<div class="container">
    <?php if ($msg = $this->session->flashdata('msg')):?>
  <div class="alert alert-dismissible alert-success">
      <strong>done!</strong><?php echo $msg;?>
    </div>
    <?php endif;?>  
    <?php echo form_open('users/add_user'); ?>
    <div class=" mx-auto card text-whitef bg-secondaryform mb-3" style="max-width: 50rem;">
      <h1 class="card-header">Create New User</h1>
      <div class="card-body">


        <div class="form-group">
          <label for="inputname">User Name</label>
          <?php echo form_error('user_name', '<p class="text-danger">', '</p>'); ?>
          <?php echo form_input(['name'=>'user_name','placeholder'=>'Enter your name','class'=>'form-control shadow'],set_value('user_name')); ?>
        </div>
        <div class="form-group">
          <label for="inputemail">Email address</label>
          <?php echo form_error('user_email', '<p class="text-danger">', '</p>'); ?>
          <?php echo form_input(['name'=>'user_email','placeholder'=>'Enter email','class'=>'form-control shadow'],set_value('user_email')); ?>
          <small id="emailHelp" class="form-text text-muted">email@example.com.</small>
        </div>
        <div class="form-group">
          <label for="inputpassword">Password</label> 
          <?php echo form_error('user_password', '<p class="text-danger">', '</p>'); ?>
          <?php echo form_password(['name'=>'user_password','placeholder'=>'Enter a Password','class'=>'form-control shadow']); ?>
        </div>
        <div class="form-group">
          <label for="inputpasswordC">Confirm Password</label>
          <?php echo form_error('user_passwordC', '<p class="text-danger">', '</p>'); ?>
          <?php echo form_password(['name'=>'user_passwordC','placeholder'=>'Confirm The Password','class'=>'form-control shadow']); ?>
        </div>
        <div class="form-group">
          <label for="inputphone">Phone</label>
           <?php echo form_error('user_phone', '<p class="text-danger">', '</p>'); ?>
          <?php echo form_input(['name'=>'user_phone','placeholder'=>'Enter phone number','class'=>'shadow form-control'],set_value('user_phone')); ?>
        </div>
        <div class="form-group">
          <label for="inputaddres">Address</label>
           <?php echo form_error('user_address', '<p class="text-danger">', '</p>'); ?>
          <?php echo form_input(['name'=>'user_address','placeholder'=>'Enter your address','class'=>' shadow form-control'],set_value('user_address')); ?>
        </div> 
      </div>

      <div class="card-body">
         <div class="form-group"> 
          <?php echo form_submit(['name'=>'createsubmit', 'value'=>'Create','class'=>'btn btn-success shadow bt-lg btn-block']); ?> 
          <?php echo anchor(base_url(), 'Cancel', ['class'=>'btn btn-light bt-lg btn-block shadow']);?>
        
         </div>
      </div> 
<?php echo form_close(); ?>
  </div>
  </div>
<?php
include_once('templates/footer.php');
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once('templates/header.php');
?>
    <?php $username = $this->session->userdata('userename')?>
  <?php if ($this->session->userdata('is_logged_in') )
    { 
      if ($username == 'admin') {
         
      }
    } 
    else{
      return redirect(base_url());
    }
?>
<div class="container">
	<h1>All Users</h1>
	
	<!-- <?php //echo anchor('users/create_user', 'Add User', ['class'=>'btn btn-info']);?> -->
	<table class="table table-hover shadow-lg">
  <thead class="thead-darkt">
    <tr>
      <!-- <th scope="col">ID</th> -->
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <!-- <th scope="col">Password</th> -->
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php if (!empty($users)):?>
  		<?php foreach ($users as $user):?>
    <tr>
      <!-- <th scope="row"><?php //echo $user->user_id;?></th> -->
      <td><?php echo $user->user_name;?></td>
      <td><?php echo $user->user_email;?></td>
      <td><?php echo $user->user_phone;?></td>
      <!-- <td><?php echo $user->user_password;?></td> -->
      <td><?php echo $user->user_address;?></td>
      <td>
        <?php $onclick = array(
                                'onclick'=>"return confirm('Are you sure you want to delete this user?')",
                                'class'=>'btn btn-danger shadow'
                          );?>
      	<?php echo anchor("users/update_user/{$user->user_id}", 'Edit', ['class'=>'btn btn-warning shadow']);?>
      	<?php echo anchor("users/delete_user/{$user->user_id}", 'Delete',$onclick);?> 
      </td>
    </tr>
		<?php endforeach;?>
    <?php else:?>
    	<tr><td>No Record Found.</td></tr>
    <?php endif;?>	
  </tbody>
</table> 
</div>
<?php
include_once('templates/footer.php');
?>
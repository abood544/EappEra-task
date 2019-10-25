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


	<div class=" mx-auto card bg-light mb-3" style="max-width: 50rem;">
      <h1 class="card-header" style="background-color: #aac9ff;">Create New Post</h1>
      <div class="card-body">

      	<div class="form-group shadow-sm">
	      <label for="inputimg">Chose image</label>
	      <?php echo form_open_multipart('posts/create_post'); ?>
	      <input type="file" name="inputimg" />
	      <small id="inputimg" class="form-text text-muted">You can select any image and publish it with the post.</small> 
	    </div>

      	<div class="form-group shadow-sm">
          <label for="inputtitle">Post Title</label>
          <?php echo form_error('post_title', '<p class="text-danger">', '</p>'); ?>
          <?php echo form_input(['name'=>'post_title','placeholder'=>'Enter Title','class'=>'form-control'],
          set_value('post_title')); ?>
        </div>
        <div class="form-group shadow-sm">
	      <label for="textareadesc">Post Description</label>
	      <?php echo form_textarea(['name'=>'textareadesc','placeholder'=>'Enter Post Decsription','class'=>'form-control'],set_value('textareadesc')) ?>
	    </div>
      </div>

      <div class="card-body">
         <div class="form-group  ">  
          <?php echo form_submit(['name'=>'Postsubmit', 'value'=>'Create','class'=>'btn btn-success shadow bt-lg btn-block']); ?> 
          <?php echo anchor(base_url(), 'Cancel', ['class'=>'btn btn-light shadow bt-lg btn-block']);?>
         </div>
      </div> 

<?php echo form_close(); ?>

  	</div>
  </div>
<?php
include_once('templates/footer.php');
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once('templates/header.php');
?>
	<div class="container">
		<!-- <?php //$username = $this->session->userdata('userename')?>
		<p>Welcome  <?php// echo $username?></p>  -->
		<!-- Start fetchin gthe posts -->
		<?php if (!empty($posts)):?>
			<?php foreach ($posts as $post):?>

<div class="card-group mb-3 shadow-lg">
	 <div class="card"> 
				<div class="row">
					<?php if($post->post_img_url != ''){?>
					<div class="col-2">
				      <img class="card-imgc float-left" src="<?php echo $post->post_img_url ?>" alt="Card image cap">
				    </div>
					<?php }?>
				    <div class="col-10">
				      <div class="card-body">
			      	<div class="text-muted">
					    published by <strong> <?php echo $post->user_name;?></strong>
					</div>
					<div class="text-muted">
					 published in <strong><?php echo $post->post_publish_date.' at '.date('h:i A', strtotime($post->post_publish_time));?></strong>
					</div>
			        <h4 class="card-title"><?php echo $post->post_title?></h4>
			        <p class="card-text lead"><?php echo $post->post_desc?></p>
			      </div>
				    </div>
				</div>
	</div>
 </div>
			<?php endforeach;?>
			 <?php else:?>
			 	<div class="text-center mb-3 alert alert-danger card-text" role="alert">
				  No records found .
				</div>
		    <?php endif;?>	
		  <!-- End fetching the posts -->
	</div>
<?php
include_once('templates/footer.php');
?>
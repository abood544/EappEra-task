<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once('templates/header.php');
?>
<div class="container"> 
	<div class="jumbotron">

		<?php if ($this->session->userdata('is_logged_in')) { $username = $this->session->userdata('userename') ?> 
			<p class="lead" >Welcome <?php echo $username ?></p>
        <?php } ?> 	 

	  <h1 class="display-3">Hello AND WELCOME</h1>
	  <p class="lead">This is a simple CodeIgniter Task Contains CRUD for users and post also a login screen </p>
	  <hr class="my-4">
	  <p>Maintainable and scalable structure , Clean code and Nice UI for the web part.
	</p>
	  <p class="lead">
	  </p>
	</div>
</div>
<?php
include_once('templates/footer.php');
?>
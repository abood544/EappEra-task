<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>


  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
  <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.3.1.slim.min.js")?>"></script>
	<!-- <script type="text/javascript" src="<?php //echo base_url("assets/js/jquery-3.3.1.js")?>"></script> -->
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
	 <style>
    .form-control{
          border-radius: 1rem;
     }
     .bg-secondaryform{
      background-color: #bad8f7;
     }
     .text-whitef{
      color: #777575;
     }
     .thead-darkt{
      background-color: #bad8f7;
     }
     .avatari{
      color: rgba(255, 255, 255, 0.6);
     }
     .card-imgc{
      width: 90%;
     }
     textarea{
      margin-top: 0px; 
      margin-bottom: 0px; 
      height: 105px;
     }
   </style>
</headp>
<body>
<nav class="mb-3 navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo base_url()?>">EappEra task</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("")?>">Home</span></a>
      </li>

 <?php if ($this->session->userdata('is_logged_in')) { ?>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Posts
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url("index.php/posts/add_post_view")?>">Add Post</span></a>
           <a class="dropdown-item" href="<?php echo base_url("index.php/posts")?>">View All Posts</span></a>
        </div>
      </li>
<?php } ?>

 <?php $username = $this->session->userdata('userename')?>
     <?php if ($this->session->userdata('is_logged_in') && $username == 'admin') { ?>
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url("index.php/users")?>">All Users</span></a>
        </div>
      </li>

<?php } ?>
    


    </ul>
    <ul class="navbar-nav  "> 
      <?php if ($this->session->userdata('is_logged_in')) { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url("index.php/users/logout")?>">Logout</a>
        </li>
      <?php } 
      else { ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("index.php/users/user_login")?>">Login</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("index.php/users/create_user")?>">Regiseter</a>
      </li>

       <?php } // end if ?> 

    </ul>
    <?php if ($this->session->userdata('is_logged_in')) { ?>
    <ul class="navbar-nav   nav-flex-icons">
      <li class="nav-item avatar">
        <?php $username = $this->session->userdata('userename')?> 
          <img src="<?php echo base_url("assets/img/useravatar.png")?>" class="rounded-circle z-depth-0"
            alt="avatar image" height="35"> <span class="avatari"><?php echo $username?></span>
      </li>
    </ul>
    <?php } // end if ?> 
  </div>
</nav>

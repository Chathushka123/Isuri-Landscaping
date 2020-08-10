<!doctype html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-select.css');?>">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700' rel='stylesheet' type='text/css'/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,700' rel='stylesheet' type='text/css'/>
	<link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/camera.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
    <!--script type="text/javascript" src="https://getfirebug.com/firebug-lite-debug.js"></script-->	
	<title>Isuri Land Scaping</title>
	<style type="text/css">
		.default {cursor: pointer;}
	</style>
</head>
<body>
<div class="page-container">
    <div id="header" class="header home_header" >
    	<div class="home-content-box">
			<nav class="navbar container header-color">
		
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
					<a href="index.html" class="navbar-brand header-color">
					<img src="<?php echo base_url('assets/img/logo.png');?>" alt="Sapphire">Isuri Landscaping
				</a>
			  </div>
  
                 
                 <div class="navbar-collapse collapse navbar-right header-color">
					<ul class="nav navbar-nav">
                      <li class="active header-color"><a class="header-color" href="<?php echo base_url('Pages');?>">Home</a></li> 
                      <li><a href="#about">About Us</a></li>
                      <li><a href="#contact" class="">Contact Us</a></li>
                       <li><a href="<?php echo base_url('Pages/Products');?>" class="">Products</a></li>
                      <?php
						if (isset($this->session->userdata['logged_in'])) {
						$username = ($this->session->userdata['logged_in']['username']);
						$email = ($this->session->userdata['logged_in']['email']);
						echo'<li ><span class="glyphicon glyphicon-user default" data-toggle="modal" data-target="#myModal">'.$username.'</span></li>';
						} else {
						echo'<li><span class="glyphicon glyphicon-user default" data-toggle="modal" data-target="#myModal">SignIn</span></li>';
						}
						?>
                      
                    </ul>

                 
					
					 
          </div><!-- /.navbar-collapse -->
          <div style="margin-top: 120px;  text-align: center"><h1 style="font-weight: 600; font-size: 40px" >FIND OUT <br> THE FERFECT GRASS FOR YOU</h1>
          <a style="margin-top: 10px;" class="btn btn-lg btn-general btn-blue smooth-scroll" href="#" role="button" title=" our work"> View Our Work</a></div> 
	</nav>		
</div>
</div>
</div>
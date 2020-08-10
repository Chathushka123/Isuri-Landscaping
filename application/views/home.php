	<style type="text/css">
  .mymodal{
     z-index: 10000 !important;
 }

 .bg-parallax {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
}

#about-bg-diagonal {
 width: 60%;
 height: 500px;
 background-image: url(../isuri/assets/image/about.jpg);
 float: right;
 border-left: 200px solid #f5f5f5;
 border-top: 500px solid transparent;

}
.content-title h3{
  font-size: 30px;
  font-weight: 700;
  text-align: center;
  margin: 0 0 30px 0;
  text-decoration-style: bold;
}



.container
{
  background-size: cover;
  width:1400px;
  /*padding:0px 30px 30px;*/
  
}
.camera_wrap{
  background-size: cover;
}

.btn-general {
    border-width: 2px;
    border-radius: 0;
    padding: 12px 26px 12px 26px;
    font-weight: 400;
    text-transform: uppercase;
    font-size: 15px
}

.btn-white {
    border-color: #34c6d3;
    color: #34c6d3;
}

.btn-white:hover,
.btn-white:focus {
    background-color: #34c6d3;
    color: #fff;
}

.btn-blue {
    border-color: #34c6d3;
    color: #34c6d3;
}

.btn-blue:hover,
.btn-blue:focus {
    background-color: #34c6d3;
    color: #fff;
}
form .form-control{
  color:#000;
}

  #str {
   width: 1200px;
   padding: 20px;
   height: auto;
   font-family: sans-serif;
   font-size: 40px;
   color: #fff;
   font-weight: bold;
   background: #000
}
</style>	
<?php
$success_msg= $this->session->flashdata('success_msg');
$error_msg= $this->session->flashdata('error_msg');

if($success_msg){
    ?>
    <div class="alert alert-success">
      <?php echo $success_msg; ?>
  </div>
  <?php
}
if($error_msg){
    ?>
    <div class="alert alert-danger">
      <?php echo $error_msg; ?>
  </div>
  <?php
}
?>
<div id="home"  class="container">
	<div class="row">
		<div class="col-md-12 slideshow">
			<div id="slideshow0">
				<!-- <div class="camera_wrap camera_emboss camera_white_skin">
					<img src="<?php echo base_url('assets/image/home1.jpg');?>" alt="Banner 1" />
					<div data-thumb="<?php echo base_url('assets/image/home1.jpg');?>" data-src="<?php echo base_url('assets/image/home1.jpg');?>" data-link="product.html">
					</div>
					<div data-thumb="<?php echo base_url('assets/image/home2.jpg');?>" data-src="<?php echo base_url('assets/image/home2.jpg');?>" >
					</div>
					<div data-thumb="<?php echo base_url('assets/image/home3.jpg');?>" data-src="<?php echo base_url('assets/image/home3.jpg');?>" >
					</div>
				</div> -->
			</div>
		</div>
	</div>
    <!-- <div class="row">
        <div id="str"></div>
         <a style="margin-top: 10px;" class="btn btn-lg btn-general btn-blue smooth-scroll" href="#" role="button" title=" our work"> View</a>
    </div> -->
   <section id="about" style="margin-top: 50px">
    <!-- About right side with diagonal parllax-->
    <div id="about-bg-diagonal" class="bg-parallax  animated fadeInDown"></div>

    <!-- About left side with content-->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div id="about-content-box">
                    <div id="about-content-box-outer">
                        <div id="about-content-box-inner">

                            <div class="content-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s" style="margin-top: 5px">
                                <h3>About Us</h3>
                                <div class="content-title-underline"></div>
                            </div>

                            <div id="about-desc" class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                <p style="text-align: justify;">Isuri Landscaping started up in 2015, and supply all kinds of grass which are Malaysian and Australian  carpet/normal grass all around in srilanka. we've been on an epic ride ever since, we strive to stay true to our core beliefs which is to deliver an exceptional experience for our community.<br>

                                We acknowledge that we are entirely responsible for our own reputation, the level of success we achieve, the brand image we create, and the contributions we make to the fulfillment industry. They're all a direct reflection of our mission which is to offer the cheapest and quickest door-to-door island wide delivery service in Sri Lanka. While we owe a huge thanks to our community for joining us on this awesome journey, we also hope that you'll continue to be a part of our story.</p>
                            </div>

                            <div id="about-btn" class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                <a class="btn btn-lg btn-general btn-blue smooth-scroll" href="#work" role="button" title=" our work"> Purchase</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>  

</div>
<div class="modal fade mymodal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            ×</button>
            <h4 class="modal-title" id="myModalLabel">
            Login/Registration</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                        <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="Login">
                            <form role="form" class="form-horizontal" method="post" action="<?php echo base_url('user/login_user'); ?>" >
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                    Email</label>
                                    <div class="col-sm-10">
                                        <input style="color:black" type="email" class="form-control" name="user_email" id="email1" placeholder="Email" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                    Password</label>
                                    <div class="col-sm-10">
                                        <input style="color:black" type="password" class="form-control" name="user_password" id="exampleInputPassword1" placeholder="Passwoard" required/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                        Submit</button>
                                        <button type="button" class="btn btn-primary btn-sm" onclick="logout();">
                                        Log Out</button>
                                        <a href="javascript:;">Forgot your password?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="Registration">
                            <form role="form" class="form-horizontal" method="post" action="<?php echo base_url('user/register_user'); ?>">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                    Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">

                                            <div class="col-md-12">
                                                <input style="color:black" type="text" name="user_name" class="form-control" placeholder="Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                    Email</label>
                                    <div class="col-sm-10">
                                        <input style="color:black" type="email" name="user_email" class="form-control" id="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                    Mobile</label>
                                    <div class="col-sm-10">
                                        <input style="color:black" type="text" name="user_mobile" class="form-control" id="mobile" placeholder="Mobile" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                    Password</label>
                                    <div class="col-sm-10">
                                        <input style="color:black" type="password" name="user_password" class="form-control" id="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                        Save & Continue</button>
                                        <button type="submit" class="btn btn-default btn-sm">
                                        Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.10.2.min.js');?>"></script>
<script type="text/javascript">

$(document).ready( function () {
var string = "Isuri Landscaping started up in 2015, and supply all kinds of grass ";
var str = string.split("");
var el = document.getElementById('str');
(function animate() {
str.length > 0 ? el.innerHTML += str.shift() : clearTimeout(running); 
var running = setTimeout(animate, 90);
})();
});

  function logout(){
    $.ajax({
      type:"POST", 
      url: '<?php echo base_url();?>User/logout',
      success: function(response){
        var obj = JSON.parse(response);
        if(obj.status=="true"){


            location.reload();    
        }

    }
});
}

</script>


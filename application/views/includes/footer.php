<style type="text/css">
	
	#footer-bottom {
    background-color: rgba(0, 0, 0, 0.2);
    padding: 30px 0;
    margin-top: 60px;
}

#footer-copyrights p {
    margin: 0;
    color: #fff;
}

#footer-menu {
    float: left;
    color: #fff;
    font-size: 16px;
    font-weight: 300;
}

#footer-menu ul {
    list-style: none;
    padding-left: 0;
    margin: 0;
    color: #fff;
}

#footer-menu ul li {
    display: inline-block;
}

#footer-menu a {
    color: #fff;
    font-size: 16px;
    font-weight: 300;
    margin: 0 10px;
    text-decoration: none;
}

#footer-menu a:hover {
    color: #34c6d3;
    
}


footer {
    background-color: #41464b;
    padding-top: 30px;
    border-top: 5px solid rgba(0, 0, 0, 0.2);
}

#contact-left h3,
#contact-right h3 {
    color: #fff;
    font-size: 27px;
    font-weight: 700;
}

#contact-left p {
    color: #fff;
    margin-bottom: 30px;
}

.comon {
    color: #fff;
}

.personal_address{
    letter-spacing: 1px;
    color: #fff;
}

#contact-info {
    padding-bottom: 10px;
}

form .form-control {
    background: transparent;
    border-radius: 0;
    border-color: #fff;
    font-size: 17px;
    font-weight: 300;
    padding: 8px 16px;
    margin-bottom: 20px;
    color: #fff;
}

#send-btn {
    margin-bottom: 6px;

}


.social-list {
    padding-left: 0;
}

.social-list li {
    list-style: none;
    display: inline-block;
    width: 32px;
    height: 32px;
    margin-right: 6px;
    margin-top: 10px;
}

.social-icon i {
    font-size: 17px;

}

.social-icon:hover {
    color: #34c6d3;
}

.icon-white {
    color: #fff;
}

.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    width: 1200px
}


</style>

     <footer style="margin-top: 50px">

        <div id="contact">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">
                        <div id="contact-left">

                            <h3>Isuri Landscaping</h3>
                            <p>Isuri Landscaping was founded in year 2015.</p>

                            <div id="contact-info">

                                <address class="comon">
                                    <strong class="personal_address">Address</strong>
                                    <p>198/1, Seththapasuwa,<br>Pamunugama,<br>Sri Lanka.</p>
                                </address>
                                <div id="phone-fax-email" class="comon">
                                    <strong class="personal_address">Phone: </strong><span>(+94> 776954389</span><br>
                                    
                                    <strong class="personal_address">Email: </strong><span>isurilandscaping@gmail.com</span><br>
                                </div>
                            </div>
                            <ul class="social-list icon-white">
                                <li><a href="#" class="social-icon icon-white"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="social-icon icon-white"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="social-icon icon-white"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#" class="social-icon icon-white"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div id="contact-right">
                            <h3>contact Us</h3>
                            <form action="Pages/auto_relay" method="post">

                                <input type="text" name="full_name" placeholder="Full Name" class="form-control" required>
                                <input type="text" name="email" placeholder="Email-Address" class="form-control" required>
                                <textarea rows="5" name="message" placeholder="Message.." class="form-control"></textarea>

                                <div id="send-btn">
                                    <input type="submit" name="" class="btn btn-lg btn-general btn-white" value="Send">
                                   
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div id="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div id="footer-copyrights">
                            <p>Copyrights &copy; 2020 All Rights Reserved by Isuri Landscaping.</p>
                        </div>

                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs">
                        <div id="footer-menu">
                            <ul>
                                <li><a class="smooth-scroll" href="#header">Home</a>/</li>
                                <li><a class="smooth-scroll" href="#services">About Us</a>/</li>
                                <li><a class="smooth-scroll" href="#work">Contact</a></li>
                                <li><a href="#header" id="back-to-top" class="btn-sm btn-blue btn-back-to-top smooth-scroll"><i class="fa fa-angle-up " title="back-to-top" role="button"></i></a></li>
                               <!--  <li><a class="smooth-scroll" href="#team">Team</a>/</li>
                                <li><a class="smooth-scroll" href="#testimonials">Tesimonials</a>/</li>
                                <li><a class="smooth-scroll" href="#pricing">Pricing</a>/</li>
                                <li><a class="smooth-scroll" href="#stats">Stats</a></li> -->
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <a href="#home" id="back-to-top" class="btn-sm btn-blue btn-back-to-top smooth-scroll"><i class="fa fa-angle-up " title="back-to-top" role="button"></i></a> -->
    
    </footer>
<!-- script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='js/jquery-1.10.2.min.js'><\/script>")</script -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.10.2.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-select.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easing.1.3.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/camera.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/sapphire.js');?>"></script>
<script>
		$(document).ready( function()
		{	
			jQuery('#slideshow0 > div').camera({
			alignment:"center",
			autoAdvance:true,
			mobileAutoAdvance:true,
			barDirection:"leftToRight",
			barPosition:"bottom",
			cols:6,
			easing:"easeInOutExpo",
			mobileEasing:"easeInOutExpo",
			fx:"random",
			mobileFx:"random",
			gridDifference:250,
			height:"auto",
			hover:true,
			loader:"pie",
			loaderColor:"#eeeeee",
			loaderBgColor:"#222222",
			loaderOpacity:0.3,
			loaderPadding:2,
			loaderStroke:7,
			minHeight:"200px",
			navigation:true,
			navigationHover:true,
			mobileNavHover:true,
			opacityOnGrid:false,
			overlayer:true,
			pagination:true,
			pauseOnClick:true,
			playPause:true,
			pieDiameter:38,
			piePosition:"rightTop",
			portrait:false,
			rows:4,
			slicedCols:12,
			slicedRows:8,
			slideOn:"random",
			thumbnails:false,
			time:7000,
			transPeriod:1500,				
			imagePath: '../image/'
		});
	});
	</script>    
</body>

</html>

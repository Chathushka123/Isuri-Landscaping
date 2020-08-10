	

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
 background-image: url(../IsuriLandScaping/assets/image/about.jpg);
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



/*.container
{
  background-size: cover;
  width:1400px;
  /*padding:0px 30px 30px;*/
  
  }*/
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

  h3.h3{text-align:center;margin:1em;text-transform:capitalize;font-size:1.7em;}

  .steps {
    margin-top: -41px;
    display: inline-block;
    float: right;
    font-size: 16px
  }
  .step {
    float: left;
    background: white;
    padding: 7px 13px;
    border-radius: 1px;
    text-align: center;
    width: 100px;
    position: relative
  }
  .step_line {
    margin: 0;
    width: 0;
    height: 0;
    border-left: 16px solid #fff;
    border-top: 16px solid transparent;
    border-bottom: 16px solid transparent;
    z-index: 1008;
    position: absolute;
    left: 99px;
    top: 1px
  }
  .step_line.backline {
    border-left: 20px solid #f7f7f7;
    border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
    z-index: 1006;
    position: absolute;
    left: 99px;
    top: -3px
  }
  .step_complete {
    background: #357ebd
  }
  .step_complete a.check-bc, .step_complete a.check-bc:hover,.afix-1,.afix-1:hover{
    color: #eee;
  }
  .step_line.step_complete {
    background: 0;
    border-left: 16px solid #357ebd
  }
  .step_thankyou {
    float: left;
    background: white;
    padding: 7px 13px;
    border-radius: 1px;
    text-align: center;
    width: 100px;
  }
  .step.check_step {
    margin-left: 5px;
  }
  .ch_pp {
    text-decoration: underline;
  }
  .ch_pp.sip {
    margin-left: 10px;
  }
  .check-bc,
  .check-bc:hover {
    color: #222;
  }
  .SuccessField {
    border-color: #458845 !important;
    -webkit-box-shadow: 0 0 7px #9acc9a !important;
    -moz-box-shadow: 0 0 7px #9acc9a !important;
    box-shadow: 0 0 7px #9acc9a !important;
    background: #f9f9f9 url(../images/valid.png) no-repeat 98% center !important
  }

  .btn-xs{
    line-height: 28px;
  }

  /*login form*/
  .login-container{
    margin-top:30px ;
  }
  .login-container input[type=submit] {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    position: relative;
  }

  .login-container input[type=text], input[type=password] {
    height: 44px;
    font-size: 16px;
    width: 100%;
    margin-bottom: 10px;
    -webkit-appearance: none;
    background: #fff;
    border: 1px solid #d9d9d9;
    border-top: 1px solid #c0c0c0;
    /* border-radius: 2px; */
    padding: 0 8px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
  }

  .login-container input[type=text]:hover, input[type=password]:hover {
    border: 1px solid #b9b9b9;
    border-top: 1px solid #a0a0a0;
    -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
    -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
    box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }

  .login-container-submit {
    /* border: 1px solid #3079ed; */
    border: 0px;
    color: #fff;
    text-shadow: 0 1px rgba(0,0,0,0.1); 
    background-color: #357ebd;/*#4d90fe;*/
    padding: 17px 0px;
    font-family: roboto;
    font-size: 14px;
    /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
  }

  .login-container-submit:hover {
    /* border: 1px solid #2f5bb7; */
    border: 0px;
    text-shadow: 0 1px rgba(0,0,0,0.3);
    background-color: #357ae8;
    /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
  }

  .login-help{
    font-size: 12px;
  }

  .asterix{
    background:#f9f9f9 url(../images/red_asterisk.png) no-repeat 98% center !important;
  }

  /* images*/
  ol, ul {
    list-style: none;
  }
  .hand {
    cursor: pointer;
    cursor: pointer;
  }
  .cards{
    padding-left:0;
  }
  .cards li {
    -webkit-transition: all .2s;
    -moz-transition: all .2s;
    -ms-transition: all .2s;
    -o-transition: all .2s;
    transition: all .2s;
    background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
    background-position: 0 0;
    float: left;
    height: 32px;
    margin-right: 8px;
    text-indent: -9999px;
    width: 51px;
  }
  .cards .mastercard {
    background-position: -51px 0;
  }
  .cards li {
    -webkit-transition: all .2s;
    -moz-transition: all .2s;
    -ms-transition: all .2s;
    -o-transition: all .2s;
    transition: all .2s;
    background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
    background-position: 0 0;
    float: left;
    height: 32px;
    margin-right: 8px;
    text-indent: -9999px;
    width: 51px;
  }
  .cards .amex {
    background-position: -102px 0;
  }
  .cards li {
    -webkit-transition: all .2s;
    -moz-transition: all .2s;
    -ms-transition: all .2s;
    -o-transition: all .2s;
    transition: all .2s;
    background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
    background-position: 0 0;
    float: left;
    height: 32px;
    margin-right: 8px;
    text-indent: -9999px;
    width: 51px;
  }
  .cards li:last-child {
    margin-right: 0;
  }
  /* images end */



/*
 * BOOTSTRAP
 */
 .container{
  border: none;
}
.panel-footer{
  background:#fff;
}
.btn{
  border-radius: 1px;
}
.btn-sm, .btn-group-sm > .btn{
  border-radius: 1px;
}
.input-sm, .form-horizontal .form-group-sm .form-control{
  border-radius: 1px;
}

.panel-info {
  border-color: #999;
}

.panel-heading {
  border-top-left-radius: 1px;
  border-top-right-radius: 1px;
}
.panel {
  border-radius: 1px;
}
.panel-info > .panel-heading {
  color: #eee;
  border-color: #999;
}
.panel-info > .panel-heading {
  background-image: linear-gradient(to bottom, #555 0px, #888 100%);
}

hr {
  border-color: #999 -moz-use-text-color -moz-use-text-color;
}

.panel-footer {
  border-bottom-left-radius: 1px;
  border-bottom-right-radius: 1px;
  border-top: 1px solid #999;
}

.btn-link {
  color: #888;
}

hr{
  margin-bottom: 10px;
  margin-top: 10px;
}

/** MEDIA QUERIES **/
@media only screen and (max-width: 989px){
  .span1{
    margin-bottom: 15px;
    clear:both;
  }
}

@media only screen and (max-width: 764px){
  .inverse-1{
    float:right;
  }
}

@media only screen and (max-width: 586px){
  .cart-titles{
    display:none;
  }
  .panel {
    margin-bottom: 1px;
  }
}

.form-control {
  border-radius: 1px;
}

@media only screen and (max-width: 486px){
  .col-xss-12{
    width:100%;
  }
  .cart-img-show{
    display: none;
  }
  .btn-submit-fix{
    width:100%;
  }

}

form .form-control {
  color: black !important;
  border-color: #eacfcf !important;
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

<div class="container wrapper">
  <div class="row cart-head">
    <div class="container">
      <div class="row">
        <p></p>
      </div>
      <div class="row">
        <div style="display: table; margin: auto;">
          <span class="step step_complete"> <a href="#" class="check-bc">Cart</a> <span class="step_line step_complete"> </span> <span class="step_line backline"> </span> </span>
          <span class="step step_complete"> <a href="#" class="check-bc">Checkout</a> <span class="step_line "> </span> <span class="step_line step_complete"> </span> </span>
          <span class="step_thankyou check-bc step_complete">Thank you</span>
        </div>
      </div>
      <div class="row">
        <p></p>
      </div>
    </div>
  </div>    
  <div class="row cart-body">
    <form class="form-horizontal" method="post" action="order">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
        <!--REVIEW ORDER-->
        <div class="panel panel-info">
          <div class="panel-heading">
            Review Order <div class="pull-right"><small><a class="afix-1" href="#">Edit Cart</a></small></div>
          </div>
          <?php if ($cart = $this->cart->contents()){?>

            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Product </th>
                  <th>Name </th>
                  <th>Quantity</th>
                  <th class="text-center">Price</th>
                  <th class="text-center">Total</th>
                  <th> </th>
                </tr>
              </thead>
              <tbody>

                <?php     
                foreach ($this->cart->contents() as $items) {?>
                  <tr>
                    <td class="col-md-3">
                      <div class="media">
                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="<?php echo base_url('uploads/' . $items['image'])?>" style="width: 72px; height: 72px;"> </a>

                      </div></td>
                      <td><h4 class="media-heading"><a href="#"><strong><span class="text-warning"><?php echo $items['name'];?></span></strong></a></h4></td>
                      <td class="col-md-1" style="text-align: center">
                        <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $items['qty'];?>">
                      </td>
                      <td class="col-md-1 text-center"><strong>Rs.<?php echo $items['price'];?></strong></td>
                      <td class="col-md-1 text-center"><strong>Rs.<?php echo number_format($items['subtotal']);?></strong></td>
                      <td class="col-md-1">
                        <a href="<?php echo base_url('Pages/removeItem/'.$items["rowid"]); ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i></a></td>
                      </tr>
                    <?php }?>
                    <tr>
                      <td>   </td>
                      <td>   </td>
                      <td>   </td>
                      <td><h5>Subtotal</h5></td>
                      <td class="text-right"><h5><strong>Rs.<?php echo $this->cart->total();?></strong></h5></td>
                    </tr>



                      </tr>
                    </tbody>
                  </table>
                <?php }?>

              </div>
              <!--REVIEW ORDER END-->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
              <!--SHIPPING METHOD-->
              <div class="panel panel-info">
                <div class="panel-heading">Address</div>
                <div class="panel-body">
                  
                  <div class="form-group">
                    <div class="col-md-12">
                      <h4>Shipping Address</h4>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <div class="col-md-6 col-xs-12">
                      <strong>First Name:</strong>
                      <input type="text" name="first_name" class="form-control" required />
                    </div>
                    <div class="span1"></div>
                    <div class="col-md-6 col-xs-12">
                      <strong>Last Name:</strong>
                      <input type="text" name="last_name" class="form-control" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12"><strong>Address:</strong></div>
                    <div class="col-md-12">
                      <input type="text" name="address" class="form-control" required />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12"><strong>City:</strong></div>
                    <div class="col-md-12">
                      <input type="text" name="city" class="form-control" required/>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <div class="col-md-12"><strong>Phone Number:</strong></div>
                    <div class="col-md-12"><input type="text" name="phone_number" class="form-control" required/></div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12"><strong>Email Address:</strong></div>
                    <div class="col-md-12"><input type="text" name="email_address" class="form-control" required /></div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <button type="submit" class="btn btn-primary btn-submit-fix">Place Order</button>
                    </div>
                  </div>
                </div>
              </div>
              <!--SHIPPING METHOD END-->

            </div>

          </form>
        </div>
        <div class="row cart-footer">

        </div>
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


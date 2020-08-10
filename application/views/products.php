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

/********************* shopping Demo-1 **********************/
.product-grid{font-family:Raleway,sans-serif;text-align:center;padding:0 0 72px;border:1px solid rgba(0,0,0,.1);overflow:hidden;position:relative;z-index:1}
.product-grid .product-image{position:relative;transition:all .3s ease 0s}
.product-grid .product-image a{display:block}
.product-grid .product-image img{width:100%;height:auto}
.product-grid .pic-1{opacity:1;transition:all .3s ease-out 0s}
.product-grid:hover .pic-1{opacity:1}
.product-grid .pic-2{opacity:0;position:absolute;top:0;left:0;transition:all .3s ease-out 0s}
.product-grid:hover .pic-2{opacity:1}
.product-grid .social{width:150px;padding:0;margin:0;list-style:none;opacity:0;transform:translateY(-50%) translateX(-50%);position:absolute;top:60%;left:50%;z-index:1;transition:all .3s ease 0s}
.product-grid:hover .social{opacity:1;top:50%}
.product-grid .social li{display:inline-block}
.product-grid .social li a{color:#fff;background-color:#333;font-size:16px;line-height:40px;text-align:center;height:40px;width:40px;margin:0 2px;display:block;position:relative;transition:all .3s ease-in-out}
.product-grid .social li a:hover{color:#fff;background-color:#ef5777}
.product-grid .social li a:after,.product-grid .social li a:before{content:attr(data-tip);color:#fff;background-color:#000;font-size:12px;letter-spacing:1px;line-height:20px;padding:1px 5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
.product-grid .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-20px;z-index:-1}
.product-grid .social li a:hover:after,.product-grid .social li a:hover:before{opacity:1}
.product-grid .product-discount-label,.product-grid .product-new-label{color:#fff;background-color:#ef5777;font-size:12px;text-transform:uppercase;padding:2px 7px;display:block;position:absolute;top:10px;left:0}
.product-grid .product-discount-label{background-color:#333;left:auto;right:0}
.product-grid .rating{color:#FFD200;font-size:12px;padding:12px 0 0;margin:0;list-style:none;position:relative;z-index:-1}
.product-grid .rating li.disable{color:rgba(0,0,0,.2)}
.product-grid .product-content{background-color:#fff;text-align:center;padding:12px 0;margin:0 auto;position:absolute;left:0;right:0;bottom:-27px;z-index:1;transition:all .3s}
.product-grid:hover .product-content{bottom:0}
.product-grid .title{font-size:13px;font-weight:400;letter-spacing:.5px;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
.product-grid .title a{color:#828282}
.product-grid .title a:hover,.product-grid:hover .title a{color:#ef5777}
.product-grid .price{color:#333;font-size:17px;font-family:Montserrat,sans-serif;font-weight:700;letter-spacing:.6px;margin-bottom:8px;text-align:center;transition:all .3s}
.product-grid .price span{color:#999;font-size:13px;font-weight:400;text-decoration:line-through;margin-left:3px;display:inline-block}
.product-grid .add-to-cart{color:#000;font-size:13px;font-weight:600}
@media only screen and (max-width:990px){.product-grid{margin-bottom:30px}
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

<div class="container">
    <h3 class="h3">Newest Products </h3>
     <div class="row">
    <?php foreach($products as $row) { ?>
    
 
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img style="width:274px; height:211px" class='pic-1' src="<?php echo base_url('uploads/' . $row->product_image)?>" alt=""/>

                        
                        <img class='pic-2' src="<?php echo base_url('uploads/' . $row->product_image)?>" alt=""/>
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="<?php echo base_url('Pages/Single_product/?id='.$row->id); ?>" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#"><?php echo $row->product_name;?></a></h3>
                    <div class="price">RS.<?php echo $row->price1;?>
                        <span>RS.<?php echo $row->price2;?></span>
                    </div>
                    <a class="add-to-cart" href="<?php echo base_url('Pages/Single_product/?id='.$row->id); ?>">+ Add To Cart</a>
                </div>
            </div>
        </div>
      

    <?php }?>
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


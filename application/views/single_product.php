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

ul > li{margin-right:25px;font-weight:lighter;cursor:pointer}
li.active{border-bottom:3px solid silver;}

.item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
.menu-items{list-style-type:none;font-size:11px;display:inline-flex;margin-bottom:0;margin-top:20px}
.btn-success{border-radius:0;}
.section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
.title-price{margin-top:30px;margin-bottom:0;color:black}
.title-attr{margin-top:0;margin-bottom:0;color:black;}
.btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0;}
.btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0;}
div.section > div {width:100%;display:inline-flex;}
div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
.attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
.attr.active,.attr2.active{ border:1px solid orange;}

@media (max-width: 426px) {
    .container {margin-top:0px !important;}
    .container > .row{padding:0 !important;}
    .container > .row > .col-xs-12.col-sm-5{
        padding-right:0 ;    
    }
    .container > .row > .col-xs-12.col-sm-9 > div > p{
        padding-left:0 !important;
        padding-right:0 !important;
    }
    .container > .row > .col-xs-12.col-sm-9 > div > ul{
        padding-left:10px !important;
        
    }            
    .section{width:104%;}
    .menu-items{padding-left:0;}
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
    <?php foreach($single_product as $row) { ?>
        <div class="row">
         <div class="col-xs-4 item-photo">
            <img style="max-width:100%;" src="<?php echo base_url('uploads/' . $row->product_image)?>" />
        </div>
        <div class="col-xs-5" style="border:0px solid gray">
            <!-- Datos del vendedor y titulo del producto -->
            <h3><?php echo $row->product_name;?></h3>    



            <h3 style="margin-top:0px;">Rs.<?php echo $row->price2;?></h3>

            <!-- Detalles especificos del producto -->


            <div class="section" style="padding-bottom:20px;">
                <h6 class="title-attr"><small>Quantity</small></h6>                    
                <div>
                    <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                    <input value="1" id="qty" name="qty" />
                    <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
                </div>
            </div>                

            <!-- Botones de compra -->
            <div class="section" style="padding-bottom:20px;">
                <button class="btn btn-success add_cart"  data-productid="<?php echo $row->id;?>" data-productname="<?php echo $row->product_name;?>" data-productprice="<?php echo $row->price2;?>"  data-productimage="<?php echo $row->product_image;?>"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart "  aria-hidden="true"></span> Add To Cart</button>

            </div>                                        
        </div>                              
        
        <div class="col-xs-9">
            <ul class="menu-items">
                <li class="active">Description</li>

            </ul>
            <div style="width:100%;border-top:1px solid silver">
                <p style="padding:15px;">
                    <small>
                       <?php echo $row->description;?>
                    </small>
                </p>
              
            </div>
        </div>      
    </div>
<?php } ?>
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

    $(document).ready(function(){
            //-- Click on detail
            $("ul.menu-items > li").on("click",function(){
                $("ul.menu-items > li").removeClass("active");
                $(this).addClass("active");
            })

            $(".attr,.attr2").on("click",function(){
                var clase = $(this).attr("class");

                $("." + clase).removeClass("active");
                $(this).addClass("active");
            })

            //-- Click on QUANTITY
            $(".btn-minus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1 > 0){ now--;}
                    $(".section > div > input").val(now);
                }else{
                    $(".section > div > input").val("1");
                }
            })            
            $(".btn-plus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    $(".section > div > input").val(parseInt(now)+1);
                }else{
                    $(".section > div > input").val("1");
                }
            })                        
        }) 

    $('.add_cart').click(function(){
        var product_id    = $(this).data("productid");
        var product_name  = $(this).data("productname");
        var product_price = $(this).data("productprice");
        var product_image = $(this).data("productimage");
        var quantity      = $('#qty').val();
        $.ajax({
            url : "<?php echo site_url('Pages/add_to_cart');?>",
            method : "POST",
            data : {product_id: product_id, product_name: product_name, product_price: product_price, quantity: quantity,product_image:product_image},
            success: function(data){
             window.location.href= "<?php echo base_url('Pages/cart'); ?>";
            }
        });
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


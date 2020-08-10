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
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">



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


                                <td>   </td>
                                <td>   </td>
                                <td>   </td>
                                <td>
                                    <button type="button" class="btn btn-default">
                                        <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                                    </button></td>
                                    <td>
                                        <button type="button" class="btn btn-success"onclick="f1()" >
                                            Checkout <span class="glyphicon glyphicon-play"></span>
                                        </button></td>
                                    </tr>
                                </tbody>
                            </table>
                        <?php }?>
                    </div>
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


        function f1()
        {
           window.location.href= "<?php echo base_url('Pages/Checkout'); ?>";
       }

   </script>


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {


  function __construct() {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->model('Dashboard_model');

  }

  public function load_include_with_sub_nav($title,$page,$data){ 

    $this->load->view('includes/header',$title);
    $this->load->view($page,$data);
    $this->load->view('includes/footer');
  }

  public function index()
  {
    $this->Home();
  }

  public function Home()
  {  
    $data['']= '';
    $title['title']="Home";
    $this->load_include_with_sub_nav($title,'home',$data);
  }

  public function Login()
  {  
    $data['']= '';
    $title['title']="Home";
    $this->load_include_with_sub_nav($title,'login',$data);
  }

  public function Contact()
  {  
    $data['']= '';
    $title['title']="Contact Us";
    $this->load_include_with_sub_nav($title,'contact',$data);
  }

  public function Products()
  {  
    $data['products'] = $this->Dashboard_model->load_products();
    $title['title']="Home";
    $this->load_include_with_sub_nav($title,'products',$data);
  }

  public function Single_product()
  { 
    $id = $_GET['id']; 
    $data['products'] = $this->Dashboard_model->load_products();
    $data['single_product'] = $this->Dashboard_model->single_product($id);
    $title['title']="Single_product";
    $this->load_include_with_sub_nav($title,'single_product',$data);
  }

  public function Cart()
  { 
    $title['title']="Cart";
    $data='';
    $this->load_include_with_sub_nav($title,'cart',$data);
  }

  public function Checkout()
  { 

    if ( ! $this->session->userdata('logged_in'))
    { 
     $this->session->set_flashdata('success_msg', 'Please Login to Order.');
     redirect('Pages/Cart');
   }
   $title['title']="Checkout";
   $data='';
   $this->load_include_with_sub_nav($title,'checkout',$data);
 }

 function add_to_cart(){ 
  $data = array(
    'id' => $this->input->post('product_id'), 
    'name' => $this->input->post('product_name'), 
    'price' => $this->input->post('product_price'), 
    'qty' => $this->input->post('quantity'), 
    'image' => $this->input->post('product_image')
  );
  $this->cart->insert($data);
        //echo $this->show_cart(); 
  redirect('Pages/cart');
}

function removeItem($rowid){
        // Remove item from cart
  $remove = $this->cart->remove($rowid);

        // Redirect to the cart page
  redirect('Pages/cart');
}


function auto_relay(){

  $TITLE  ='email';
  $email = $this->input->post('email');
  $config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'xxx',
    'smtp_pass' => 'xxx',
    'mailtype'  => 'html', 
    'charset'   => 'iso-8859-1'
  );
  $this->load->library('email', $config);
  $this->email->initialize($config);
  $this->email->to($email);
  $this->email->from('noreply', $TITLE);
  $this->email->subject($TITLE . " - Product Inquiry - Thank You");

  $msg = '<html><body>';
  $msg .= '<img src="' . base_url() . 'media/images/logo.png" alt="' . $TITLE . '" />';
  $msg .= "<p>Thanks for the Inquiry, We will contact you soon..! ";
  $msg .= "</p>";
  $msg .= "</body></html>";

  $this->email->message($msg);
  $this->email->send();

  if ( ! $this->email->send() )
  {
    $data=array(
      'from_email' => $this->input->post('email'),
      'message'=>$this->input->post('message'),
      'fullname'=>$this->input->post('full_name')
    );
   $r = $this->db->insert('recieved_emails',$data);
   if($r){
    $this->session->set_flashdata('success_msg', 'Email Successfully Sent.');
    redirect('Pages');
   }
    

  }
  else
    echo 'Sent';
}

public function order()
{
  $user_id = $this->session->userdata('logged_in');
  $user = $user_id['user_id'];
  $data=array(
   'full_name'=>$this->input->post('first_name').' '.$this->input->post('last_name'),
   'address'=>$this->input->post('address').','.$this->input->post('city'),
   'phone'=>$this->input->post('phone_number'),
   'email'=>$this->input->post('email_address'),
   'cartContentString'=>serialize($this->cart->contents()),
   'customer_id'=>$user
 );

  $result=$this->db->insert('orders',$data);
  if($result)
  {
    $this->cart->destroy();
    $this->session->set_flashdata('success_msg', 'Successfully Ordered.');
    redirect('Pages');

  }
  else{
   redirect('Pages');
 }

}
}
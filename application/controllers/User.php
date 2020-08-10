<?php

class User extends CI_Controller {

  public function __construct(){

    parent::__construct();
    $this->load->helper('url');
    $this->load->model('user_model');
    $this->load->library('session');

  }

// public function index()
// {
// $this->load->view("register.php");
// }

  public function register_user(){

    $user=array(
      'user_name'=>$this->input->post('user_name'),
      'user_email'=>$this->input->post('user_email'),
      'user_password'=>md5($this->input->post('user_password')),
      'user_mobile'=>$this->input->post('user_mobile')
    );
    print_r($user);

    $email_check=$this->user_model->email_check($user['user_email']);

    if($email_check){
      $this->user_model->register_user($user);
      $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
      redirect('Pages');

    }
    else{

      $this->session->set_flashdata('error_msg', 'Email Exsits,Try again.');
      redirect('Pages');


    }

  }


  function login_user(){ 

    $user_email=$this->input->post('user_email');
    $user_password=md5($this->input->post('user_password'));

//$user_login['user_email'],$user_login['user_password']
    $data['users']=$this->user_model->login_user($user_email,$user_password);
    //print_r($data['users'][0]['user_id']);
    
    if($data['users'] != '' && $data['users']>0)
    {

     $session_data = array(
      'username' => $data['users'][0]->user_name,
       'user_id' => $data['users'][0]->user_id,
      'email' => $data['users'][0]->user_email
    );
// Add user data in session
     $this->session->set_userdata('logged_in', $session_data); 
     $this->session->set_flashdata('success_msg', 'Successfully Logged In');
     $url = $_SERVER['HTTP_REFERER'];
     redirect($url);

   }
   else{
    $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
    redirect('Pages', 'refresh');

  }


}

function user_profile(){

  $this->load->view('user_profile.php');

}
// public function user_logout(){

//   $this->session->sess_destroy();
//   redirect('user/login_view', 'refresh');
// }

public function logout(){
  $this->session->unset_userdata('userdata');
    //delete the remember me cookies if they exist
  $this->session->sess_destroy();
  echo json_encode(array('status' =>'true','data'=>'true'));
  
}

public function Admin_login()
{

  $this->load->view('backend/login');
}



public function user_admin(){ 

  $user_email=$this->input->post('user_email');
  $user_password=md5($this->input->post('user_password'));

//$user_login['user_email'],$user_login['user_password']
  $data['users']=$this->user_model->admin_login_user($user_email,$user_password);
    //print_r($data['users'][0]['user_id']);

  if($data['users'] != '' && $data['users']>0)
  {


   $session_data = array(
    'username' => $data['users'][0]->user_name,
    'email' => $data['users'][0]->user_email,
  );

// Add user data in session
   $this->session->set_userdata('admin_logged_in', $session_data); 
   $this->session->set_flashdata('success_msg', 'Successfully Logged In');

   redirect('Dashboard', 'refresh');

 }
 else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('User/Admin_login', 'refresh');

}


}

}
?>
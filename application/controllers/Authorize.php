<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Authorize extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('DepositModel');
    $this->load->model('Members');
    $this->load->model('Deposit_Options');
    $this->load->model('PackageModel');
  }

  public function index()
  {
    $data['title'] = 'Authentication';

    if(isset($_POST['auth_code'])){
        // print_r($this->session->get_userdata('user_id')['user_id']);
        $id = $this->session->get_userdata('user_id')['user_id'];
        $member_data = $this->Members->get_member_by_id($id);
        $auth_code = $member_data->auth_code;

        if($_POST['auth_code'] == $auth_code){
          $userdata = array(
              'email' => $member_data->email_address,
              'fullname' => $member_data->full_name,
              'date_registered' => $member_data->date,
              'username' => $member_data->username,
              'user_id' => $member_data->id
          );

          $this->session->set_userdata($userdata);
					$this->session->set_flashdata('new-login', "1");


          redirect('dashboard');
        }else{
            // $this->session->set_flashdata('member_id', $id);
            $this->session->set_flashdata('error', "Invalid code");

            redirect('authorize');
        }
    }else{
        $this->load->view('login/authorize', $data);

    }

    // $this->load->view('login/authorize', $data);
  }

}
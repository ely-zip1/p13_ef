<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Advanced_withdrawal  extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PackageModel');
		$this->load->model('DepositModel');
		$this->load->model('Members');
		$this->load->model('Deposit_Options');
		$this->load->model('WithdrawalModel');
		$this->load->model('Referral_bonus_model');
		$this->load->model('Fund_transfer_model');
		$this->load->model('Referral_codes');
		$this->load->model('Fund_bonus_model');
		$this->load->model('GroupSalesModel');
		$this->load->model('Advanced_withdrawals_model');

		date_default_timezone_set('Asia/Manila');
	}

	public function index()
	{
		$data = array(
			'title' => 'Advanced Withdrawal'
		);

		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = $this->session->userdata('fullname');
		$data['date_registered'] = $this->session->userdata('date_registered');

		$member_data = $this->Members->get_member($this->session->username);
		
		$this->form_validation->set_rules('fullname', 'Full name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('capital', 'Capital Investment', 'required');
		$this->form_validation->set_rules('amount', 'Amount', 'required');
		$this->form_validation->set_rules('agree-checkbox', 'Checkbox', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('pages/advanced_withdrawal', $data);
		}
		else {
			


			$this->session->set_flashdata('advanced_withdrawal_status', "Your application has been received.");
			$this->load->view('pages/advanced_withdrawal', $data);
		}
		
    }

  }
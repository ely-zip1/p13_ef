<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advanced_withdrawals_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    //
  }

  public function add($data){

    return $this->db->insert('td_advanced_withdrawals',$data);
    
  }

  public function update($data){
    $this->db->set('member_id', $data['member_id']);
    $this->db->set('amount', $data['aw_amount']);
    $this->db->set('date', $data['aw_date']);
    $this->db->set('capital', $data['aw_capital']);
    $this->db->set('status', $data['aw_status']);
    $this->db->where('id', $data['aw_id']);
    $this->db->update('td_advanced_withdrawals');
  }

  public function get_per_member_id($member_id){
    $this->db->where('member_id', $member_id);
    $query = $this->db->get('td_advanced_withdrawals');

    return $query->row();
  }

}